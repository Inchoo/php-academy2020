DROP DATABASE IF EXISTS social_network;
CREATE DATABASE social_network CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
use social_network;

create table user(
id int not null primary key auto_increment,
firstname varchar(50) not null,
lastname varchar(50) not null,
email varchar(100) not null,
pass char(60) not null
);

create unique index emailindex on user(email);


create table post(
id int not null primary key auto_increment,
content text,
#user int not null,
date datetime not null default now()
#,foreign key (user) references user(id)
);

create table comment(
id int not null primary key auto_increment,
user int not null,
post int not null,
content text not null,
date datetime not null default now(),
foreign key (user) references user(id),
foreign key (post) references post(id)
);

create table likes(
id int not null primary key auto_increment,
user int not null,
post int not null,
foreign key (user) references user(id),
foreign key (post) references post(id)
);


insert into post (content) values ('Evo danas pada kiša opet :('), ('Jedem jagode.');