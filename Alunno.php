<?php
class Alunno{
    protected $nome;
    protected $cognome;
    protected $eta;

    function __construct($nome, $cognome, $eta){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    function getNome(){
        return $this->nome;
    }

    function getCognome(){
        return $this->cognome;
    }

    function getEta(){
        return $this->eta;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function setCognome($cognome){
        $this->cognome = $cognome;
    }

    function setEta($eta){
        $this->eta = $eta;
    }


}