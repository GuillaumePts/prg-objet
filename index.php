<?php



require './inc/header.php';
require_once './classes/Voiture.php';

$voiture1 = new Voiture();
$voiture1->couleur="rouge";
$voiture1->marque="BMW";

$voiture2 = new Voiture();
$voiture2->couleur="vert";
$voiture2->marque="peugeot";

var_dump($voiture1);
var_dump($voiture2);
require './inc/footer.php';