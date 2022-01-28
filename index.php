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
$caduta = new Romanzi('La caduta dello Zentir', 'Caleel', 23.5, 'Fantasy');
$caduta->pagine = 869;
$caduta->data = '15/05/2019';

/* Articolo */
$brisingr = new Romanzi('Brisingr', 'Cristopher Paolini', 18, 'Fantasy');
$brisingr->pagine = 1024;
$brisingr->data = '16/08/2004';

/* Articolo */
$kotlin = new Scuola('Kotlin', 'Massimo Carli', 43);
$kotlin->pagine = 186;
$brisingr->data = '27/10/2020';

/* Articolo */
$atzeco = new Romanzi('L\'atzeco', 'Gary Jennings', 6, 'Storico');
$atzeco->pagine = 2154;
$atzeco->data = '09/09/1986';

/* Articolo */
$thor54 = new Fumetti('Thor n.54', 'Fabio Bengazzi', 7.8, 'Marvel');

/* Articolo */
$dd6 = new Fumetti('DareDevil n.6', 'Enrico Torre', 7.8, 'Marvel');

/* user */
$tommaso = new User('Tommaso', 'Giannotta', 'tommaso.giannotta@gmail.com');
$tommaso->age = 29;

/* USER */
$vincenzo = new User('Vincenzo', 'Di Meo', 'endacil92@gmail.com');
$vincenzo->age = 28;

/* AGGIUNGO AL CARRELLO DI TOMMASO TUTTI I PRODOTTI CHE VUOLE */
$tommaso-> addProduct($brisingr);
$tommaso-> addProduct($atzeco);
$tommaso-> addProduct($dd6);


$tommasoCarrello = $tommaso->getCarrello();









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
                    <h2>Ciao <?php echo $tommaso->getFullName();?> Stai acquistando i seguenti prodotti:</h2>
                    <?php foreach ($tommasoCarrello as $prodotto){?>
                       
                        <ul>
                        <h4><?php echo $prodotto->titolo;?></h4>
                        <li>
                            <?php echo $prodotto->autore;?>
                        </li>
                        <li>
                            <?php echo $prodotto->prezzo;?> €
                        </li>
                       
                    </ul>       
                <?php }?>

                </div>
                <div class="totale">
                    <h2>Totale</h2>
                    <?php foreach ($tommasoCarrello as $prodotto){?>
                       <h3><?php echo $prodotto->titolo;?> <?php echo $prodotto->prezzo; ?></h3>                             
               <?php }?>


                </div>
        </div>


    </div>
</body>
</html>
