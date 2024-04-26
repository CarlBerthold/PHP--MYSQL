/* Modify a column to a unique key: */
ALTER TABLE seminare MODIFY title VARCHAR(50) UNIQUE;

/* Add a column to a table: */
ALTER TABLE users add salutation varchar(50);
ALTER TABLE seminare ADD category varchar(50) not null;

/* SELECT with a expression: */
SELECT surname, name, registered_since from users;

/* SELECT with no dublicates: */
SELECT DISTINCE category from seminare;


/* SELECT with a condition and evaluate strict to the where condition: */
SELECT title, price from seminare where BINARY category = 'framework';


/* SELECT with a expression where, or condition and Like */
SELECT title, description, price from seminare where title like 'RUBY%' or description like '%JAVASCRIPT%';


/* SELECT and use maths operations for evaluation first titel and beschreibung than use result for AND  */
SELECT titel, beschreibung, kategorie FROM seminare WHERE (titel LIKE '%Adobe%' OR beschreibung LIKE '%Adobe%') AND kategorie = 'Webdesign';


/* SELECT with a expression and modify the result */
SELECT title, price, price *1.19 as price_with_vat from seminare;

/* SELECT the age from the birthdate of the directors */
SELECT name, (YEAR(NOW()) - YEAR(birthday)) as Age from directors;

/* SELECT the description and shorten the description to 20 characters */
SELECT description, concat(SUBSTR(description, 1, 20), '...') as short_description from movies;

/* SELECT the numbers of movies */
SELECT COUNT(*) from movies;

/* SELECT the shortest duration of a movie where the publication_date is greater or even to '1995-01-01'*/
SELECT MIN(duration) from movies where publication_date >= '1995-01-01';

/* SELECT the Longest description of all movies*/
SELECT MAX(LENGTH(description)) from movies;

/* SELECT the age from publication_date to now a show it as max_age from movies*/
SELECT MAX(YEAR(NOW())-YEAR(publication_date)) as max_age from movies;

/* SELECT the average duration of all movies where the genre is fantasy*/
SELECT AVG(duration) from movies where genre = 'fantasy';

/* SELECT the sum of all durations of all movies where the genre is fantasy*/
SELECT COUNT(DISTINCT genre) from movies;