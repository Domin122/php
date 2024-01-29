<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad 12 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $x = $_POST['a'];
    $m0 = 0 * $x;
    $m1 = 1 * $x;
    $m2 = 2 * $x;
    $m3 = 3 * $x;
    $m4 = 4 * $x;
    $m5 = 5 * $x;
    $m6 = 6 * $x;
    $m7 = 7 * $x;
    $m8 = 8 * $x;
    $m9 = 9 * $x;
    $m10 = 10 * $x;
    echo "x = $x<br>";
    echo "0 x $x = $m0<br>";
    echo "1 x $x = $m1<br>";
    echo "2 x $x = $m2<br>";
    echo "3 x $x = $m3<br>";
    echo "4 x $x = $m4<br>";
    echo "5 x $x = $m5<br>";
    echo "6 x $x = $m6<br>";
    echo "7 x $x = $m7<br>";
    echo "8 x $x = $m8<br>";
    echo "9 x $x = $m9<br>";
    echo "10 x $x = $m10<br>";
    ?>

</section>
</body>
</html>