/* Tables make:
dest: nameofdest, typeofdest, releweblink, dateofarri
over dest: nameofdest, typeofdest, releweblink, dateofarri, dateofdept, userlocation
trav: typeoftrav, dateofarri, startlocation, dateofdept, finallocation, totaoftrav
acti: nameofacti, dateofacti, descofacti
*/
CREATE DATABASE pathfinderDB;
CREATE TABLE pathfinderdb.dest_table (
	nameofdest varchar(50),
	typeofdest varchar(50),
	releweblink varchar(100),
	userlocation varchar(150)
);
CREATE TABLE pathfinderdb.overdest_table (
	nameofdest varchar(50),
	typeofdest varchar(50),
	releweblink varchar(100),
	userlocation varchar(150),
    dateofarri datetime,
	dateofdept datetime
);
CREATE TABLE pathfinderdb.trav_table(
	typeoftrav varchar(50),
    dateofarri datetime,
    startlocation varchar(150),
    dateofdept datetime, 
    finallocation varchar(150),
    totaoftrav numeric
);
CREATE TABLE pathfinderdb.acti_table(
	nameofacti varchar(50),
    dateofacti datetime, 
    descofacti varchar(300)
);