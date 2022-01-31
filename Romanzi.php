<?php
require_once  __DIR__  . "/Articoli.php";
require_once  __DIR__  . "/Stato.php";


class Romanzi extends Articoli{
use Stato;

    public $genere;

    //Override per il genere
    public function __construct($_titolo, $_autore, $_prezzo, $_genere){
        parent:: __construct($_titolo, $_autore, $_prezzo);
        $this->genere = $_genere;
    }

}


?>