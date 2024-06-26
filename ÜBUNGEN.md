# ÜBUNG_9
Entwickeln Sie jeweils zwei Ausprägungen der folgenden BNF-Ausdrücke

- farbe IST MEINE LIEBLINGSFARBE.
- IN MEINEM NÄCHSTEN JOB WERDE ICH MINDESTENS gehalts_betrag währung VERDIENEN.

## LÖSUNG ## 
- blau IST MEINE LIEBLINGSFARBE;
- IN MEINEM NÄCHSTEN JOB WERDE ICH MINDESTENS 2500_€ VERDIENEN


# ÜBUNG_10
Zeigen Sie erneut alle Datenbanken an.
Löschen Sie die Datenbank test.
Legen Sie folgende neuen Datenbanken an.

- fluggesellschaften 
- filmverleih 
- partnerverleih


## LÖSUNG ##
- SHOW DATABASES;
- DROP DATABASE test;
- CREATE DATABASE fluggesellschaft;
- CREATE DATABASE filmverleih;
- CREATE DATABASE partnervermitllung;
- SHOW DATABASES;


## ÜBUNG 13 ##
Meine Mitarbeiter sollen **Filme** verwalten. Filme bestehen aus **Titel** und **Spieldauer**. Letztere wird in Minuten angegeben. Manche Leute interessieren sich auch für das Erscheinungsjahr. Außerdem wollen wir später eine Internetsuche anbieten, die es erlaubt, anhand des **Regisseurs** (**Name**, **Vorname** und **Geburtsdatum**) zu suchen. Zum gefundenen Film muss dann eine **Kurzbeschreibung** angezeigt werden. Im Moment ist es noch nicht wichtig, welcher Film von welchem Regisseur stammt. Meine Mitarbeiter sollen aber schon mal eine Liste von Regisseuren erfassen können.

## Lösung ##
Entity = Filme und Regisseur (Mitarbeiter)<br>
Attribute = Title, Spieldauer und Name, Vorname, Geburstag 

Filme = {title, spieldauer}
Regisseure = {Name, vorname, Geburstag}


## ÜBUNG 26 ##
Wählen Sie geeignete Datentypen für jede Reihe von Werten.
- 9, 17, 28, 45, 12, 9, 17 
- 11.4, 7.3, 9.8, 99.2
- 3, 4, 3467.278, 5, 6, 7, 8
- 'Stefanie', 'Jan', 'Sabine', 'Michael', 'Udo', 'Sebastian', 'Katherina'
- 0179534891, 00491721234, 091112345

## LöSUNG ##
- INTEGER
- DECIMAL
- DECIMAL(7.3)
- VARCHAR(255)
- VARCHAR(20)


## ÜBUNG 27 ##
Notieren Sie folgende Zeitangaben im ANSI-Format
- August 23, 1923
- 2.Dezember 1975
- 11.September 2001 um 9:03

## LÖSUNG ##
- '1923-08-23'
- '1975-02-12'
- '2001-11-11 09:03'

# ÜBUNG 29 ##



## SQL STATEMENT ÜBUNGEN ##
Eine sammlung von queries zum testen und nachschlagen:<br>
[STATEMENTS](/queries.sql)



## ÜBUNG 44 ##
Bestimmen Sie alle echten Teilmengen der angegebenen Headings
- {modell, hersteller, leistung_in_ps}
- {wert, farbe}
- {a, b, c}

## LÖSUNG ##
- {modell, hersteller}, {modell, leistung_in_ps}, {hersteller, modell}, {hersteller, leistung_in_ps}, {leistung_in_ps, modell}, {leistung_in_ps, hersteller}
- {wert, farbe}, {farbe, wert}
- {a, b}, {a, c}, {b, c}, {a}, {b}, {c}


