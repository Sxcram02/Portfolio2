-- -----------------------------------
-- MySQL Script generate by Marcos Dominguez
-- @set charset = utf8mbi
-- @set collation = utf8_spanish_ci
-- ---------------------------------------------
-- Schema daw
-- ---------------------------------------------
CREATE DATABASE IF NOT EXISTS daw CHARACTER SET UTF8 COLLATE utf8_spanish_ci;
USE daw;
-- ---------------------------------------------
-- Table faltas
-- ---------------------------------------------
CREATE TABLE IF NOT EXISTS faltas (
    horas INT(100) NOT NULL PRIMARY KEY,
    asistencia BOOLEAN DEFAULT TRUE NULL,
    retrasos INT(100) NULL
);

INSERT INTO faltas VALUES (3,true,0),(1,true,2),(0,true,4),(2,true,1),(4,true,0),(5,true,0),(8,true,3),(9,true,1),(6,true,2),(7,true,2);

UPDATE faltas
SET asistencia = false
WHERE faltas.horas >= 2;
-- ---------------------------------------------
-- Table alumnos
-- ---------------------------------------------

CREATE TABLE IF NOT EXISTS alumnos (
    dni CHAR(9) NOT NULL PRIMARY KEY,
    nombreAlumno VARCHAR(45) NOT NULL,
    fechaNac DATE NOT NULL
);
INSERT INTO alumnos VALUES ('12345678A', 'Luisa Pérez', '1998-05-21'),('87654321B', 'Juan González', '2001-02-12'),('55555555C', 'María Sánchez', '1999-09-01'),('11111111D', 'Pedro Martínez', '1997-12-30'),('22222222E', 'Ana García', '2002-07-06'),('33333333F', 'Carlos López', '2003-11-18'),('44444444G', 'Marta Pérez', '2000-03-15'),('66666666H', 'Javier Martín', '1996-08-11'),('77777777I', 'Lucía Gómez', '2004-01-23'),('88888888J', 'Sara Ruiz', '2001-06-08');

-- ---------------------------------------------
-- Table signatures
-- ---------------------------------------------
CREATE TABLE IF NOT EXISTS signatures (
    codAsignatura CHAR(5) NOT NULL PRIMARY KEY,
    nombreAsignatura VARCHAR(30) NOT NULL,
    grado ENUM("GS") NOT NULL
);
INSERT INTO signatures VALUES ('FOL', 'Formación y orientación laboral', 'GS'),('ED', 'Entornos de Desarrollo', 'GS'),('PROG', 'Programación', 'GS'),('LMSGI', 'Lenguajes de Marca', 'GS'),('SI', 'Sistemas Informáticos', 'GS'),('EC', 'Entorno del lado del cliente', 'GS'),('ES', 'Entorno del lado del servidor', 'GS'),('BBDD', 'Base de datos', 'GS'),('JS', 'JavaScript', 'GS'),('Design', 'Diseño', 'GS');

-- ----------------------------------------------
-- Table curso
-- ----------------------------------------------
CREATE TABLE IF NOT EXISTS curso (
    alumno CHAR(9) NOT NULL,
    año YEAR DEFAULT "2023" NOT NULL,
    asignatura CHAR(5) NOT NULL,
    faltas INT(100) NOT NULL,
    PRIMARY KEY(alumno, asignatura, año),
    FOREIGN KEY (alumno) REFERENCES alumnos(dni) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (asignatura) REFERENCES signatures(codAsignatura) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (faltas) REFERENCES faltas(horas) ON UPDATE CASCADE ON DELETE CASCADE
);

INSERT INTO curso VALUES 
('87654321B','2023', 'FOL',1),('77777777I','2023', 'ED', 2),('77777777I','2023', 'PROG', 4),('87654321B','2023', 'LMSGI', 0),('66666666H','2023', 'SI', 1),('33333333F','2023', 'EC', 4),('33333333F','2023', 'ES', 0),('66666666H','2023', 'BBDD', 3),('44444444G','2023', 'JS', 2),('88888888J','2023', 'Design', 1);

