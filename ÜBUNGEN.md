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