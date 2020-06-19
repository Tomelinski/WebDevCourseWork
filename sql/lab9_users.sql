--Author: Tom Zielinski
--Date: 04/09/2020
--Webd2201
--lab09_users

-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS users;

-- CREATE the table, note that id has to be unique, and you must have a name
CREATE TABLE users(
	id VARCHAR(20),
	password VARCHAR(15) NOT  NULL,
	first_name VARCHAR(20) NOT  NULL,
	last_name VARCHAR(30) NOT  NULL,
	email_address VARCHAR(255) NOT  NULL,
	enrol_date date NOT  NULL,
	last_access date NOT  NULL,
    PRIMARY KEY(id)
);

GRANT ALL ON users TO faculty;

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) 
    VALUES('jdoe', 'testpass', 'John', 'Doe', 'jdoe@durhamcollege.ca', '2020-1-1', '2020-1-1');

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) 
    VALUES('tomelinski', 'Abc123', 'Tom', 'Zielinski', 'tomzielinski@durhamcollege.ca', '2020-04-09', '2020-04-09');

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) 
    VALUES('Chuntul', 'password', 'Chantal', 'Ho', 'Chuntul.h@UToronto.ca', '2020-04-09', '2020-04-09');


SELECT * FROM users;