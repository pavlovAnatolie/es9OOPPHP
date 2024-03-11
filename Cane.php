<?php
class Cane extends Animale{

    function __construct(){
        parent::__construct();
    }

    function getVerso(){
        return /*parent::getVerso().*/"bau";
    }
    

}