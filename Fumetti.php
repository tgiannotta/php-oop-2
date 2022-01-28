<?php
require_once  __DIR__  . "/Articoli.php";

class Fumetti extends Articoli{

    public $casa;

    //Override per la casa di distribuzione
    public function __construct($_titolo, $_autore, $_prezzo, $_casa){
        parent:: __construct($_titolo, $_autore, $_prezzo);
        $this->casa = $_casa;
    }

}



?>