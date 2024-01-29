<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 42</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 42</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Dane są dwie różne liczby całkowite.<br>
        Napisz program który:<br>
        sprawdza czy podane dwie liczby całkowite są parzyste i tylko w tym przypadku wypisuje większą z nich.
        W przypadku podania liczby nieparzystej wypisuje która to liczba lub liczby.<br>
    </p>
    <form action="<?php ?>" method="post">
        <label for="a">Podaj a:</label>
        <input type="number" id="a" name="a">
        <label for="b">Podaj b:</label>
        <input type="number" id="b" name="b">
        <input type="submit" value="Sprawdź wynik">
    </form>
</section>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ini_set('display_errors', 0);
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo "a = $a <br>";
    echo "b = $b <br>";


        if ($a % 2 == 0 && $b % 2 == 0) {
            if ($a > $b) {
                echo "Większa jest liczba a = $a";
            } else {
                echo "Większa jest liczba b = $b";
            }
        }

        if ($a % 2 != 0) {
            echo "Liczba a = $a jest nieparzysta<br>";
        }

        if ($b % 2 != 0) {
            echo "Liczba b = $b jest nieparzysta<br>";
        }


}
?>
</body>
</html>
