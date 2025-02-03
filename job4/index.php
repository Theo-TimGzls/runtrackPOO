<?php

class Point {
    // Déclaration des attributs
    public $x;
    public $y;

    // Constructeur pour initialiser x et y
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour afficher les coordonnées du point
    public function afficherLesPoints() {
        echo "Point : (" . $this->x . ", " . $this->y . ")<br>";
    }

    // Méthode pour afficher la coordonnée x
    public function afficherX() {
        echo "x = " . $this->x . "<br>";
    }

    // Méthode pour afficher la coordonnée y
    public function afficherY() {
        echo "y = " . $this->y . "<br>";
    }

    // Méthode pour changer la coordonnée x
    public function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    // Méthode pour changer la coordonnée y
    public function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}

// Instanciation de la classe Point avec des valeurs pour x et y
$point1 = new Point(5, 10);

// Affichage des informations du point
$point1->afficherLesPoints();  // Affiche (5, 10)
$point1->afficherX();          // Affiche x = 5
$point1->afficherY();          // Affiche y = 10

// Changer les coordonnées du point
$point1->changerX(15);
$point1->changerY(20);

// Affichage après modification des coordonnées
$point1->afficherLesPoints();  // Affiche (15, 20)
$point1->afficherX();          // Affiche x = 15
$point1->afficherY();          // Affiche y = 20

?>
