<?php

class osoba
{
    public $nazwisko, $imie;

    public function wpiszNazwisko($arg1)
    {
        $this->nazwisko = $arg1;
    }

    public function pobierzNazwisko()
    {
        return $this->nazwisko;
    }

    public function wpiszImie($arg2)
    {
        $this->imie = $arg2;
    }

    public function pobierzImie()
    {
        return $this->imie;
    }
}//--------------------------------------

class klient extends osoba
{
    public $adres;

    public function wpiszAdres($arg3)
    {
        $this->adres = $arg3;
    }

    public function pobierzAdres()
    {
        return $this->adres;
    }
}

$osoba1 = new osoba();
$osoba1->wpiszNazwisko('Żak');
$osoba1->wpiszImie('Ewa');
echo "Dane obiektu klasy osoba <br>";
echo $osoba1->pobierzNazwisko() . " osoba_dziedziczenie.php" . $osoba1->pobierzImie();
echo "<br>";

$klient1 = new klient();
$klient1->wpiszNazwisko('Król');
$klient1->wpiszImie('Marcin');
$klient1->wpiszAdres('Warszawa ul. Kręta 7');

echo "Dane obiektu klasy klient <br>";
echo $klient1->pobierzNazwisko() . " osoba_dziedziczenie.php" . $klient1->pobierzImie() . " " . $klient1->pobierzAdres();
echo "<br>";
