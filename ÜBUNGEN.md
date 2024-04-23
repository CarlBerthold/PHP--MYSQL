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

