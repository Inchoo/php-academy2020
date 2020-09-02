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

drop table if exists student;

create table student (
    name varchar(255),
    age  int,
    city varchar(255)
);
/*
Data types: https://dev.mysql.com/doc/refman/8.0/en/data-types.html
Short explanation of the most common data types: https://dzone.com/articles/mysql-data-types-an-overview-of-the-data-types-in
 */

insert into student (name, age, city) values /* In theory there is no difference between values and value: https://stackoverflow.com/a/17445644 */
                                             ('Iva Ivić', 25, 'Osijek'), /* Error Incorrect string value: '\xC4\x87' for column 'name' at row 1 */
                                             ('Mirko Mirkić', 49, 'Osijek'),
                                             ('Test Testić', 87, 'Zagreb');

select * from student; /* same as select name, age, city from student */

create table city (
    id int not null primary key auto_increment,
    name varchar (255)
);
/*
 A primary key is a column or a set of columns that uniquely identifies each row in the table.
 It can't be null and must be unique even if it consists of multiple columns.
 https://www.mysqltutorial.org/mysql-primary-key/
 */
insert into city (name) values ('Osijek'), ('Zagreb');