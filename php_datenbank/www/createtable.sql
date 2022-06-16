drop table if exists demo;

create table demo (
id integer not null auto_increment,
name text,
primary key (id)

);

insert into demo (name) values ('jeder'),('name');
select * from demo;
delete from demo where name = 'jeder';
update demo set name='jjj' where name = 'jeder';
select * from demo;

