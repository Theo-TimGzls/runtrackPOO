<?php

class Livre
{
    private string $titre;
    private string $auteur;
    private int $nombreDePages;

    public function __construct(?string $titre = 'Titre', ?string $auteur = 'Auteur', ?int $nombreDePages = 0)
    {
        // $this->titre = $titre;
        // $this->auteur = $auteur;
        // $this->nombreDePages = $nombreDePages;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function getNombreDePages(): int
    {
        return $this->nombreDePages;
    }

    public function setTitre(string $titre): void
    {
        if (!empty($titre) AND is_string($titre)) {
            $this->titre = $titre;
        }
    }

    public function setAuteur(string $auteur): void
    {
        if (!empty($auteur) AND is_string($auteur)) {
            $this->auteur = $auteur;
        }
    }

    public function setNombreDePages(int $nombreDePages): void
    {
        if (!empty($nombreDePages) AND is_int($nombreDePages)) {
            $this->nombreDePages = $nombreDePages;
        }
    }
}

$Livre1 = new Livre();
$Livre1->setTitre("Barbatruc");
$Livre1->setAuteur("Barbapapa");
$Livre1->setNombreDePages(56);

echo "Le titre: " . $Livre1->getTitre() . "<br>";
echo "L'auteur: " . $Livre1->getAuteur() . "<br>";
echo "Le nombre de pages: " . $Livre1->getNombreDePages() . "<br>";

?>