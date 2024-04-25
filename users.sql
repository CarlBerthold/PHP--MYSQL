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