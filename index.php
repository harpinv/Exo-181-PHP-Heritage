<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/princesse.php";

// Creation d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Vincent");
echo $humain->getNom() . "<br>";
echo $humain->getVie() . "<br><br>";

// Creation d'une instance de la classe dragon
$dragon = new dragon();
$dragon->setNom('vert');
echo $dragon->getNom() . "<br>";
echo $dragon->getVie() . "<br><br>";

// Creation d'une instance de la classe princesse
$princesse = new princesse();
$princesse->setNom("Emilie");
echo $princesse->getNom() . "<br>";
echo $princesse->getVie() . "<br>";
echo $princesse->getSaved() . "<br><br>";