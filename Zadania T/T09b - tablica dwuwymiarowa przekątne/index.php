<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T09b</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T09b</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>

</header>
<section>
    <p>Napisz program, który do dwuwymiarowej tablicy o wymiarach 3 x 3 wpisuje liczby pseudolosowe z zakresu <0,9>,
        wyświetla tą tablicę, a następnie oblicza sumę liczb rozmieszczonych wzdłuż przekątnych:<br>
        Przekątna LG_PD - lewy górny i prawy dolny,<br>
        Przekątna LD_PG - lewy dolny i prawy górny.<br>
        Program wyświetla te sumy i odpowiada na pytanie, która z nich jest większa, lub czy są równe.</p>
    <form action="<?php ?>" method="post">
        <input type="submit" value="Wyślij">
    </form>
</section>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tablica = array(
        array(0, 0, 0),
        array(0, 0, 0),
        array(0, 0, 0)
    );

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $tablica[$i][$j] = mt_rand(0, 9);
        }
    }

    echo "Tablica 3x3 z liczbami pseudolosowymi:<br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $tablica[$i][$j] . " ";
        }
        echo "<br>";
    }

    $suma1 = 0;
    $suma2 = 0;
    for ($i = 0; $i < 3; $i++) {
        $suma1 += $tablica[$i][$i];
        $suma2 += $tablica[$i][2 - $i];
    }

    echo "Suma dla przekątnej LG_PD: " . $suma1 . "<br>";
    echo "Suma dla przekątnej LD_PG: " . $suma2 . "<br>";

    if ($suma1 > $suma2) {
        echo "Suma dla przekątnej LG_PD jest większa.<br>";
    } elseif ($suma1 < $suma2) {
        echo "Suma dla przekątnej LD_PG jest większa.<br>";
    } else {
        echo "Obie sumy są równe.<br>";
    }
}
?>

</body>
</html>
