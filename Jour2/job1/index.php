<?php

class Rectangle
{
    private int $longueur;
    private int $largeur;

    public function __construct(?int $longueur = 10, ?int $largeur = 5)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur(): int
    {
        return $this->longueur;
    }

    public function getLargeur(): int
    {
        return $this->largeur;
    }

    public function setLongueur(int $longueur)
    {
        if (!empty($longueur) AND is_int($longueur)) {
            $this->longueur = $longueur;
        }
    }

    public function setLargeur(int $largeur)
    {
        if (!empty($largeur) AND is_int($largeur)) {
            $this->largeur = $largeur;
        }
    }
}

$rectangle1 = new Rectangle();
$rectangle1->setLongueur(20);
$rectangle1->setLargeur(10);

echo "longueur: " . $rectangle1->getLongueur() . "<br>";
echo "largeur: " . $rectangle1->getLargeur() . "<br>";

?>