drop table if exists `USERS`;
create table USERS (
	id INT,
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	gender VARCHAR(50)
);
insert into USERS (id, first_name, last_name, gender) values (1, 'Guenevere', 'Gresley', 'Female');
insert into USERS (id, first_name, last_name, gender) values (2, 'Torie', 'Blick', 'Female');
insert into USERS (id, first_name, last_name, gender) values (3, 'Waverley', 'Treagust', 'Male');
insert into USERS (id, first_name, last_name, gender) values (4, 'Kippy', 'Evershed', 'Male');
insert into USERS (id, first_name, last_name, gender) values (5, 'Vevay', 'Tolson', 'Female');