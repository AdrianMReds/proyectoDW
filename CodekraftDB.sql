DROP DATABASE IF EXISTS codekraft;

CREATE DATABASE codekraft;
USE codekraft;

CREATE TABLE `codekraft`.`users` (`username` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`username`));

INSERT INTO `users` (`username`, `password`) VALUES ('Gustavo', 'password'), ('Adrian', 'codekraft');

CREATE TABLE `codekraft`.`comentarios` ( `cID` INT NOT NULL AUTO_INCREMENT , `contenido` VARCHAR(510) NOT NULL , `fecha` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`cID`));
