<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T10_3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T10_3</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
<p>Dana jest tablica tab zawierająca liczby oraz liczba m o określonej wartości.<br><br>

    Napisz funkcję, która<br>

    wyświetli tablicę w formie tabeli HTML,<br>
    przemnoży wszystkie elementy tablicy tab przez czynnik m.<br>
    zamieni wszystkie elementy w tablicy równe 0 na 1.<br><br>
    Zademonstruj działanie funkcji w programie.</p>



    <form method="post" action="">
        <label for="tab">Podaj tablicę (oddzielając liczby przecinkiem):</label>
        <input type="text" name="tab" id="tab">

        <label for="m">Podaj wartość m:</label>
        <input type="text" name="m" id="m">

        <input type="submit" value="Wyślij">
    </form>

</section>
<?php

function wyswietlTabeleHTML($tablica) {
    echo '<table>';
    echo '<tr><th>Indeks</th><th>Wartość</th></tr>';
    foreach ($tablica as $indeks => $wartosc) {
        echo "<tr><td>$indeks</td><td>$wartosc</td></tr>";
    }
    echo '</table>';
}

function przemnozIzamien($tablica, $m) {
    foreach ($tablica as &$wartosc) {
        $wartosc *= $m;
        if ($wartosc == 0) {
            $wartosc = 1;
        }
    }
    unset($wartosc);
    return $tablica;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tabInput = isset($_POST['tab']) ? $_POST['tab'] : '';
    $m = isset($_POST['m']) ? $_POST['m'] : 1;


    $tab = explode(',', $tabInput);
    $tab = array_map('intval', $tab);


    if (!empty($tab)) {
        wyswietlTabeleHTML($tab);
        echo '<br>';
        $tab = przemnozIzamien($tab, $m);
        wyswietlTabeleHTML($tab);
    } else {
        echo 'Podaj poprawne dane.';
    }
}
?>





</body>
</html>


