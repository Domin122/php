<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T09d</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T09d</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>

</header>
<section>
    <p>Napisz program, który tworzy dwuwymiarową tablicę o wymiarach 4 x 4 i wypełnia ją liczbami pseudolosowymi
        z zakresu <0,1>, wyświetla tą tablicę z zachowaniem wierszy i kolumn, a następnie: <br>

        - wyświetla te wiersze tablicy w których suma liczb jest największa,<br>
        - tworzy "odwróconą" tablicę (ostatni wiersz pierwszej tablicy jest pierwszą kolumną drugiej i tak dalej -
        tablica wygląda jak obrócona w prawo o 90 stopni), a następnie wyświetla ją na ekranie.<br><br>

        przykład odwrócenia<br><br>

        0001<br>
        0010<br>
        0100<br>
        0100<br><br>

        tablica po odwróceniu:<br><br>

        0000<br>
        1100<br>
        0010<br>
        0001<br>  </p>
    <form action="<?php ?>" method="post">
        <input type="submit" value="Wyślij">
    </form>
</section>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ini_set('display_errors', 0);

    function losowaLiczba()
    {
        return rand(0, 1);
    }

    function nazwaWiersza($numerWiersza)
    {
        $nazwy = array("- Wiersz pierwszy", "- Wiersz drugi", "- Wiersz trzeci", "- Wiersz czwarty");
        return $nazwy[$numerWiersza];
    }

    $tablica = array();
    for ($i = 0; $i < 4; $i++) {
        $tablica[$i] = array();
        for ($j = 0; $j < 4; $j++) {
            $tablica[$i][$j] = losowaLiczba();
        }
    }

    echo "Zwykła tablica:<br>";
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            echo $tablica[$i][$j] . " ";
        }
        echo "<br>";
    }

    echo "<br>";

    $maxSuma = 0;
    $indeksWierszy = array();
    for ($i = 0; $i < 4; $i++) {
        $suma = array_sum($tablica[$i]);
        if ($suma > $maxSuma) {
            $maxSuma = $suma;
            $indeksWierszy = array($i);
        } elseif ($suma === $maxSuma) {
            $indeksWierszy[] = $i;
        }
    }

    echo "Wiersze z największą sumą liczb:<br> ";
    foreach ($indeksWierszy as $indeks) {
        echo nazwaWiersza($indeks) . " ";
        echo implode(" ", $tablica[$indeks]) . "<br>";
    }

    echo "<br>";

    $odwroconaTablica = array();
    for ($i = 0; $i < 4; $i++) {
        $odwroconaTablica[$i] = array();
        for ($j = 0; $j < 4; $j++) {
            $odwroconaTablica[$i][$j] = $tablica[3 - $j][$i];
        }
    }


    echo "Odwrócona tablica(90 stopni):<br>";
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            echo $odwroconaTablica[$i][$j] . " ";
        }
        echo "<br>";
    }

    echo "<br>";

}
?>

</body>
</html>




