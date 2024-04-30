CREATE DATABASE seminarverwaltung;

use seminarverwaltung;


CREATE TABLE seminare (
    `id` int primary key AUTO_INCREMENT,
    `title` varchar(120) not null,
    `description` text not null,
    `price` decimal(10, 2) not null,
    `category` varchar(50) not null
);

INSERT INTO seminare (title, description, price, category) 
    VALUES  
    ('RUBY ON RIALS', 'Ruby on Rails ist das neue, sensationelle Webframework aus den USA.', 2500.00, 'Framework'),
    ('AJAX & DOM', 'In diesem Seminar lernen Sie, wie Sie mit Ajax und dem Document Object Model (DOM) interaktive Webanwendungen entwickeln.', 1699.99, 'Webentwicklung'),
    ('HTML & CSS', 'HTML und CSS sind die Grundlagen des Webdesigns. In diesem Seminar lernen Sie, wie Sie mit HTML und CSS moderne Webseiten erstellen.', 975.00, 'Webdesign'),
    ('PHP & Laravel', 'Laravel ist ein modernes PHP-Framework, das die Entwicklung von Webanwendungen erleichtert.', 1799.87, 'Framework'),
    ('Datenbanken & SQL', 'Moderne Webentwicklung', 975.00, 'Datenbanken'),
    ('JAVA', 'Java ist eine objektorientierte Programmiersprache und eine eingetragene Marke des Unternehmens Sun Microsystems', 3000.23, 'Programmiersprache'),
    ('RUBY ON RIALS', 'Ruby on Rails ist das neue, sensationelle Webframework aus den USA.', 2500.00, 'Framework');



CREATE TABLE exercises (
    `id` int primary key AUTO_INCREMENT,
    `title` varchar(50) not null UNIQUE,
    `seminar_id` int not null,
    `exercise_nr` int not null,
    `description` text not null,
    `difficulty` Decimal(3,2) not null,
    `solution` text not null
);

INSERT INTO exercises (title, seminar_id, exercise_nr, description, difficulty, solution)
    VALUES 
        ('RUBY ON RIALS', 1, 1, 'Ruby on Rails ist das neue, sensationelle Webframework aus den USA.', 1.00, 'Ruby on Rails ist ein Webframework, das die Entwicklung von Webanwendungen erleichtert.'),
        ('AJAX & DOM', 2, 1, 'In diesem Seminar lernen Sie, wie Sie mit Ajax und dem Document Object Model (DOM) interaktive Webanwendungen entwickeln.', 1.00, 'Ajax ist eine Technik, mit der Webseiten dynamisch geladen werden können.'),
        ('HTML & CSS', 3, 1, 'HTML und CSS sind die Grundlagen des Webdesigns. In diesem Seminar lernen Sie, wie Sie mit HTML und CSS moderne Webseiten erstellen.', 1.00, 'HTML ist eine Auszeichnungssprache, die die Struktur von Webseiten definiert.'),
        ('PHP & Laravel', 4, 1, 'Laravel ist ein modernes PHP-Framework, das die Entwicklung von Webanwendungen erleichtert.', 1.00, 'Laravel ist ein PHP-Framework, das die Entwicklung von Webanwendungen erleichtert.'),
        ('Datenbanken & SQL', 5, 1, 'Moderne Webentwicklung', 1.00, 'Datenbanken sind ein wichtiger Bestandteil moderner Webanwendungen.'),
        ('JAVA', 6, 1, 'Java ist eine objektorientierte Programmiersprache und eine eingetragene Marke des Unternehmens Sun Microsystems', 1.00, 'Java ist eine objektorientierte Programmiersprache.');


CREATE TABLE appointments (
    `id` int primary key AUTO_INCREMENT,
    `seminar_id` int not null,
    `room` VARCHAR(50) not null,
    `appointment_beginn` date not null,
    `appointment_end` date not null
);


INSERT INTO appointments (seminar_id, room, appointment_beginn, appointment_end)
    VALUES 
        (1, 'Aula', '2024-04-22', '2024-04-23'),
        (2, 'Zentrale', '2024-04-23', '2024-04-24'),
        (3, 'Quergebäude', '2024-04-24', '2024-04-25'),
        (4, 'Halle', '2024-04-25', '2024-04-26'),
        (5, 'Raum 3', '2024-04-26', '2024-04-27'),
        (6, 'Bolzplatz', '2024-04-27', '2024-04-28'),
        (7, 'Aula', '2024-04-28', '2024-04-29');


CREATE TABLE attendees (
    `appointment_id` int not null,
    `user_id` int not null,
    PRIMARY KEY (appointment_id, user_id)
);


INSERT INTO attendees (appointment_id, user_id)
    VALUES 
        (1, 1),
        (2, 2),
        (3, 3),
        (4, 4),
        (5, 1),
        (6, 2),
        (7, 3);