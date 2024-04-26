CREATE DATABASE seminarverwaltung;

use seminarverwaltung;


CREATE TABLE seminare (
    id int primary key AUTO_INCREMENT,
    title varchar(120) not null UNIQUE,
    description text not null,
    price decimal(10, 2) not null
);

INSERT INTO seminare (title, description, price) 
    VALUES  
    ('RUBY ON RIALS', 'Ruby on Rails ist das neue, sensationelle Webframework aus den USA.', 2500.00),
    ('AJAX & DOM', 'In diesem Seminar lernen Sie, wie Sie mit Ajax und dem Document Object Model (DOM) interaktive Webanwendungen entwickeln.', 1699.99),
    ('HTML & CSS', 'HTML und CSS sind die Grundlagen des Webdesigns. In diesem Seminar lernen Sie, wie Sie mit HTML und CSS moderne Webseiten erstellen.', 975.00),
    ('PHP & Laravel', 'Laravel ist ein modernes PHP-Framework, das die Entwicklung von Webanwendungen erleichtert.', 1799.87),
    ('Datenbanken & SQL', 'Moderne Webentwicklung', 975.00),
    ('JAVA', 'Java ist eine objektorientierte Programmiersprache und eine eingetragene Marke des Unternehmens Sun Microsystems', 3000.23);



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