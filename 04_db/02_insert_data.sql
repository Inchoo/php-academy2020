insert into city (name)
values ('Split'),
       ('Vinkovci'),
       ('Otok');

insert into student (first_name, last_name, age, city)
values
    ('Snježana', 'Snježić', 25, 1),
    ('Ante', 'Antić', 20, 3),
    ('Tena', 'Tenić', 22, 3),
    ('Suzana', 'Suzić', 33, 4),
    ('Iva', 'Ivančić', 25, 3);

insert into lecture (name, ects)
values
    ('Introduction to Computer Science I', 6),
    ('Introduction to Computer Science II', 8),
    ('Data Structures', 6),
    ('Operating Systems', 3),
    ('Database I', 4),
    ('Database II', 1),
    ('Mobile Application Development I', 5),
    ('Mobile Application Development II', 6),
    ('IOT', 2),
    ('AI', 3);

insert into student_lecture (student, lecture, grade)
values
(1, 1, 4),
(1, 3, NULL),
(2, 1, 2),
(2, 4, NULL),
(3, 7, 4),
(3, 1, 2),
(4, 5, 4),
(4, 9, 4);
