<?php

class Voiture {
private string $marque;
private string $couleur;
public int $nbrRoues =4;

// method pour récuperer la marque de la voiture = getter
public function getMarque(): string{
    return $this->marque;
}

// method pour définir la marque de la voiture = setter
public function setMarque(string $marque): void{
    $this->marque = $marque;
}

public function getColor(): string{
    return $this->couleur;
}

// method pour définir la marque de la voiture = setter
public function setColor(string $color): void{
    $this->couleur = $color;
}

public function demarrer(){
    echo "<p>la voiture démarre</p>";
}

public function afficherCouleur():string{
    return "<p>la voiture est de couleur " . $this->couleur. " </p>";
}

}