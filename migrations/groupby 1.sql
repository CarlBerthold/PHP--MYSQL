CREATE DATABASE IF NOT EXISTS `course_management`;

USE `course_management`;

DROP TABLE IF EXISTS `participant`;

CREATE TABLE IF NOT EXISTS `participant` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `firstname` varchar(50) NOT NULL,
   `lastname` varchar(50) NOT NULL,
   `location` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
);
INSERT INTO `participant` 
    (`firstname`,`lastname`,`location`) 
VALUES
    ('Max', 'Mustermann', 'GFN GmbH Karlsruhe'),
    ('Erika', 'Mustermann', 'GFN GmbH Freiburg'),
    ('Lieschen', 'Müller', 'GFN GmbH Halle'),
    ('John', 'Doe', 'GFN GmbH Jena'),
    ('Mario', 'Rossi', 'GFN GmbH Halle'),
    ('Dominik', 'Richardson', 'GFN GmbH Freiburg'),
    ('Rüdiger', 'Amann', 'GFN GmbH München'),
    ('Jaqueline', 'Frey', 'GFN GmbH Freiburg'),
    ('Benjamin', 'Wimmer',  'GFN GmbH Karlsruhe'),
    ('Susann', 'Gerlach', 'GFN GmbH Halle'),
    ('Wendelin', 'Zeller', 'GFN GmbH Freiburg'),
    ('Hans-Joachim', 'Schmid', 'GFN GmbH Halle'),
    ('Margarita', 'Stock', 'GFN GmbH Freiburg'),
    ('Ludger', 'Rausch', 'GFN GmbH Jena'),
    ('Tom', 'Seibel', 'GFN GmbH Hamburg');

