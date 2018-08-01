USE ist181356;

SHOW tables;

SELECT * FROM cities;

CREATE TABLE erasmus_student(
id int auto_increment,
firstname varchar(255),
lastname varchar(255),
nationality varchar(255),
city varchar(255),
primary key (id),
foreign key (city) references erasmus_location(city)
);

CREATE TABLE erasmus_location(
city varchar(255),
country varchar(255),
primary key (city)
);

CREATE TABLE erasmus_messages(
recipient varchar(255),
sender varchar(255),
id int auto_increment,
content text
);
