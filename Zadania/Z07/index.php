<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad07 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 07</h1>
    <h2>Autor: Dominik Gabrysz 2ir_2</h2>
</header>
<section>
    <p>Napisz program, który dla podanej temperatury w stopniach Celsjusza zamienia ją na stopnie Kelwina i Fahrenheita.</p>
    <form action="<?php ?>" method="post">
        <label for="a">Podaj temperaturę w Celciuszu:</label>
        <input type="text" id="a" name="a">
        <input type="submit" value="Wyślij">
    </form>
</section>

<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $a = $_POST['a'];

    ini_set('display_errors',0);

    if (is_numeric($a)){
        $k = $a + 273.15;
        $f = 1.8 * $a + 32;
        echo "Celciusz: $a <br>";
        echo "Kelvin: $k  <br>";
        echo "Fahrenheit: $f  <br>";
    } else
        echo "Podano nie poprawne dane";




}
?>

</body>
</html>
