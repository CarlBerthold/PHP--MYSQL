
CREATE TABLE users (
    id serial primary key,
    surname varchar(50) not null,
    name varchar(50) not null,
    registered_since date not null,
    email varchar(50) not null,
    password varchar(50) not null,
    birthday date not null
);

INSERT INTO users (id, surname, name, registered_since, email, password, birthday) 
    VALUES 
        (1, 'Alice', 'Adams', '2024-04-22', 'alice.example@google.com', '12345', '1990-01-01'),
        (2, 'Bob', 'Baker', '2024-04-23', 'bob.example@google.com', '54321', '1990-01-02'),
        (3, 'Carl', 'Berthold', '2024-04-24', 'carl.examle@google.com', '12345', '1990-01-03'),
        (4, 'Dave', 'Bronke', '2024-04-22', 'dave.examle@google.com', '54321', '1990-01-04');



INSERT INTO movies (id, title, duration, publication_date, description, awards, costs, profit)
VALUES (1, 'Cube (1997)', 90, '1997-08-02', 'Sieben völlig Fremde mit sehr unterschiedlichen Charakterzügen werden unfreiwillig in ein endloses kafkaartiges Labyrinth voller Fallen gesteckt.', 'goldene beere', 10000.62, 763230.98);

INSERT INTO movies (id, title, duration, publication_date, description, awards, costs, profit)
VALUES (2, 'Herr der Ringe - Die Gefährten', 178, '2001-05-02', ' In einem kleinen Dorf wird einem jungen Hobbit namens Frodo ein uralter, magischer Ring anvertraut. Er muss sich auf eine epische Reise zum Schicksalsberg begeben, um ihn zu zerstören.', 'goldene Palme, Oscar', 10.21400.62, 71.263.230.98);

INSERT INTO directors (id, surname, name, birthday) 
VALUES (1, 'Vincent', 'Natali', '1969-01-06');

INSERT INTO directors (id, surname, name, birthday) 
VALUES (2, 'Peter', 'Jackson', '1961-10-31');


CREATE TABLE seminare (
    id int primary key AUTO_INCREMENT,
    title varchar(50) not null UNIQUE,
    description text not null,
    price decimal(10, 2) not null
);

INSERT INTO seminare (title, description, price) 
    VALUES  
    ('RUBY ON RIALS', 'Ruby on Rails ist das neue, sensationelle Webframework aus den USA. Es ist einfach zu erlernen und ermöglicht die schnelle Entwicklung von Webanwendungen.', 2500.00),
    ('AJAX & DOM', 'Ajax ist längst dem Hype-Stadium entwachsen und hat sich als fester Bestandteil moderner Webanwendungen etabliert. In diesem Seminar lernen Sie, wie Sie mit Ajax und dem Document Object Model (DOM) interaktive Webanwendungen entwickeln.', 1699.99),
    ('HTML & CSS', 'HTML und CSS sind die Grundlagen des Webdesigns. In diesem Seminar lernen Sie, wie Sie mit HTML und CSS moderne Webseiten erstellen.', 975.00),
    ('PHP & Laravel', 'PHP ist die am weitesten verbreitete Skriptsprache für die Webentwicklung. Laravel ist ein modernes PHP-Framework, das die Entwicklung von Webanwendungen erleichtert.', 1799.87),
    ('Datenbanken & SQL', 'Moderne Webentwicklung', 975.00),
    ('JAVA', 'Java ist eine objektorientierte Programmiersprache und eine eingetragene Marke des Unternehmens Sun Microsystems, welches 2010 von Oracle aufgekauft wurde. Die Programmiersprache ist ein Bestandteil der Java-Technologie – diese besteht grundsätzlich aus dem Java-Entwicklungswerkzeug (JDK) zum Erstellen von...', 3000.23);



CREATE TABLE exercises (
    id int primary key AUTO_INCREMENT,
    title varchar(50) not null UNIQUE,
    seminar_id int not null UNIQUE,
    exercise_nr int not null UNIQUE,
    description text not null,
    difficulty Decimal(3,2) not null,
    solution text not null,
    FOREIGN KEY (seminar_id) REFERENCES seminare(id)
);

benutze den Titel als alternativen Schlüssel hinzu:
ALTER TABLE seminare MODIFY title VARCHAR(50) UNIQUE;
