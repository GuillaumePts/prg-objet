<?php

class Voiture extends Vehicule{
// protected string $marque;

public int $nbrRoues =4;

// public function __construct(string $couleur)
// {
//     $this->couleur = $couleur;
// }

// method pour récuperer la marque de la voiture = getter
// public function getMarque(): string{
//     return $this->marque;
// }

// method pour définir la marque de la voiture = setter
// public function setMarque(string $marque): void{
//     $this->marque = $marque;
// }



public function demarrer(){
    echo "<p>la voiture démarre</p>";
}

public function afficherCouleur():string{
    return "<p>la voiture est de couleur " . $this->couleur. " </p>";

    
}

// public function __destruct()
//     {
//         echo "je suis détruit";
//     }

}