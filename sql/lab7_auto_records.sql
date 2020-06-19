-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS automobiles;

-- CREATE the table, note that id has to be unique, and you must have a name
CREATE TABLE automobiles(
	id INTEGER,
	make VARCHAR(15) NOT  NULL,
	model VARCHAR(40) NOT  NULL,
	year INTEGER NOT  NULL,
	owner VARCHAR(40) NOT  NULL,
	msrp decimal NOT  NULL,
	puchase_date date NOT  NULL,
    PRIMARY KEY(id)
);

GRANT ALL ON automobiles TO faculty;

INSERT INTO automobiles(id, make, model, year, owner, msrp, puchase_date) 
    VALUES(1, 'Audi', 'r8', 2017, 'Alex Patton', '120000', '2017-03-10');

INSERT INTO automobiles(id, make, model, year, owner, msrp, puchase_date) 
    VALUES(2, 'Honda', 'NSX', 2019, 'Chirstopher Gantz', '200000', '2019-01-07');

INSERT INTO automobiles(id, make, model, year, owner, msrp, puchase_date) 
    VALUES(3, 'Shelby', 'GT350', 1967, 'Jeremy Clarkson', '70000', '2000-07-17');

INSERT INTO automobiles(id, make, model, year, owner, msrp, puchase_date) 
    VALUES(4, 'Mercedes', 'c43', 2018, 'Brad Mayhew', '46000', '2019-11-15');

INSERT INTO automobiles(id, make, model, year, owner, msrp, puchase_date) 
    VALUES(5, 'Nissan', 'Skyline r34', 1999, 'Chantal Ho', '95000', '2005-08-20');

INSERT INTO automobiles(id, make, model, year, owner, msrp, puchase_date) 
    VALUES(6, 'BMW', 'M8 Grand Coupe', 2020, 'Matthew Zielinski', '140000', '2020-02-20');


SELECT make, model, year, msrp FROM automobiles ORDER BY year ASC;

UPDATE automobiles SET owner = 'Tom Zielinski' WHERE owner = 'Brad Mayhew';

DELETE FROM automobiles WHere owner = 'Alex Patton';

SELECT * FROM automobiles;
