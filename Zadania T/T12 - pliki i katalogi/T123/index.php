<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T123</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T123</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>W pliku imiona.txt zapisano 7 imion, każde imię w jednym wierszu (plik utwórz w edytorze tekstowym np. notatnik).<br>
        Napisz skrypt, który odczyta imiona z pliku i wyświetli je na stronie w kolejności zapisania, oraz w kolejności odwrotnej.</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        $tekst = "Dominik
Mateusz
Gracjan
Oliwier
Jakub
Maciej
Dawid";


        file_put_contents("imiona.txt", $tekst);

        echo "Imiona w kolejności zapisania:<br>";
        if (!$p = fopen('imiona.txt', 'r')) {
            echo "Nie można otworzyć pliku imiona.txt";
        } else {
            while (!feof($p)) {
                $w = fgets($p, 200);
                echo "$w<br>";
            }
            fclose($p);
        }

        echo "<br>";
        echo "Imiona w odwróconej kolejnośći:<br>";
        if (!$p = fopen('imiona.txt', 'r')) {
            echo "Nie można otworzyć pliku imiona.txt";
        } else {
            $imiona = array();

            while (!feof($p)) {
                $w = fgets($p, 200);
                $imiona[] = trim($w);
            }
            fclose($p);

            $odwrocone = array_reverse($imiona);

            foreach ($odwrocone as $imie) {
                echo "$imie<br>";
            }
        }

    }
    ?>

</section>

</body>
</html>

