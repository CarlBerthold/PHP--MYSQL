
CREATE DATABASE filmverleih;

USE filmverleih;


CREATE TABLE movies (
    `id` int primary key auto_increment,
    `genre` varchar(50) not null,
    `title` varchar(50) not null UNIQUE,
    `duration` decimal(5,2) not null,
    `publication_date` date not null,
    `description` text not null,
    `awards` varchar(50) not null,
    `costs` decimal(10, 2) not null,
    `profit` decimal(10, 2) not null
);

INSERT INTO movies (genre, title, duration, publication_date, description, awards, costs, profit)
VALUES 
    ('Action', 'The Matrix', 120.5, '1999-03-31', 'A computer hacker learns about the true nature of reality and his role in the war against its controllers.', 'Academy Award for Best Visual Effects', 100000.00, 5000000.00),
    ('Drama', 'The Shawshank Redemption', 142.25, '1994-10-14', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', 'None', 250000.00, 583400.00),
    ('Horror', 'The Exorcist', 122.0, '1973-12-26', 'When a teenage girl is possessed by a mysterious entity, her mother seeks the help of two priests to save her daughter.', 'Academy Award for Best Sound Mixing', 120000.00, 4413000.00),
    ('Science Fiction', 'Blade Runner', 117.5, '1982-06-25', 'A blade runner must pursue and terminate four replicants who stole a ship in space and have returned to Earth to find their creator.', 'Academy Award for Best Visual Effects', 280000.00, 330000.00),
    ('Adventure', 'Indiana Jones and the Raiders of the Lost Ark', 115.0, '1981-06-12', 'Archaeologist and adventurer Indiana Jones is hired by the U.S. government to find the Ark of the Covenant before the Nazis.', 'Academy Award for Best Art Direction', 180000.00, 3900000.00),
    ('Romance', 'Titanic', 195.0, '1997-12-19', 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.', 'Academy Award for Best Picture', 2000000.00, 21875000.00),
    ('Thriller', 'The Silence of the Lambs', 118.5, '1991-02-14', 'A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.', 'Academy Award for Best Picture', 190000.00, 2727000.00),
    ('Fantasy', 'The Lord of the Rings: The Fellowship of the Ring', 178.75, '2001-12-19', 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.', 'Academy Award for Best Cinematography', 930000.00, 8977000.00),
    ('Animation', 'Toy Story', 81.5, '1995-11-22', 'A cowboy doll is profoundly threatened and jealous when a new spaceman figure supplants him as top toy in a boy\'s room.', 'Academy Special Achievement Award', 300000.00, 3736000.00),
    ('Splatter', 'Whole', 120.5, '1995-11-22', 'A computer hacker learns about the true nature of reality and his role in the war against its controllers.', 'Academy Award for Best Visual Effects', 100000.00, 5000000.00),
    ('Comedy', 'Superbad', 113.75, '2007-08-17', 'Two co-dependent high school seniors are forced to deal with separation anxiety after their plan to stage a booze-soaked party goes awry.', 'MTV Movie Award for Best Comedic Performance', 200000.00, 1699000.00),
    ('Crime', 'The Godfather', 175.0, '1972-03-24', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', 'Academy Award for Best Picture', 150000.00, 5000000.00),
    ('Mystery', 'Se7en', 127.0, '1995-09-22', 'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives.', 'None', 180000.00, 3000000.00),
    ('Western', 'The Good, the Bad and the Ugly', 178.0, '1966-12-23', 'A bounty hunting scam joins', 'None', 120000.00, 500000.00),
    ('War', 'Saving Private Ryan', 169.0, '1998-07-24', 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.', 'Academy Award for Best Director', 300000.00, 5000000.00),
    ('Biography', 'Schindler\'s List', 195.0, '1994-02-04', 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution', 'Academy Award for Best Picture', 250000.00, 5000000.00);
    