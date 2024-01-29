<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad 05 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];


    echo "a:" . floor($a) . "<br>";
    echo "b:" . floor($b) . "<br>";
    $suma = floor($a)+floor($b);
    echo "Suma: $suma <br>";
    $roznica = floor($a)-floor($b);
    echo "Roznica: $roznica <br>";
    $iloczyn = floor($a)*floor($b);
    echo "Iloczyn: $iloczyn <br>";
    if ($b == 0){
        echo "Nie dziele przez zero";
    }else{
        $iloraz = floor($a)/floor($b);
        echo "Iloraz: $iloraz <br>";
        $reszta = floor($a)%floor($b);
        echo "Reszta: $reszta <br>";
    }
    ?>
</section>
</body>
</html>

