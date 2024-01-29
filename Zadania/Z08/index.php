<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 08</h1>
    <h2>Autor: Dominik Gabrysz 2ir_2</h2>
</header>
<section>
    <p>Napisz program, który przelicza czas podany w sekundach na zapis uwzględniający godziny, minuty oraz sekundy.
        Program zadziała dla s większego od 0. Przykład: dla s = 4000 wynikiem powinien być ciąg znaków : 1g6m40s</p>

    <form action="<?php ?>" method="post">
        <label for="a">Podaj ilość sekund s =</label>
        <input type="text" id="a" name="a">

        <input type="submit" value="Wyślij">
    </form>
</section>

<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $a = $_POST['a'];


    ini_set('display_errors',0);

    if (is_numeric($a)){
        $g = floor($a / 3600);
        $m = floor(($a % 3600) / 60);
        $a= $a % 60;

        $wynik = "";
        if ($g > 0) {
            $wynik .= $g . "g";
        }
        if ($m > 0) {
            $wynik .= $m . "m";
        }
        if ($a > 0 || empty($wynik)) {
            $wynik .= $a . "s";
        }

        echo "Wynik: $wynik <br>";
        
    } else
        echo "Podano nie poprawne dane";



}
?>
</body>
</html>