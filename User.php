<?php

class User{

    public $nome;

    public $cognome;

    public $mail;

    public $age;

    public function __construct($_nome, $_cognome, $_mail){
            $this->nome = $_nome;
            $this->cognome = $_cognome;
            $this->mail = $_mail;


    }
}

$tommaso = new User('Tommaso', 'Giannotta', 'tommaso.giannotta@gmail.com');
$tommaso->age = 29;

$vincenzo = new User('Vincenzo', 'Di Meo', 'endacil92@gmail.com');
$vincenzo->age = 28;



?>