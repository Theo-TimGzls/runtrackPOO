<?php

class Livre
{
    private string $titre;
    private string $auteur;
    private int $nombreDePages;
    private bool $disponible;

    public function __construct(?string $titre = 'Titre', ?string $auteur = 'Auteur', ?int $nombreDePages = 0, bool $disponible = true)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nombreDePages = $nombreDePages;
        $this->disponible = $disponible;
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

    public function getDisponible(): bool
    {
        return $this->disponible;
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
            if ($nombreDePages > 0) {
                $this->nombreDePages = $nombreDePages;
            } else {
                echo "Erreur : Le nombre de pages doit être un entier positif.<br>";
            }
        }
    }

    public function setDisponible(bool $disponible): void
    {
        $this->disponible = $disponible;
    }

    public function verification(): bool
    {
        return $this->disponible;
    }

    public function emprunter(): void
    {
        if ($this->disponible) {
            $this->disponible = false;
        } else {
            echo "Le livre n'est pas disponible.<br>";
        }
    }
}

$Livre1 = new Livre();
$Livre1->setTitre("Barbatruc");
$Livre1->setAuteur("Barbapapa");
$Livre1->setNombreDePages(56);
$Livre1->setNombreDePages(-50); // Valeur incorrecte, message d'erreur

echo "Le titre: " . $Livre1->getTitre() . "<br>";
echo "L'auteur: " . $Livre1->getAuteur() . "<br>";
echo "Le nombre de pages: " . $Livre1->getNombreDePages() . "<br>";
echo "Disponible: " . ($Livre1->verification() ? "Oui" : "Non") . "<br>";

// Changer la disponibilité du livre
$Livre1->setDisponible(false);

// Affichage après modification de la disponibilité
echo "<br>Après modification de la disponibilité:<br>";
echo "Disponible: " . ($Livre1->verification() ? "Oui" : "Non") . "<br>";

?>