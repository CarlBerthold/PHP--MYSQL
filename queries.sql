INSERT INTO seminare (title, description, price) VALUES ('Datenbanke & SQL', 'Moderne Webentwicklung', 975,00));

create table users (
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
        (2, 'Carl', 'Berthold', '2024-04-24', 'carl.examle@google.com', '12345', '1990-01-03'),
        (4, 'Dave', 'Bronke', '2024-04-22', 'dave.examle@google.com', '54321', '1990-01-04');



INSERT INTO movies (id, title, duration, publication_date, description, awards, costs, profit)
VALUES (1, 'Cube (1997)', 90, '1997-08-02', 'Sieben völlig Fremde mit sehr unterschiedlichen Charakterzügen werden unfreiwillig in ein endloses kafkaartiges Labyrinth voller Fallen gesteckt.', 'goldene beere', 10000.62, 763230.98);

INSERT INTO movies (id, title, duration, publication_date, description, awards, costs, profit)
VALUES (2, 'Herr der Ringe - Die Gefährten', 178, '2001-05-02', ' In einem kleinen Dorf wird einem jungen Hobbit namens Frodo ein uralter, magischer Ring anvertraut. Er muss sich auf eine epische Reise zum Schicksalsberg begeben, um ihn zu zerstören.', 'goldene Palme, Oscar', 10.21400.62, 71.263.230.98);

INSERT INTO directors (id, surname, name, birthday) 
VALUES (1, 'Vincent', 'Natali', '1969-01-06');

INSERT INTO directors (id, surname, name, birthday) 
VALUES (2, 'Peter', 'Jackson', '1961-10-31');

;
