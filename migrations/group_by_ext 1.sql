CREATE TABLE IF NOT EXISTS `participant_ext` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `firstname` varchar(50) NOT NULL,
    `lastname` varchar(50) NOT NULL,
    `city` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `participant_ext` 
    (`firstname`, `lastname`, `city`)
VALUES 
    ('Milan', 'Faust', 'Hattingen an der Ruhr'),
    ('Thies', 'Lackner', 'Bondelum'),
    ('Detlev', 'Scharf', 'Kronburg'),
    ('Anna', 'Schmidt', 'Hamburg'),
    ('Danny', 'Schiller', 'Lehe'),
    ('Laura', 'Fischer', 'Köln'),
    ('Lorenz', 'Stiller', 'Rödental'),
    ('Julia', 'Meyer', 'Stuttgart'),
    ('Lisa', 'Bauer', 'Bremen'),
    ('Michael', 'Müller', 'Berlin'),
    ('Stefan', 'Schneider', 'München'),
    ('Alexander', 'Weber', 'Frankfurt'),
    ('Niklas', 'Wagner', 'Düsseldorf'),
    ('Maximilian', 'Hoffmann', 'Essen'),
    ('Johannes', 'Hirschfeld', 'Ohrenbach'),
    ('Sophia', 'Becker', 'Dortmund');
