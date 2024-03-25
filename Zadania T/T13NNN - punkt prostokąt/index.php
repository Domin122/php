<?php

class Punkt {
    public $x;
    public $y;

    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}

class Prostokat {
    public $lg;
    public $pg;
    public $ld;
    public $pd;

    function __construct($lg, $pg, $ld, $pd) {
        $this->lg = $lg;
        $this->pg = $pg;
        $this->ld = $ld;
        $this->pd = $pd;
    }
}


$lg = new Punkt(4, 0);
$pg = new Punkt(5, 0);
$ld = new Punkt(6, 3);
$pd = new Punkt(0, 3);

$prostokat = new Prostokat($lg, $pg, $ld, $pd);

echo "Lewy górny ({$prostokat->lg->x},{$prostokat->lg->y}) <br>";
echo "Prawy górny ({$prostokat->pg->x},{$prostokat->pg->y}) <br>";
echo "Lewy dolny ({$prostokat->ld->x},{$prostokat->ld->y}) <br>";
echo "Prawy dolny ({$prostokat->pd->x},{$prostokat->pd->y}) <br>";
?>
