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



CREATE TABLE users (
    `id` int primary key auto_increment,
    `salutation` varchar(5) not null,
    `surname` varchar(50) not null,
    `name` varchar(50) not null,
    `registered_since` date not null,
    `email` varchar(50) not null,
    `password` varchar(50) not null,
    `birthday` date not null
);


INSERT INTO users (salutation, surname, name, registered_since, email, password, birthday) 
    VALUES 
        ('mrs', 'Alice', 'Adams', '2024-04-22', 'alice@example.com', '12345', '1990-01-01'),
        ('mr', 'Bob', 'Baker', '2024-04-23', 'bob@example.com', '54321', '1990-01-02'),
        ('mr', 'Carl', 'Berthold', '2024-04-24', 'carl@example.com', '12345', '1990-01-03'),
        ('mrs', 'Diana', 'Doe', '2024-04-25', 'diana@example.com', '54321', '1990-01-04');