## Übung 45 ##
# Schlüssel bestimmen #
| Autor        | Erscheinungsdatum | ISBN           | Titel                              |
|--------------|-------------------|----------------|------------------------------------|
| C.J. Date    | 01.09.2003        | 978-0321197849 | Introduction to Database Systems   |
| C.J. Date    | 15.11.2006        | 978-1590597460 | Date on Database: Writings         |
| C.J. Date    | 04.09.2001        | 978-0201787221 | Introduction to Database Systems   |
| T. Powell    | 14.07.2004        | 978-0072253573 | JavaScript                         |
| D. Gosselin  | 07.09.2007        | 978-1423901501 | JavaScript                         |
| S. Meier     | 01.01.2009        | 978-9999999991 | Mathematik I                       |
| S. Meier     | 01.01.2009        | 978-9999999992 | Mathematik I (Lösungsbuch)         |



## LÖSUNG ##
- buch = {autor, erscheinungsdatum, isbn, titel}
### Teilmengen von buch ###

- {autor}, {erscheinungsdatum}, {isbn}, {titel},
- {autor, erscheinungsdatum}, {autor, isbn}, {autor, titel}, {erscheinungsdatum, isbn}, {erscheinungsdatum, titel}, {isbn, titel},
- {erscheinungsdatum, isbn, titel}, {autor, isbn, titel}, {autor, erscheinungsdatum, titel}, {autor, erscheinungsdatum, isbn},
- {autor, erscheinungsdatum, isbn, titel}

### identifizierende Teilmengen von buch ###

- {isbn},
- {autor, isbn}, {erscheinungsdatum, isbn}, {isbn, titel},
- {erscheinungsdatum, isbn, titel}, {autor, isbn, titel}, {autor, erscheinungsdatum, titel}, {autor, erscheinungsdatum, isbn},
- {autor, erscheinungsdatum, isbn, titel}

### irreduzible Teilmengen ###

- {isbn}, {autor, erscheinungsdatum, titel}



## ÜBUNG 61 ##
- Geben Sie alle Filme des Filmverleihs mit allen Spalten aus.
- Geben Sie alle Filme mit titel und erscheinungsjahr aus.
- Geben Sie alle Jahre aus, aus denen der Filmverleih Filme besitzt (ohne Doppelnennungen).
- Geben Sie alle Filme aus, die 2002 oder nach 2002 erschienen sind.
- Geben Sie alle Filme aus, die den Text Ring im Titel enthalten.
- Geben Sie alle Filme aus, die den Text Ring im Titel enthalten und nicht vor 2002 erschienen sind.
- Geben Sie alle Filme aus, die den Text Ring im Titel oder der Kurzbeschreibung enthalten.



## LÖSUNG ##
```sql
-- SELECT all columns from the "movies" table
SELECT * FROM movies;

-- SELECT only the "title" and "publication_date" columns from the "movies" table
SELECT title, publication_date FROM movies;

-- SELECT distinct publication dates from the "movies" table
SELECT DISTINCT publication_date FROM movies;

-- SELECT all columns from the "movies" table where publication_date is after '1995-01-01'
SELECT * FROM movies WHERE publication_date > '1995-01-01';

-- SELECT all columns from the "movies" table where the title contains 'RING'
SELECT * FROM movies WHERE title LIKE '%RING%';

-- SELECT all columns from the "movies" table where the title contains 'RING' and publication_date is not before '2002-01-01'
SELECT * FROM movies WHERE title LIKE '%RING%' AND NOT publication_date < '2002-01-01';

-- SELECT all columns from the "movies" table where the title or description contains 'RING'
SELECT * FROM movies WHERE title LIKE '%RING%' OR description LIKE '%RING%';
```


## ÜBUNG 62 ##
``` sql 
CREATE TABLE users (id INTEGER PRIMARY KEY AUTO_INCREMENT, login VARCHAR(30), password VARCHAR(30));
```

## LÖSUNG ##
``` sql
INSERT INTO users (login, password) VALUES ('hello@login', 'adh1278da');
SELECT id from users where login = 'hello@login' and password = 'adh1278da';
```


