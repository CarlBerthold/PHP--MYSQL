benutze den Titel als alternativen Schlüssel hinzu:
ALTER TABLE seminare MODIFY title VARCHAR(50) UNIQUE;

ALTER TABLE users add salutation varchar(50);
ALTER TABLE seminare ADD category varchar(50) not null;

/* SELECT with a expression: */
SELECT surname, name, registered_since from users;

/* SELECT with no dublicates: */
SELECT DISTINCE category from seminare;


/* SELECT with a condition and evaluate strict to the where condition: */
SELECT title, price from seminare where BINARY category = 'framework';
