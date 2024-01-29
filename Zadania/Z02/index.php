<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 02 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 02</h1>
    <h2>Autor: Dominik Gabrysz 2ir_2</h2>
</header>
<section>
    <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią arytmetyczną.
        Wynik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>
    <form action="<?php ?>" method="post">
        <label for="a">Podaj a:</label>
        <input type="text" id="a" name="a">
        <label for="b">Podaj b:</label>
        <input type="text" id="b" name="b">
        <label for="c">Podaj c:</label>
        <input type="text" id="c" name="c">
        <label for="d">Podaj d:</label>
        <input type="text" id="d" name="d">
        <input type="submit" value="Wyślij">
    </form>
</section>

<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];

    $srednia = ($a + $b + $c + $d) / 4;
    $srednia_zaokr = round($srednia);
    echo "a: $a <br>";
    echo "b: $b <br>";
    echo "c: $c <br>";
    echo "d: $d <br>";
    echo "Średnia: $srednia  <br>";
    echo "Średnia zaokrąglona: $srednia_zaokr";
}
?>
</body>
</html>
