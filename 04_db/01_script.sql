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
    name varchar(255),
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

insert into student (name, age, city)
values /* In theory there is no difference between values and value: https://stackoverflow.com/a/17445644 */
    ('Iva Ivić', 25, 1), /* Error Incorrect string value: '\xC4\x87' for column 'name' at row 1 */
    ('Mirko Mirkić', 49, 1),
    ('Test Testić', 87, 2);

select *
from student;
/* same as select name, age, city from student */


/*
We can join data regardless of the foreign key constraint.
One of the main purposes of the foreign key constraints is referential integrity which is a  technique of maintaining data always in a consistent format.
In particular, data in different tables is kept consistent through the use of foreign key constraints, which can prevent changes from happening or automatically propagate those changes to all related tables.
https://dev.mysql.com/doc/refman/5.6/en/glossary.html#glos_referential_integrity
*/
select s.name, s.age, c.name as city
from student s
         inner join city c on s.city = c.id;
