DROP DATABASE [IF EXISTS] codekraft;

CREATE DATABASE codekraft;
USE codekraft;

CREATE TABLE `codekraft`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`));

INSERT INTO `users` (`username`, `password`) VALUES ('Gustavo', 'password'), ('Jose', 'Contrasena');

CREATE TABLE `codekraft`.`comentarios` ( `cID` INT NOT NULL AUTO_INCREMENT , `contenido` VARCHAR(510) NOT NULL , `fecha` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`cID`));

