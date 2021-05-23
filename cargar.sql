CREATE DATABASE futbol CHARACTER SET utf8 COLLATE utf8_general_ci;

use futbol;

CREATE TABLE equipos (
	equipo INT NOT NULL AUTO_INCREMENT, 
	nombre CHAR(100), 
	tecnico  CHAR(50), 
	puesto INT(10),
	goles INT(10), 
	ganados INT(10), 
	empatados INT(10),
	perdidos INT(10),
	KEY (equipo) 
); 

INSERT INTO equipos VALUES (1, 'Atletico de Madrid', 'Diego Simeone', 1, 67 , 26, 8, 4 ); 

INSERT INTO equipos VALUES (2, 'Real Madrid', 'Zidane', 2, 67 , 25, 9, 4 ); 

INSERT INTO equipos VALUES (3, 'Barcelona', 'Koeman', 3, 85 , 24, 7, 7 ); 

INSERT INTO equipos VALUES (4, 'Sevilla', 'Lopetegui', 4, 52 , 23, 5, 9 ); 

INSERT INTO equipos VALUES (5, 'Real Sociedad', 'Alguacil', 5, 59 , 17, 11, 10 ); 

INSERT INTO equipos VALUES (6, 'Betis', 'Alguacil', 6, 50 , 17, 10, 11 ); 

