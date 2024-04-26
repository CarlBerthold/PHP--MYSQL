# ÜBUNG_9
## Entwickeln Sie jeweils zwei Ausprägungen der folgenden BNF-Ausdrücke: ## 
- farbe IST MEINE LIEBLINGSFARBE.
- IN MEINEM NÄCHSTEN JOB WERDE ICH MINDESTENS gehalts_betrag währung VERDIENEN.

## LÖSUNG ## 
- blau IST MEINE LIEBLINGSFARBE;
- IN MEINEM NÄCHSTEN JOB WERDE ICH MINDESTENS 2500_€ VERDIENEN


# ÜBUNG_10
## Zeigen Sie erneut alle Datenbanken an.
## Löschen Sie die Datenbank test.
## Legen Sie folgende neuen Datenbanken an ## 
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
Entity = Filme und Regisseur (Mitarbeiter)
Attribute = Title, Spieldauer und Name, Vorname, Geburstag 

Filme = {title, spieldauer}
Regisseure = {Name, vorname, Geburstag}


## üBUNG 26 ##
## Wählen Sie geeignete Datentypen für jede Reihe von Werten. ##
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
# Notieren Sie folgende Zeitangaben im ANSI-Format #
- August 23, 1923
- 2.Dezember 1975
- 11.September 2001 um 9:03

## LÖSUNG ##
- '1923-08-23'
- '1975-02-12'
- '2001-11-11 09:03'

# ÜBUNG 29 ##



## SQL STATEMENT ÜBUNGEN ##
[STATEMENTS](/queries.sql)



## ÜBUNG 44 ##
# Bestimmen Sie alle echten Teilmengen der angegebenen Headings #
- {modell, hersteller, leistung_in_ps}
- {wert, farbe}
- {a, b, c}

## LÖSUNG ##
- {modell, hersteller}, {modell, leistung_in_ps}, {hersteller, modell}, {hersteller, leistung_in_ps}, {leistung_in_ps, modell}, {leistung_in_ps, hersteller}
- {wert, farbe}, {farbe, wert}
- {a, b}, {a, c}, {b, c}, {a}, {b}, {c}


## Übung 45 ##
# Schlüssel bestimmen #
autor 	erscheinungs-datum 	isbn 	     itel
C.J. Date 	01.09.2003 	978-0321197849 	Introduction to Database Systems
C.J. Date 	15.11.2006 	978-1590597460 	Date on Database: Writings
C.J. Date 	04.09.2001 	978-0201787221 	Introduction to Database Systems
T. Powell 	14.07.2004 	978-0072253573 	JavaScript
D. Gosselin 	07.09.2007 	978-1423901501 	JavaScript
S. Meier 	01.01.2009 	978-9999999991 	Mathematik I
S. Meier 	01.01.2009 	978-9999999992 	Mathematik I (Lösungsbuch)


## LÖSUNG ##
- buch = {autor, erscheinungsdatum, isbn, titel}
## Teilmengen von buch ##

- {autor}, {erscheinungsdatum}, {isbn}, {titel},

- {autor, erscheinungsdatum}, {autor, isbn}, {autor, titel}, {erscheinungsdatum, isbn}, {erscheinungsdatum, titel}, {isbn, titel},

- {erscheinungsdatum, isbn, titel}, {autor, isbn, titel}, {autor, erscheinungsdatum, titel}, {autor, erscheinungsdatum, isbn},

- {autor, erscheinungsdatum, isbn, titel}

## identifizierende Teilmengen von buch ##

- {isbn},

- {autor, isbn}, {erscheinungsdatum, isbn}, {isbn, titel},

- {erscheinungsdatum, isbn, titel}, {autor, isbn, titel}, {autor, erscheinungsdatum, titel}, {autor, erscheinungsdatum, isbn},

- {autor, erscheinungsdatum, isbn, titel}

## irreduzible Teilmengen ##

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
- SELECT * from movies;
- SELECT title, publication_date from movies;
- SELECT DISTINCT publication_date from movies;
- SELECT * from movies where publication_date > '1995-01-01';
- SELECT * from movies where title = '%RING%';
- SELECT * from movies where (title = '%RING%') AND not publication_date < '2002-01-01';
- SELECT * from movies where title = '%RING%' or description = '%RING%';


## ÜBUNG 62 ##
- CREATE TABLE users (id INTEGER PRIMARY KEY AUTO_INCREMENT, login VARCHAR(30), password VARCHAR(30));

## LÖSUNG ##
- INSERT INTO users (login, password) VALUES ('hello@login', 'adh1278da');
- SELECT id from users where login = 'hello@login' and password = 'adh1278da';


## ÜBUNG 63 ##
- Geben Sie mit SQL die aktuelle Uhrzeit aus.
- Geben Sie nur den aktuellen Monat aus.
- Entwickeln Sie eine SQL-Anweisung, die einen Würfel simuliert. Bei jedem Aufruf soll eine zufällige Zahl zwischen 1 und 6 zurückgegeben werden.

## LÖSUNG ##
- SELECT NOW();
- SELECT MONTH(NOW())´;
- SELECT FLOOR(RAND() * 6) +1;




## ÜBUNG 64 ##
Geben Sie alle Regisseure mit ungefährem Alter aus. Sie müssen nur das Geburtsjahr berücksichtigen.

## LÖSUNG ##
SELECT name, (YEAR(NOW()) - YEAR(birthday)) as Age from directors;

## ÜBUNG 65 ##
Geben Sie alle Filme mit Beschreibung aus, aber kürzen Sie die Beschreibung auf 20 Zeichen und fügen Sie '…' an.

## LÖSUNG ##
SELECT description, concat(SUBSTR(description, 1, 20), '...') as short_description from movies;



## ÜBUNG 67 ##
Entwickeln Sie SQL-Anweisungen zum Beantworten folgender Fragen:

- Wie viele Filme kennt die Datenbank?
- Wie viele Minuten dauert der kürzeste Film seit dem Jahr 2002?
- Aus wie vielen Zeichen besteht die längste Filmbeschreibung?
- Wie alt ist der älteste Film?
- Wie lange dauert ein Science-Fiction-Film im Durchschnitt?
- Wie viele verschiedene Genres unterscheidet die Datenbank?



## LÖSUNG ##
- SELECT COUNT(*) from movies;
- SELECT MIN(duration) from movies where puublication_date >= '1995-01-01';
- SELECT MAX(LENGTH(description)) from movies;
- SELECT MAX(YEAR(NOW())-publication_date) from movies;
- SELECT AVG(duration) from movies where genre = 'fantasy';