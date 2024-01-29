<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad 20 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];

    $kw = pow($a,2);
    $sz = pow($a,3);

    echo "$a^2 to: $kw<br>";
    echo "$a^3 to: $sz"

    ?>

</section>
</body>
</html>