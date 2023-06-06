<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad 22 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];



    $s = pow($a,2) + pow($b,2);
    $p = sqrt($s);

    echo "A = $a<br>";
    echo "B = $b<br>";
    echo "Wynik: C = $p"

    ?>

</section>
</body>
</html>