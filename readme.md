<!-- # Create un file index.php in cui è definita una classe Production

    - All'interno della classe dovrete gestire un titolo, una lingua e un voto (su una scala da 1 a 10). La classe deve avere le sue variabili d'istanza, il costruttore e i metodi.
    - Istanziate poi almeno due oggetti Production e stampate a schermo i loro valori. -->

### BONUS 1 Creare un layout completo per stampare a schermo una lista di produzioni. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice:
    creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
    mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
    organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

### BONUS 2 Create una classe Genre (gli attributi potrebbero essere nome e descrizione) e fate in modo che la classe Production accetti un genere nel costruttore. Aggiornate le informazioni stampate a schermo con il genere.


# Aggiungere le classi Movie e TVSerie
- La classe Movie gestisce due proprietà: profitti e durata.
- La classe TVSerie gestisce il numero di stagioni.

P.S. Se vuoi aggiungere altre proprietà alle due classi, fai pure! Queste sono solo una base.


## Facciamo in modo che Movie e TVSerie ereditino le proprietà di base dalla classe Production.
## Creiamo delle istanze di Movie e TVSerie e stampiamo le informazioni a schermo.


BONUS Facciamo in modo che la classe Production accetti più di un genere.