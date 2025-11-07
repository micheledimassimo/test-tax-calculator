Tax Calculator Readme

Questo è un piccolo programma sviluppato in PHP che calcola una ricevuta, in base ai prodotti inseriti, con prezzo totale e totale di tasse su quei prodotti.
Come funziona?
Sono partito dal costruire le classi per le seguenti entità:

1. Item: 
    - Ho creato le variabili che poi andranno a riempirsi attraverso la funzione construct, che sono nome prezzo quantità e due booleani che mi permettono di definire se sono importati o esenti da tassazioni. //Una volta eseguita l'istanza si avrà un nuovo oggetto che riempirà la ricevuta.
2. Calculator:
    - Questa è una classe che esegue una funzione per calcolare la tassa da applicare all'oggetto item che viene creato. Qui avviene il controllo dei       booleani isImported e isExempt. Di base il tasso è del 10%, ma se è esente invece si abbassa a 0, invece, nel caso in cui il prodotto sia importato, si aggiunge un 5% al prezzo finale.  Infine arrotonda il prezzo a due cifre decimali andando al centesimo superiore nel caso il numero venga a 3 cifre decimali.
3. Receipt:
    - Questa classe è più complessa. Sono partito col definire una funzione che aggiunge gli oggetti item creati, i quali vengono poi salvati dentro un array, inizialmente vuoto. Dopodichè la funzione printReceipt() cicla ogni singolo item nell'array ed esegue i calcoli per determinare il prezzo totale della singola ricevuta e quanto di quel totale siano le tasse. Infine stampa a video i dati dell'item con i totali dei prezzi (ho scelto di mettere tutto in una pagina HTML)
4. Index:
    Questo è il file principale dove vengono richiamate le classi create. Qui infatti avviene la creazione delle ricevute, ovvero si crea l'istanza New Receipt, salvandolo in una variabile (es. receipt1), la quale richiama a sua volta il metododo addItems() della classe Receipt, dentro la quale avviene istanza di New Item, ovvero si crea il prodotto che si sta acquistando (es. 1 scatola di cioccolatini al prezzo di 10.99). Una volta create tutte le istanze di ricevute necessarie, nella struttura html le si possono stampare richiamando il metodo printReceipt(). 

Una volta terminato, aprendo la pagina web tramite il local server di MAMP, si vedranno a pagine le ricevute sotto forma di lista e disposte in colonna 