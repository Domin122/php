<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T09f</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T09f</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p><p>Napisz program, który do dwuwymiarowej tablicy o wymiarach 7x7 wpisuje pseudolosowe liczby całkowite z
        zakresu <10,99> i wyświetla tę tablicę z zachowaniem wierszy i kolumn.<br>
        Liczby nie mogą się powtarzać.</p>
    <form action="" method="post">
        <input type="submit" value="Sprawdź wynik">
    </form>
</section>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ini_set('display_errors', 0);


    function generuj($min, $max, $wykluczone)
    {
        $losowaLiczba = mt_rand($min, $max);
        while (in_array($losowaLiczba, $wykluczone)) {
            $losowaLiczba = mt_rand($min, $max);
        }
        return $losowaLiczba;
    }

    $tablica = array_fill(0, 7, array_fill(0, 7, 0));

    for ($i = 0; $i < 7; $i++) {
        $uzyteLiczby = [];
        for ($j = 0; $j < 7; $j++) {
            $tablica[$i][$j] = generuj(10, 99, $uzyteLiczby);
            $uzyteLiczby[] = $tablica[$i][$j];
        }
    }

    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            echo $tablica[$i][$j] . " ";
        }
        echo "<br>";
    }

}
?>
</body>
</html>
