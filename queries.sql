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