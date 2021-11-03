create database users;
use users;

create table users
( 
     userName char(20) not null unique, 
     password char(20) not null, 
     name varchar(30),
     primary key(userName)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;