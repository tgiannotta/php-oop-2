<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
 ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
 Strutturare le classi gestendo l'ereditarietà dove necessario; 
 ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a stampare in pagina come visto questa mattina i prodotti scelti dall'utente.
 -->



<?php

require_once  __DIR__  . "/User.php";
require_once  __DIR__  . "/Articoli.php";
require_once  __DIR__  . "/Romanzi.php";
require_once  __DIR__  . "/Fumetti.php";
require_once  __DIR__  . "/Scuola.php";



/* Articolo */
$caduta = new Articoli('La caduta dello Zentir', 'Caleel', 23.5, 'Fantasy');
$caduta->pagine = 869;
$caduta->data = '15/05/2019';

/* Articolo */
$brisingr = new Articoli('Brisingr', 'Cristopher Paolini', 18, 'Fantasy');
$brisingr->pagine = 1024;
$brisingr->data = '16/08/2004';

/* Articolo */
$kotlin = new Scuola('Kotlin', 'Massimo Carli', 43);
$kotlin->pagine = 186;
$brisingr->data = '27/10/2020';

/* Articolo */
$atzeco = new Articoli('L\'atzeco', 'Gary Jennings', 6, 'Storico');
$atzeco->pagine = 2154;
$atzeco->data = '09/09/1986';

/* Articolo */
$thor54 = new Fumetti('Thor n.54', 'Fabio Bengazzi', 7.8, 'Marvel');

/* Articolo */
$dd6 = new Fumetti('DareDevil n.6', 'Enrico Torre', 7.8, 'Marvel');

var_dump($caduta);
var_dump($brisingr);
var_dump($thor54);
var_dump($dd6);
var_dump($atzeco);
var_dump($kotlin);










?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>"> 
</head>
<body>
    <h1>Benvenuto nel negozio di Tommaso</h1>
    <div class="carrello-container">
        <div class="carrello">
                <div class="prodotti">
                    <h2>Prova prodotti</h2>
                </div>
                <div class="totale">
                    <h2>Prova Totale</h2>
                </div>
        </div>


    </div>
</body>
</html>
