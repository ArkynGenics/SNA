create database SNA_test;
use SNA_test;
create table users(
user_id integer primary key,
username varchar(200)not null,
password varchar(200)not null,
gender int not null -- 1 male 0 female
);
create table notes(
note_id integer primary key,
note_title varchar(200) not null,
note_description TEXT not null,
note_author varchar(200) not null
);