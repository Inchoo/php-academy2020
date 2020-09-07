drop schema academy;
CREATE DATABASE academy CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/*
 MySQL includes character set support that enables you to store data using a variety of character sets
 and perform comparisons according to a variety of collations. The default MySQL server character set and collation
 are utf8mb4 and utf8mb4_0900_ai_ci.
 https://dev.mysql.com/doc/refman/8.0/en/charset.html

 A collation is a set of rules that defines how to compare and sort character strings.
 Each collation in MySQL belongs to a single character set. Every character set has at least one collation,
 and most have two or more collations.
https://dev.mysql.com/doc/refman/8.0/en/adding-collation.html
 */

use academy;

/*
 A primary key is a column or a set of columns that uniquely identifies each row in the table.
 It can't be null and must be unique even if it consists of multiple columns.
 https://www.mysqltutorial.org/mysql-primary-key/
 */
create table city
(
    id   int not null primary key auto_increment,
    name varchar(255)
);

create table student
(
    id   int not null primary key auto_increment,
    first_name varchar(255),
    last_name varchar(255),
    age  int,
    city int,
    foreign key (city)
        references city (id)
) ENGINE = InnoDB;
/*
Data types: https://dev.mysql.com/doc/refman/8.0/en/data-types.html
Short explanation of the most common data types: https://dzone.com/articles/mysql-data-types-an-overview-of-the-data-types-in
 */
insert into city (name)
values ('Osijek'),
       ('Zagreb');

insert into student (first_name, last_name, age, city)
values /* In theory there is no difference between values and value: https://stackoverflow.com/a/17445644 */
    ('Iva', 'Ivić', 25, 1), /* Error Incorrect string value: '\xC4\x87' for column 'name' at row 1 */
    ('Mirko', 'Mirkić', 49, 1),
    ('Test', 'Testić', 87, 2);

select *
from student;
/* same as select first name, last name, age, city from student */


/*
We can join data regardless of the foreign key constraint.
One of the main purposes of the foreign key constraints is referential integrity which is a  technique of maintaining data always in a consistent format.
In particular, data in different tables is kept consistent through the use of foreign key constraints, which can prevent changes from happening or automatically propagate those changes to all related tables.
https://dev.mysql.com/doc/refman/5.6/en/glossary.html#glos_referential_integrity
*/
select s.first_name, s.last_name, s.age, c.name as city
from student s
         inner join city c on s.city = c.id;

# select first name, last name, age and city and sort data by first name desc
select s.first_name, s.last_name, s.age, c.name as city
from student s
         inner join city c on s.city = c.id
order by s.first_name desc;
# Ordering data by last name would not be possible in the case where we keep full name in one column. First and last name are two separate data so keep them in separate columns.

# select full student name in one column, age and city
select CONCAT(s.first_name, ' ', s.last_name) as full_name, s.age, c.name as city
from student s
         inner join city c on s.city = c.id;

create table lecture
(
    id   int not null primary key auto_increment,
    name varchar(255),
    ects int
);

create table student_lecture
(
    id      int not null primary key auto_increment,
    student int not null,
    lecture int not null,
    grade   int,
    foreign key (student)
        references student (id),
    foreign key (lecture)
        references lecture (id)
    ON DELETE CASCADE
);

update lecture
set ects = 5
where name = 'Database II';

delete from city where name = 'Otok';

delete from lecture where name = 'IOT';
# By default we can't delete this lecture as it is referenced in another table. In our example we will add ON DELETE CASCADE.
# Check other options: https://dev.mysql.com/doc/refman/8.0/en/create-table-foreign-keys.html#foreign-key-referential-actions

# 1. Izlistaj sve kolegije koji imaju manje ili jednako od 4 ECTS boda.
select * from lecture where ects <= 4;

# 2. Izlistaj imena i prezimena studenata koji se zovu Iva i Ante.
select first_name, last_name from student where first_name in ('Iva', 'Ante');
select first_name, last_name from student where first_name = 'Iva' or first_name = 'Ante';

# 3. Koliko kolegija ima 3 ECTS boda
select COUNT(*) from lecture where ects = 3;

# 4. Izlistaj 2 najstarija studenta
select * from student order by age desc limit 2;

# 5. Koliko različitih imena postoji među studentima
select COUNT(DISTINCT first_name) from student;

# 6. Izlistaj prosječnu dob studenata čije ime počinje sa slovom T i prezime završava na ić.
select AVG(age) from student where first_name like 'T%' and last_name like '%ić';

# 7. Izlistaj jedinstvene nazive gradove u kojima žive studenti
select DISTINCT c.name from city c inner join student s on c.id = s.city;
select c.name from city c inner join student s on c.id = s.city GROUP BY c.name;

# 8. Izlistaj sve gradove i broj koliko studenata živi u tom gradu. Rezultate poredaj po broju studenata od najvećeg prema najmanjem
select c.name, COUNT(s.id) as broj_studenata from city c left join student s on c.id = s.city GROUP BY c.id ORDER BY broj_studenata desc;

# 9. Koja je prosječna ocjena studenata na kolegijima koji u nazivu imaju Introduction to Computer Science
select AVG(sl.grade) from student_lecture sl inner join lecture l on sl.lecture = l.id where l.name like '%Introduction to Computer Science%';

# 10. Koja je prosječna ocjena studenta Test Testić na svim kolegijima
select AVG(sl.grade) from student_lecture sl inner join student s on sl.student = s.id where s.first_name = 'Test' and s.last_name = 'Testić';

# 11. Izlistaj prezimena studenata koji žive u Osijeku i slušaju Database I kolegij
select last_name from student s
inner join city c on s.city = c.id
inner join  student_lecture sl on s.id = sl.student
inner join lecture l on sl.lecture = l.id
where c.name = 'Osijek' and l.name = 'Database I';

# 12. Izlistaj ime i prezime studenta te broj ECTS bodova čiji zbroj ECTS-a prelazi 10
select s.first_name, s.last_name, SUM(l.ects) as broj_bodova from student_lecture sl
inner join student s on sl.student = s.id
inner join lecture l on sl.lecture = l.id
GROUP BY s.id
HAVING SUM(l.ects) > 10;

# Short intro to EAV
# Magento: Select product SKUs and their names
select cpe.sku, cpev.value from catalog_product_entity cpe
inner join catalog_product_entity_varchar cpev on cpe.entity_id = cpev.entity_id
inner join eav_attribute ea on cpev.attribute_id = ea.attribute_id
inner join eav_entity_type eet on ea.entity_type_id = eet.entity_type_id
where eet.entity_type_code = 'catalog_product' and ea.attribute_code = 'name';
