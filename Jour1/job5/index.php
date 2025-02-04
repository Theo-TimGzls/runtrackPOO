<?php

class Animal
{
    public string $age;
    public string $prenom;

    public function __construct(?string $age = "0", ?string $prenom = "")
    {
        $this->age = $age;
        $this->prenom = $prenom;
    }

    public function vieillir(): string
    {
        $resultat = "L'âge de l'animal est " . ($this->age + 1) . " ans";
        return $resultat;
    }

    public function nommer(): string
    {
        $resultat = "Le nom de l'animal est $this->prenom";
        return $resultat;
    }
}

$animal1 = new Animal("5", "Rantanplan");
$animal2 = new Animal("10", "Felix");

echo $animal1->vieillir() . "<br>";
echo $animal2->vieillir() . "<br>";
echo $animal1->nommer() . "<br>";
echo $animal2->nommer() . "<br>";

?>