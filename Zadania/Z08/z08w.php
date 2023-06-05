<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad 08 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
        $a = $_POST['a'];
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

        echo "Wynik: $wynik";
    ?>

</section>
</body>
</html>
