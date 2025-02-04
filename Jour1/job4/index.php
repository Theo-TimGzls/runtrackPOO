<?php

class Point {
    // Déclaration des attributs
    public $x;
    public $y;

    // Constructeur pour initialiser x et y
    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour afficher les coordonnées du point
    function afficherLesPoints() {
        echo "Point : (" . $this->x . ", " . $this->y . ")<br>";
    }

    // Méthode pour afficher la coordonnée x
    function afficherX() {
        echo "x = " . $this->x . "<br>";
    }

    // Méthode pour afficher la coordonnée y
    function afficherY() {
        echo "y = " . $this->y . "<br>";
    }

    // Méthode pour changer la coordonnée x
    function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    // Méthode pour changer la coordonnée y
    function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}

// Instanciation de la classe Point avec des valeurs pour x et y
$point1 = new Point(8, 18);

// Affichage des informations du point
$point1->afficherLesPoints();  // Affiche (8, 18)
$point1->afficherX();          // Affiche x = 8
$point1->afficherY();          // Affiche y = 18

// Changer les coordonnées du point
$point1->changerX(12);
$point1->changerY(32);

// Affichage après modification des coordonnées
$point1->afficherLesPoints();  // Affiche (12, 32)
$point1->afficherX();          // Affiche x = 15
$point1->afficherY();          // Affiche y = 20

?>
