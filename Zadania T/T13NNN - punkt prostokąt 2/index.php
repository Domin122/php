<?php

class Punkt {
    private $x;
    private $y;

    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
}

class Prostokat {
    private $lg;
    private $pg;
    private $ld;
    private $pd;

    function __construct($lg, $pg, $ld, $pd) {
        $this->lg = $lg;
        $this->pg = $pg;
        $this->ld = $ld;
        $this->pd = $pd;
    }
    public function wyswietl(){
        echo "Lewy górny ({$this->lg->getX()},{$this->lg->getY()}) <br>";
        echo "Prawy górny ({$this->pg->getX()},{$this->pg->getY()}) <br>";
        echo "Lewy dolny ({$this->ld->getX()},{$this->ld->getY()}) <br>";
        echo "Prawy dolny ({$this->pd->getX()},{$this->pd->getY()}) <br>";
    }

}


$lg = new Punkt(4, 0);
$pg = new Punkt(5, 0);
$ld = new Punkt(6, 3);
$pd = new Punkt(0, 3);

$prostokat = new Prostokat($lg, $pg, $ld, $pd);
$prostokat->wyswietl();

?>

