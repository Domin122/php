<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T07</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>

</header>
<section>
    <p>Czytanie danych z formularza i wykonywanie operacji matematycznych</p>
    <form action="<?php ?>" method="post">
        <label for="imie">Podaj imię:</label>
        <input type="text" id="imie" name="imie">
        <br>
        <label for="a">Podaj a:</label>
        <input type="text" id="a" name="a">
        <label for="b">Podaj b:</label>
        <input type="text" id="b" name="b">
        <br>
        <label for="c">Podaj c:</label>
        <input type="text" id="c" name="c">
        <label for="d">Podaj d:</label>
        <input type="text" id="d" name="d">
        <input type="submit" value="Wyślij">
    </form>
</section>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imie = $_POST['imie'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];

    echo "<h1> Witaj $imie na mojej stronie!!!</h1><br>";

    $liczby = [$a, $b, $c, $d];
    $liczbyPoprawne = [];

    foreach ($liczby as $liczba) {
        preg_match_all('/-?\d+(\.\d+)?/', $liczba, $matches);
        if (!empty($matches[0])) {
            $liczbyPoprawne[] = (float)$matches[0][0];
        }
    }

    echo "<h2>Podane dane:</h2>";
    var_dump($liczby);

    if (!empty($liczbyPoprawne)) {
        $suma = array_sum($liczbyPoprawne);
        $srednia = $suma / count($liczbyPoprawne);
        echo "<h2>Suma: $suma</h2>";
        echo "<h2>Średnia: $srednia</h2>";
    } else {
        echo "<h2>Nie podano poprawnych danych do obliczeń.</h2>";
    }
}
?>

</body>
</html>
