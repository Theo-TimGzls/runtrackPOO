<?php

class Personne
{
    public string $nom;
    public string $prenom;

    function __construct(?string $nom = "", ?string $prenom = "")
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    function SePresenter(): string
    {
        $resultat = "Je suis $this->prenom $this->nom";
        return $resultat;
    }
}

$personne1 = new Personne("Doe", "John");
$personne2 = new Personne("Dupond", "Jean");

echo $personne1->SePresenter() . "<br>";
echo $personne2->SePresenter() . "<br>";
?>