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

insert into student (name, age, city) values ('Iva Ivić', 25, 'Osijek'); /* Error Incorrect string value: '\xC4\x87' for column 'name' at row 1 */