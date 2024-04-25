Creat Database airlines;

use airlines;

CREATE TABLE airlines (
    `id` int primary key AUTO_INCREMENT,
    `producer` varchar(50) not null UNIQUE,
    `country` varchar(50) not null,
    `founded` date not null,
    `headquarters` varchar(50) not null,
    `max_seats` int not null,
    `max_speed` Decimal(5,2) not null,
    `flight_hours` decimal(7,2) not null
);


INSERT INTO airlines(producer, country, founded, headquarters, max_seats, max_speed, flight_hours)
    VALUES 
        ('Lufthansa', 'Germany', '1953-01-06', 'Frankfurt', '300', '900', '10000.00'),
        ('Air France', 'France', '1953-01-06', 'Paris', '300', '900', '10000.00'),
        ('British Airways', 'United Kingdom', '1953-01-06', 'London', '300', '900', '10000.00'),
        ('KLM', 'Netherlands', '1953-01-06', 'Amsterdam', '300', '900', '10000.00'),
        ('Iberia', 'Spain', '1953-01-06', 'Madrid', '300', '900', '10000.00'),
        ('Alitalia', 'Italy', '1953-01-06', 'Rome', '300', '900', '10000.00'),
        ('SAS', 'Sweden', '1953-01-06', 'Stockholm', '300', '900', '10000.00'),
        ('Swiss', 'Switzerland', '1953-01-06', 'Zurich', '300', '900', '10000.00'),
        ('Austrian Airlines', 'Austria', '1953-01-06', 'Vienna', '300', '900', '10000.00'),
        ('Finnair', 'Finland', '1953-01-06', 'Helsinki', '300', '900', '10000.00'),
        ('Norwegian', 'Norway', '1953-01-06', 'Oslo', '300', '900', '10000.00'),
        ('SAS-DE', 'Denmark', '1953-01-06', 'Copenhagen', '300', '900', '10000.00'),
        ('LOT', 'Poland', '1953-01-06', 'Warsaw', '300', '900', '10000.00'),
        ('Czech Airlines', 'Czech Republic', '1953-01-06', 'Prague', '300', '900', '10000.00'),
        ('Aeroflot', 'Russia', '1953-01-06', 'Moscow', '300', '900', '10000.00');