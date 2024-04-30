
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
    `profit` decimal(10, 2) not null,
    `director_id` int not null
);

INSERT INTO movies (genre, title, duration, publication_date, description, awards, costs, profit, director_id)
VALUES 
    ('Action', 'The Matrix', 120.5, '1999-03-31', 'A computer hacker learns about the true nature of reality and his role in the war against its controllers.', 'Academy Award for Best Visual Effects', 100000.00, 5000000.00, 3),
    ('Drama', 'The Shawshank Redemption', 142.25, '1994-10-14', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', 'None', 250000.00, 583400.00, 3),
    ('Horror', 'The Exorcist', 122.0, '1973-12-26', 'When a teenage girl is possessed by a mysterious entity, her mother seeks the help of two priests to save her daughter.', 'Academy Award for Best Sound Mixing', 120000.00, 4413000.00, 7),
    ('Science Fiction', 'Blade Runner', 117.5, '1982-06-25', 'A blade runner must pursue and terminate four replicants who stole a ship in space and have returned to Earth to find their creator.', 'Academy Award for Best Visual Effects', 280000.00, 330000.00, 10),
    ('Adventure', 'Indiana Jones and the Raiders of the Lost Ark', 115.0, '1981-06-12', 'Archaeologist and adventurer Indiana Jones is hired by the U.S. government to find the Ark of the Covenant before the Nazis.', 'Academy Award for Best Art Direction', 180000.00, 3900000.00, 3),
    ('Romance', 'Titanic', 195.0, '1997-12-19', 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.', 'Academy Award for Best Picture', 2000000.00, 21875000.00, 13),
    ('Thriller', 'The Silence of the Lambs', 118.5, '1991-02-14', 'A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.', 'Academy Award for Best Picture', 190000.00, 2727000.00, 14),
    ('Fantasy', 'The Lord of the Rings: The Fellowship of the Ring', 178.75, '2001-12-19', 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.', 'Academy Award for Best Cinematography', 930000.00, 8977000.00, 13),
    ('Animation', 'Toy Story', 81.5, '1995-11-22', 'A cowboy doll is profoundly threatened and jealous when a new spaceman figure supplants him as top toy in a boy\'s room.', 'Academy Special Achievement Award', 300000.00, 3736000.00, 11),
    ('Splatter', 'Whole', 120.5, '1995-11-22', 'A computer hacker learns about the true nature of reality and his role in the war against its controllers.', 'Academy Award for Best Visual Effects', 100000.00, 5000000.00, 14),
    ('Comedy', 'Superbad', 113.75, '2007-08-17', 'Two co-dependent high school seniors are forced to deal with separation anxiety after their plan to stage a booze-soaked party goes awry.', 'MTV Movie Award for Best Comedic Performance', 200000.00, 1699000.00, 1),
    ('Crime', 'The Godfather', 175.0, '1972-03-24', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', 'Academy Award for Best Picture', 150000.00, 5000000.00, 13),
    ('Mystery', 'Se7en', 127.0, '1995-09-22', 'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives.', 'None', 180000.00, 3000000.00, 10),
    ('Western', 'The Good, the Bad and the Ugly', 178.0, '1966-12-23', 'A bounty hunting scam joins', 'None', 120000.00, 500000.00, 10),
    ('War', 'Saving Private Ryan', 169.0, '1998-07-24', 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.', 'Academy Award for Best Director', 300000.00, 5000000.00, 3),
    ('Biography', 'Schindler\'s List', 195.0, '1994-02-04', 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution', 'Academy Award for Best Picture', 250000.00, 5000000.00, 2);
    




INSERT INTO movies (genre, title, duration, publication_date, description, awards, costs, profit, director_id) VALUES
('Action', 'The Terminator', 107.0, '1984-10-26', 'A human soldier is sent from 2029 to 1984 to stop an almost indestructible cyborg killing machine, sent from the same year, which has been programmed to execute a young woman whose unborn son is the key to humanity\'s future salvation.', 'None', 640000.00, 78660000.00, 1),
('Drama', 'Good Will Hunting', 126.0, '1998-01-09', 'Will Hunting, a janitor at M.I.T., has a gift for mathematics, but needs help from a psychologist to find direction in his life.', 'Academy Award for Best Supporting Actor', 100000.00, 2259000.00, 3),
('Horror', 'A Nightmare on Elm Street', 91.0, '1984-11-16', 'The monstrous spirit of a slain child murderer seeks revenge by invading the dreams of teenagers whose parents were responsible for his untimely death.', 'None', 180000.00, 576000.00, 4),
('Science Fiction', 'E.T. the Extra-Terrestrial', 115.0, '1982-06-11', 'A troubled child summons the courage to help a friendly alien escape Earth and return to his home world.', 'Academy Award for Best Original Score', 10500.00, 7929000.00, 7),
('Adventure', 'The Goonies', 114.0, '1985-06-07', 'In order to save their home from foreclosure, a group of misfits set out to find a pirate\'s ancient valuable treasure.', 'None', 19000.00, 616100.00, 9),
('Romance', 'The Notebook', 124.0, '2004-06-25', 'A poor yet passionate young man falls in love with a rich young woman, giving her a sense of freedom, but they are soon separated because of their social differences.', 'None', 230000.00, 1157000.00, 7),
('Thriller', 'Shutter Island', 138.0, '2010-02-19', 'In 1954, a U.S. Marshal investigates the disappearance of a murderer who escaped from a hospital for the criminally insane.', 'None', 800000.00, 294800.00, 15),
('Fantasy', 'Pan\'s Labyrinth', 118.0, '2006-01-27', 'In the falangist Spain of 1944, the bookish young stepdaughter of a sadistic army officer escapes into an eerie but captivating fantasy world.', 'Academy Award for Best Cinematography', 1900000.00, 835700.00, 2),
('Animation', 'The Lion King', 88.0, '1994-06-24', 'Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.', 'Academy Award for Best Original Score', 450000.00, 9685000.00, 1),
('Splatter', 'Saw II', 93.0, '2005-10-28', 'A detective and his team must rescue eight people trapped in a factory by the twisted serial killer known as Jigsaw.', 'None', 500000.00, 1477000.00, 4),
('Comedy', 'Dumb and Dumber', 107.0, '1994-12-16', 'After a woman leaves a briefcase at the airport terminal, a dumb limo driver and his dumber friend set out on a hilarious cross-country road trip to Aspen to return it.', 'None', 1600000.00, 240000.00, 6),
('Crime', 'The Departed', 151.0, '2006-10-06', 'An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in South Boston.', 'Academy Award for Best Picture', 900000.00, 290000.00,12),
('Mystery', 'The Sixth Sense', 107.0, '1999-08-06', 'A boy who communicates with spirits seeks the help of a disheartened child psychologist.', 'None', 400000.00, 6700000.00, 15),
('Western', 'Unforgiven', 131.0, '1992-08-07', 'Retired Old West gunslinger William Munny reluctantly takes on one last job, with the help of his old partner and a young man.', 'Academy Award for Best Picture', 1400000.00, 159000.00, 7),
('War', 'Apocalypse Now', 147.0, '1979-08-15', 'A U.S. Army officer serving in Vietnam is tasked with assassinating a renegade Special Forces Colonel who sees himself as a god.', 'Academy Award for Best Cinematography', 310000.00, 160000.00, 2),
('Biography', 'The Pursuit of Happyness', 117.0, '2006-12-15', 'A struggling salesman takes custody of his son as he\'s poised to begin a life-changing professional endeavor.', 'None', 550000.00, 307000.00, 13);





CREATE TABLE directors (
    `id` int primary key auto_increment,
    `name` varchar(50) not null,
    `birthday` date not null,
    `nationality` varchar(50) not null
);


INSERT INTO directors (name, birthday, nationality) VALUES
('Steven Spielberg', '1946-12-18', 'American'),
('Christopher Nolan', '1970-07-30', 'British'),
('Quentin Tarantino', '1963-03-27', 'American'),
('Martin Scorsese', '1942-11-17', 'American'),
('Alfred Hitchcock', '1899-08-13', 'British'),
('Stanley Kubrick', '1928-07-26', 'American'),
('Francis Ford Coppola', '1939-04-07', 'American'),
('James Cameron', '1954-08-16', 'Canadian'),
('Tim Burton', '1958-08-25', 'American'),
('David Fincher', '1962-08-28', 'American'),
('Ridley Scott', '1937-11-30', 'British'),
('Peter Jackson', '1961-10-31', 'New Zealander'),
('Wes Anderson', '1969-05-01', 'American'),
('Spike Lee', '1957-03-20', 'American'),
('Ang Lee', '1954-10-23', 'Taiwanese');