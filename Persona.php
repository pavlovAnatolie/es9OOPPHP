<?php
class Persona{
    private $nome;
    private $cognome;

    function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    function presentati(){
        return $this->nome ." ". $this->cognome;
    }
}