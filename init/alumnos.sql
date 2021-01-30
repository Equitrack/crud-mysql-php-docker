create table alumnos(
	id 		int NOT NULL AUTO_INCREMENT,
	nombre		varchar(255),
	apellido	varchar(255),
	edad		int,
	PRIMARY KEY (id)
	);
show tables;
insert into alumnos (nombre, apellido, edad) values ("antonio", "castellanos", 24);
insert into alumnos (nombre, apellido, edad) values ("yess", "u", 24);
insert into alumnos (nombre, apellido, edad) values ("erika", "hernandez", 25);
select * from alumnos;
