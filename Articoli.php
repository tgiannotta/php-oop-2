<?php

class Articoli{

    public $prezzo;

    public $titolo;

    public $pagine;

    public $autore;

    public $data;

    public function __construct($_titolo, $_autore, $_prezzo){
        $this->titolo = $_titolo;
        $this->autore = $_autore;
        $this->prezzo = $_prezzo;

    }
}


?>