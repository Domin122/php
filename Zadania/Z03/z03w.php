<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad 03 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $mn = $a * $b * $c * $d;
    $srednia = pow($mn,1/4);
    $srednia_zaokr = round($srednia);
    echo "a: $a <br>";
    echo "b: $b <br>";
    echo "c: $c <br>";
    echo "d: $d <br>";
    echo "Średnia: $srednia <br>";
    echo "Średnia zaokrąglona: $srednia_zaokr <br>";


    ?>
</section>
</body>
</html>


