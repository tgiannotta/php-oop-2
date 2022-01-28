<?php
require_once  __DIR__  . "/Articoli.php";

class Romanzi extends Articoli{

    public $genere;

    //Override per il genere
    public function __construct($_titolo, $_autore, $_prezzo, $_genere){
        parent:: __construct($_titolo, $_autore, $_prezzo);
        $this->genere = $_genere;
    }

}


?>