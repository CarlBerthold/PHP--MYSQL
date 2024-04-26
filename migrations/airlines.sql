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



CREATE TABLE aviators (
    `id` int primary key AUTO_INCREMENT,
    `surname` varchar(50) not null,
    `name` varchar(50) not null,
    `birthday` date not null,
    `flight_hours` decimal(5,2)
);


INSERT INTO aviators(surname, name, birthday, flight_hours)
    VALUES
        ('Mel', 'Gibson', '1956-01-03', '999.00'),
        ('Keanu', 'Reeves', '1964-09-02', '989.00'),
        ('Tom', 'Hardy', '1977-09-15', '675.00'),
        ('Hugh', 'Jackman', '1968-10-12', '141.00'),
        ('Chris', 'Hemsworth', '1983-08-11', '120.00'),
        ('Chris', 'Evans', '1981-06-13', '10.00'),
        ('Chris', 'Pratt', '1979-06-21', '10.50'),
        ('Robert', 'Downey', '1965-04-04', '23.10'),
        ('Mark', 'Ruffalo', '1967-11-22', '76.00'),
        ('Scarlett', 'Johansson', '1984-11-22', '98.00'),
        ('Jeremy', 'Renner', '1971-01-07', '100.00'),
        ('Tom', 'Holland', '1996-06-01', '101.00'),
        ('Benedict', 'Cumberbatch', '1976-07-19', '12.00'),
        ('Chadwick', 'Boseman', '1976-11-29', '1.00'),
        ('Paul', 'Rudd', '1969-04-06', '100.00'),
        ('Brie', 'Larson', '1989-10-01', '89.00'),
        ('Evangeline', 'Lilly', '1979-08-03', '100.00');


CREATE TABLE flights (
    `id` int primary key AUTO_INCREMENT,
    `flight_number` varchar(50) not null UNIQUE,
    `airline_id` int not null,
    `aviator_id` int not null,
    `departure` varchar(50) not null,
    `destination` varchar(50) not null,
    `departure_time` datetime not null,
    `arrival_time` datetime not null,
    `price` decimal(10, 2) not null
);


INSERT INTO flights(flight_number, airline_id, aviator_id, departure, destination, departure_time, arrival_time, price)
    VALUES 
        ('DE1241', '1', '1', 'Frankfurt', 'Paris', '2024-04-22 12:00:00', '2024-04-22 14:00:00', '100.00'),
        ('FR1241', '2', '2', 'Paris', 'London', '2024-04-22 15:00:00', '2024-04-22 17:00:00', '100.00'),
        ('UK1241', '3', '3', 'London', 'Amsterdam', '2024-04-22 18:00:00', '2024-04-22 20:00:00', '100.00'),
        ('NL1241', '4', '4', 'Amsterdam', 'Madrid', '2024-04-22 21:00:00', '2024-04-22 23:00:00', '100.00'),
        ('ES1241', '5', '5', 'Madrid', 'Rome', '2024-04-22 12:00:00', '2024-04-22 14:00:00', '100.00'),
        ('IT1241', '6', '6', 'Rome', 'Stockholm', '2024-04-22 15:00:00', '2024-04-22 17:00:00', '100.00'),
        ('SE1241', '7', '7', 'Stockholm', 'Zurich', '2024-04-22 18:00:00', '2024-04-22 20:00:00', '100.00'),
        ('CH1241', '8', '8', 'Zurich', 'Vienna', '2024-04-22 21:00:00', '2024-04-22 23:00:00', '100.00'),
        ('AT1241', '9', '9', 'Vienna', 'Helsinki', '2024-04-22 12:00:00', '2024-04-22 14:00:00', '100.00');