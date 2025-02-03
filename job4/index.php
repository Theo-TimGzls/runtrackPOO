<?php

class Point
{
    public int $x;
    public int $y;

    public function __construct(?int $x = 0, ?int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function AfficherLesPoints(): string
    {
        $resultat = "($this->x, $this->y)";
        return $resultat;
    }
}

$point1 = new Point(2, 3);
$point2 = new Point(4, 5);

echo $point1->AfficherLesPoints() . "<br>";
echo $point2->AfficherLesPoints() . "<br>";
?>