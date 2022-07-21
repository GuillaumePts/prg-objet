<?php


require __DIR__ . '/vendor/autoload.php';
require './inc/header.php';
require_once './classes/Voiture.php';

$voiture1 = new Voiture("jaune");

$voiture1->setColor("Noir");
echo $voiture1->getColor();


$voiture1->setMarque("BMW");
echo $voiture1->getMarque();






$voiture2 = new Voiture("jaune");

// $voiture2->marque="peugeot";
$voiture2->setMarque("peugeot");
echo $voiture2->getMarque();

$voiture2->setColor("vert");
echo $voiture2->getColor();

$voiture2->demarrer();

// dump($voiture1);
// dump($voiture2);
require './inc/footer.php';