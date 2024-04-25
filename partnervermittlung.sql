CREATE DATABASE partnervermittlung;

use partnervermittlung;

CREATE TABLE partner (
    `id` int primary key auto_increment,
    `salutation` varchar(5) not null,
    `surname` varchar(50) not null,
    `gender` varchar(6) not null,
    `name` varchar(50) not null,
    `birthday` date not null
);


INSERT INTO partner(salutation, surname, gender, name, birthday) 
    VALUES
        ('mrs', 'Alice', 'female', 'Adams', '1990-01-01'),
        ('mr', 'Bob', 'male', 'Baker', '1990-01-02'),
        ('mr', 'Carl', 'male', 'Berthold', '1990-01-03'),
        ('mrs', 'Diana', 'female', 'Doe', '1990-01-04');