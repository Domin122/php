<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T09c</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T09c</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>

</header>
<section>
    <p>Napisz program, który do dwuwymiarowej tablicy o wymiarach 7 x 7 wpisze wygenerowane losowo znaki
        w zakresie <'a','e'>, wyświetli tę tablicę, a następnie:<br>
        - wypisze ile razy w tablicy wystąpiła litera 'a',<br>
        - wyświetli te numery wierszy, w których najczęściej wystąpiła litera 'b'.</p>
    <form action="<?php ?>" method="post">
        <input type="submit" value="Wyślij">
    </form>
</section>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ini_set('display_errors',0);

    $tablica = array();

    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            $losowyZnak = chr(mt_rand(ord('a'), ord('e')));
            $tablica[$i][$j] = $losowyZnak;
        }
    }

    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            echo $tablica[$i][$j] . " ";
        }
        echo "<br>";
    }

    $licznikA = 0;
    foreach ($tablica as $wiersz) {
        $licznikA += array_count_values($wiersz)['a'];
    }

    echo "Liczba wystąpień litery 'a': " . $licznikA . "<br>";

    $licznikB = array();
    foreach ($tablica as $key => $wiersz) {
        $licznikB[$key] = array_count_values($wiersz)['b'];
    }

    $maxCzestosc = max($licznikB);
    echo "Największa liczba wystąpień litery 'b' znajduje się w wierszach: ";
    foreach ($licznikB as $key => $value) {
        if ($value === $maxCzestosc) {
            echo ($key + 1) . " ";
        }
    }


}
?>

</body>
</html>
