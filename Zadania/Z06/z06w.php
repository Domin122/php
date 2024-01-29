<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad 06 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $p =  ($a + $b + $c)/2;
    $s = $p*($p-$a)*($p-$b)*($p-$c);
    $s_w = sqrt($s);
    echo "Pole trójkąta o bokach: <br>";
    echo "a: $a <br>";
    echo "b: $b <br>";
    echo "c: $c <br>";
    echo "wynosi : $s_w"
    ?>
</section>
</body>
</html>

