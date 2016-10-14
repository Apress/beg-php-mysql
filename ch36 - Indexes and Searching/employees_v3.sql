CREATE TABLE employees (
   id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
   lastname VARCHAR(35) NOT NULL,
   firstname VARCHAR(35) NOT NULL,
   email VARCHAR(55) NOT NULL UNIQUE,
   INDEX name (lastname, firstname),
   PRIMARY KEY(id));
