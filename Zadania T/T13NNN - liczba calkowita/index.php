<?php

class Liczba_Calkowita {
    private $liczba;

    public function wyswietlLiczbe() {
        echo $this->liczba;
    }

    public function pobierzLiczbe($Liczba) {
        $this->liczba = $Liczba;
    }

    public function zwracajLiczbe() {
        return $this->liczba;
    }

    public function wartosc_bezwzgledna() {
        return abs($this->liczba);
    }
}


$mojaLiczba = new Liczba_Calkowita();
$mojaLiczba->pobierzLiczbe(-5);
echo "Wartość Liczby: ";
echo $mojaLiczba->wyswietlLiczbe() . "<br>";
echo "Wartość bezwzględna: ";
echo $mojaLiczba->wartosc_bezwzgledna() . "<br>";
echo "Zwracana liczba: ";
echo $mojaLiczba->zwracajLiczbe() . "<br>";

?>
