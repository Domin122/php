<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 62</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 62</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Napisz program, który dla podanej wartości wyświetla ocenę wyrażoną słownie według następującego klucza:<br>
        0 – nieklasyfikowany<br>
        1,2,3 – poprawny<br>
        4,5 – dobry<br>
        6 – wyróżniający.<br>
        Na pozostałe wartości reaguje wyświetleniem komunikatu: „niewłaściwa liczba”.<br>
    </p>
    <form action="<?php ?>" method="post">
        <label for="a">Podaj liczbę całkowitą:</label>
        <input type="number" id="a" name="a">

        <input type="submit" value="Sprawdź wynik">
    </form>
</section>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ini_set('display_errors', 0);
    $a = $_POST['a'];


        switch ($a) {
            case 0:
                echo "nieklasyfikowany";
                break;
            case 1:
            case 2:
            case 3:
                echo "poprawny";
                break;
            case 4:
            case 5:
                echo "dobry";
                break;
            case 6:
                echo "wyróżniający";
                break;
            default:
                echo "niewłaściwa liczba";
        }

}
?>
</body>
</html>

