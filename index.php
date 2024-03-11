<?php

function __autoload($class){
    include_once($class.".php") ;
}

spl_autoload_register( "__autoload");
/*include_once("Alunno.php");
include_once("Automobile.php");
include_once("Veicolo.php");*/


$a1 = new Alunno("piero","angelico",15);
$a2 = new Alunno("marco","didilescu",16);
$a3 = new Alunno("giuliano","filippini",15);
$a4 = new Alunno("riccardo","grandi",14);

$array = [$a1, $a2, $a3, $a4];

$m = new Automobile ("toyota",1990,"supra");
$a = new Animale();
$c = new Cane();

$p = new Persona("scemo","scemo");
$s = new Studente("scemo","scemo",5);


echo "<table>";
echo "<tr><th>nome</th><th>cognome</th><th>eta</th><tr>";
foreach ($array as $alunno) {
 echo"<tr><td>". $alunno->getNome()." </td><td>".$alunno->getCognome()."</td><td>".$alunno->getEta()."</td><tr>";
}

echo "<table>";

echo $m->toString()."<br>";
echo $a->getVerso()."<br>";
echo $c->getVerso()."<br>";
echo $p->presentati()."<br>";
echo $s->presentati()."<br>";
