<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T132</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T132</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Zdefiniuj klasę czołg. Czołg powinien mieć następujące właściwości:<br>
        - nazwa,<br>
        - kolor,<br>
        - ilość amunicji<br>
        oraz metody:<br>
        - info() – wyświetlająca informację o czołgu,<br>
        - pomaluj() – zmieniająca kolor czołgu,<br>
        - załaduj() – zwiększająca ilość amunicji,<br>
        - strzelaj() – wyświetla komunikat i zmniejsza ilość amunicji o 1
        (w wariancie rozwiniętym należy uniemożliwić wykonanie strzału jeśli nie ma amunicji).<br>
        Utwórz obiekt klasy czołg i przetestuj działanie metod.</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        class Czolg
        {
            private $nazwa , $kolor, $iloscAmunicji;

            public function __construct($nazwa, $kolor, $iloscAmunicji)
            {
                $this->nazwa = $nazwa;
                $this->kolor = $kolor;
                $this->iloscAmunicji = $iloscAmunicji;
            }

            public function info()
            {
                echo "Czolg {$this->nazwa} | Kolor: {$this->kolor} | Amunicja: {$this->iloscAmunicji} <br>";
            }

            public function pomaluj($nowyKolor)
            {
                $this->kolor = $nowyKolor;
                echo "Czolg {$this->nazwa} zostal pomalowany na kolor {$nowyKolor}. <br>";
            }

            public function zaladuj($iloscDodatkowejAmunicji)
            {
                $this->iloscAmunicji += $iloscDodatkowejAmunicji;
                echo "Zaladowano {$iloscDodatkowejAmunicji} sztuk amunicji. Aktualna ilosc amunicji: {$this->iloscAmunicji} <br>";
            }

            public function strzelaj()
            {
                if ($this->iloscAmunicji > 0) {
                    echo "Strzal z czolgu {$this->nazwa}! <br>";
                    $this->iloscAmunicji--;
                } else {
                    echo "Brak amunicji. Nie mozna strzelac. <br>";
                }
            }
        }

        $czolg = new Czolg("Leopard 2PL", "zielony", 10);
        $czolg->info();
        $czolg->pomaluj("niebieski");
        $czolg->zaladuj(5);
        $czolg->strzelaj();
        $czolg->info();
    }
    ?>

</section>

</body>
</html>
