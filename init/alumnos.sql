create table alumnos(
	id 		int NOT NULL AUTO_INCREMENT,
	nombre		varchar(255),
	apellido	varchar(255),
	edad		int,
	PRIMARY KEY (id)
	);
show tables;
insert into alumnos (nombre, apellido, edad) values ("Equitrack", "CRUD", 24);
insert into alumnos (nombre, apellido, edad) values ("DOCKER MYSQL", "HTML PHP", 24);
insert into alumnos (nombre, apellido, edad) values ("Li", "Mendiola", 25);
select * from alumnos;
