<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad 07 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];

    $k = $a + 273.15;
    $f = 1.8 * $a + 32;
    echo "Celciusz: $a <br>";
    echo "Kelvin: $k  <br>";
    echo "Fahrenheit: $f  <br>";

    ?>
</section>
</body>
</html>
