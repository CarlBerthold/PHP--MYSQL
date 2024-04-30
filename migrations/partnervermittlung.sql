CREATE DATABASE partnervermittlung;

use partnervermittlung;

CREATE TABLE partners (
    `id` int primary key auto_increment,
    `salutation` varchar(5) DEFAULT NULL,
    `surname` varchar(50) not null,
    `gender` varchar(6) not null,
    `name` varchar(50) not null,
    `birthday` date not null,
    `Sexual_orientation` varchar(50) DEFAULT NULL,
    `hobbys` varchar(50) DEFAULT NULL
);


INSERT INTO partners (salutation, surname, gender, name, birthday, Sexual_orientation, hobbys) VALUES
('Mr.', 'Smith', 'Male', 'John', '1980-05-10', 'Heterosexual', 'Reading'),
('Ms.', 'Johnson', 'Female', 'Emily', '1985-08-15', 'Heterosexual', 'Cooking'),
('', 'Williams', 'Male', 'Michael', '1977-12-20', 'Heterosexual', 'Hiking'),
('Mrs.', 'Brown', 'Female', 'Sarah', '1982-04-25', 'Heterosexual', 'Photography'),
('Mr.', 'Jones', 'Male', 'David', '1975-10-05', 'Heterosexual', 'Painting'),
('Ms.', 'Davis', 'Female', 'Jessica', '1988-06-30', 'Heterosexual', 'Yoga'),
('Mr.', 'Miller', 'Male', 'Christopher', '1983-09-12', 'Heterosexual', 'Playing guitar'),
('Mrs.', 'Wilson', 'Female', 'Lisa', '1979-03-18', 'Heterosexual', 'Traveling'),
('Mr.', 'Moore', 'Male', 'Andrew', '1986-07-22', 'Heterosexual', 'Swimming'),
('Ms.', 'Taylor', 'Female', 'Amanda', '1984-11-08', 'Heterosexual', 'Dancing'),
('Mr.', 'Anderson', 'Male', 'Daniel', '1974-02-14', 'Heterosexual', 'Playing basketball'),
('Mrs.', 'Thomas', 'Female', 'Jennifer', '1981-01-27', 'Heterosexual', 'Singing'),
('Mr.', 'Jackson', 'Male', 'Robert', '1978-06-03', 'Heterosexual', 'Fishing'),
('Ms.', 'White', 'Female', 'Michelle', '1987-04-10', 'Heterosexual', 'Gardening'),
('Mr.', 'Harris', 'Male', 'Ryan', '1989-09-08', 'Heterosexual', 'Running'),
('Mrs.', 'Martin', 'Female', 'Elizabeth', '1980-12-05', 'Heterosexual', 'Watching movies'),
('', 'Thompson', 'Male', 'Matthew', '1982-08-19', 'Heterosexual', 'Cooking'),
('Ms.', 'Garcia', 'Female', 'Maria', '1983-03-21', 'Heterosexual', 'Reading'),
('Mr.', 'Martinez', 'Male', 'Anthony', '1986-11-15', 'Heterosexual', 'Playing video games'),
('Mrs.', 'Robinson', 'Female', 'Rebecca', '1976-07-17', 'Heterosexual', 'Traveling'),
('Mr.', 'Clark', 'Male', 'Kevin', '1984-10-29', 'Heterosexual', 'Playing piano'),
('', 'Lewis', 'Female', 'Laura', '1981-06-12', 'Heterosexual', 'Painting'),
('Mr.', 'Lee', 'Male', 'Justin', '1979-05-07', 'Heterosexual', 'Surfing'),
('Mrs.', 'Walker', 'Female', 'Patricia', '1988-02-25', 'Heterosexual', 'Camping'),
('Mr.', 'Allen', 'Male', 'Jonathan', '1983-11-03', 'Heterosexual', 'Playing tennis'),
('Ms.', 'Young', 'Female', 'Stephanie', '1987-09-28', 'Heterosexual', 'Photography'),
('Mr.', 'Hill', 'Male', 'Brandon', '1977-04-14', 'Heterosexual', 'Bird watching'),
('Mrs.', 'King', 'Female', 'Melissa', '1985-01-20', 'Heterosexual', 'Cooking'),
('Mr.', 'Scott', 'Male', 'Peter', '1980-08-07', 'Heterosexual', 'Hiking'),
('Ms.', 'Green', 'Female', 'Christine', '1982-12-11', 'Heterosexual', 'Dancing'),
('Mr.', 'Adams', 'Male', 'Nathan', '1979-03-30', 'Heterosexual', 'Golfing'),
('Mrs.', 'Baker', 'Female', 'Heather', '1984-06-18', 'Heterosexual', 'Painting'),
('Mr.', 'Nelson', 'Male', 'Eric', '1987-02-04', 'Heterosexual', 'Swimming'),
('Ms.', 'Evans', 'Female', 'Tiffany', '1981-10-12', 'Heterosexual', 'Playing guitar');