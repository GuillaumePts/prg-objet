<?php


require __DIR__ . '/vendor/autoload.php';
require './inc/header.php';

spl_autoload_register(function ($className){
    require_once './classes/' .$className. '.php';
});

$voiture1 = new Voiture();
$voiture1->setMarque('BMW');
$voiture1->setVitesse(50);
$voiture1->setMasse(1200);
echo $voiture1->calculerEnergieCinetique(). 'Joules<br />';
$voiture1->setVitesse(140);
echo $voiture1->calculerEnergieCinetique(). 'Joules<br />';
dump($voiture1);
// $vehicule= new Vehicule(); /* class abstrait donc ne marche pas*/
// dump($vehicule);
require './inc/footer.php';