## ÜBUNG 63 ##
- Geben Sie mit SQL die aktuelle Uhrzeit aus.
- Geben Sie nur den aktuellen Monat aus.
- Entwickeln Sie eine SQL-Anweisung, die einen Würfel simuliert. Bei jedem Aufruf soll eine zufällige Zahl zwischen 1 und 6 zurückgegeben werden.

## LÖSUNG ##
```sql
- SELECT NOW();
- SELECT MONTH(NOW())´;
- SELECT FLOOR(RAND() * 6) +1;
```




## ÜBUNG 64 ##
Geben Sie alle Regisseure mit ungefährem Alter aus. Sie müssen nur das Geburtsjahr berücksichtigen.

## LÖSUNG ##
```sql
SELECT name, (YEAR(NOW()) - YEAR(birthday)) as Age from directors;
```

## ÜBUNG 65 ##
Geben Sie alle Filme mit Beschreibung aus, aber kürzen Sie die Beschreibung auf 20 Zeichen und fügen Sie '…' an.

## LÖSUNG ##
```sql
SELECT description, concat(SUBSTR(description, 1, 20), '...') as short_description from movies;
```

## ÜBUNG 67 ##
Entwickeln Sie SQL-Anweisungen zum Beantworten folgender Fragen:

- Wie viele Filme kennt die Datenbank?
- Wie viele Minuten dauert der kürzeste Film seit dem Jahr 2002?
- Aus wie vielen Zeichen besteht die längste Filmbeschreibung?
- Wie alt ist der älteste Film?
- Wie lange dauert ein Science-Fiction-Film im Durchschnitt?
- Wie viele verschiedene Genres unterscheidet die Datenbank?


## LÖSUNG ##
``` sql
SELECT COUNT(*) from movies;
SELECT MIN(duration) from movies where publication_date >= '1995-01-01';
SELECT MAX(LENGTH(description)) from movies;
SELECT MAX(YEAR(NOW())-YEAR(publication_date)) as max_age from movies;
SELECT AVG(duration) from movies where genre = 'fantasy';
SELECT COUNT(DISTINCT genre) from movies;
```

## ÜBUNG 68 ##
Die Spieldauer des Films Toy Story ist mit 180 Minuten falsch angegeben. Ändern Sie sie auf 152 Minuten.

## LÖSUNG ##
``` sql
UPDATE movies SET duration = 152.00 where title = 'Toy Story';
```


## ÜBUNG 69 ##
Alle Filme, die von 1998 und älter sind, werden aus dem Programm genommen. Löschen Sie sie!


## LÖSUNG ##
``` sql
DELETE FROM movies WHERE publication_date <= '1998-01-01';
```


## ÜBUNG 71 ##
- Geben Sie alle Filme nach Titel sortiert aus.
- Geben Sie alle Filme nach Spieldauer sortiert aus. Dabei soll der längste Film zuerst erscheinen und der kürzeste zuletzt.
- Geben Sie alle Filme in der Reihenfolge ihres Erscheinens aus. Falls in einem Jahr mehrere Filme vorhanden sind, so müssen diese innerhalb des Jahres noch alphabetisch sortiert werden.


## LÖSUNG ##
``` sql
SELECT * FROM movies ORDER BY title;
SELECT * FROM movies ORDER BY duration DESC;
SELECT * FROM movies ORDER BY Publication_date, title;
```



## ÜBUNG 72 ##
geben sie Filme mit LIMIT aus


## LÖSUNG ##
``` sql
SELECT * FROM movies ORDER BY publication_date >= 2000 LIMIT 2
```



## ÜBUNG 74 ##
- Geben Sie alle Filme aus, bei denen keine Spieldauer angegeben ist.
- Geben Sie alle Filme nach Spieldauer sortiert aus. Filme, die keine Spieldauer haben, sollen in dieser Auflistung nicht erscheinen.


## LÖSUNG ##
``` sql
SELECT * FROM movies WHERE duration IS NULL;
SELECT * FROM movies WHERE duration IS NOT NULL ORDER BY duration;
```


