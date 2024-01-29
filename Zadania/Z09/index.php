<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 09</h1>
    <h2>Autor: Dominik Gabrysz 2ir_2</h2>
</header>
<section>
    <p>Napisz program, który zamienia długość podaną w calach na mm.<br>
        (1cal=25,3995 mm)</p>
    <form action="<?php ?>" method="post">
        <label for="a">Długość w calach:</label>
        <input type="text" id="a" name="a">

        <input type="submit" value="Wyślij">
    </form>
</section>
<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $a = $_POST['a'];


    ini_set('display_errors', 0);


    if (is_numeric($a)){
        $mm = 25.4;
        $mm1 = $mm * $a;
        echo "$a cali to $mm1 mm";
    } else
        echo "Podano nie poprawne dane";

}
?>
</body>
</html>