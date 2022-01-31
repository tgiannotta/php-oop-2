<?php

class User{

    public $nome;

    public $cognome;

    public $mail;

    public $age;

    public $totale=0;

    protected $carrello = [];

    public function __construct($_nome, $_cognome, $_mail){
            $this->nome = $_nome;
            $this->cognome = $_cognome;
            $this->mail = $_mail;


    }
    public function addProduct($prodotto){
        $this->carrello[] = $prodotto;
    }

    public function getFullName(){
        return $this->nome . ' ' . $this->cognome;
    }

    public function getCarrello(){
        return $this->carrello;
    }
    
    
    
}



?>