<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 86</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 86</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Napisz program, który dla podanej liczby całkowitej a losuje a liczb w zakresie
        <1, 9>.i wyświetla je na ekranie w postaci: liczba i liczba znaków ‘|’.<br>
        Przykład a=5<br>
        Wylosowane liczby: 5 3 6 3 1<br>
        5|||||<br>
        3|||<br>
        6||||||<br>
        3|||<br>
        1|<br>
    </p>
    <form action="<?php ?>" method="post">
        <label for="a">Podaj a:</label>
        <input type="number" id="a" name="a">

        <input type="submit" value="Sprawdź wynik">
    </form>
</section>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ini_set('display_errors', 0);
    $a = $_POST['a'];


    $random_numbers = [];
    for ($i = 0; $i < $a; $i++) {
        $random_numbers[] = rand(1, 9);
    }

    echo "Wylosowane liczby: " . implode(" ", $random_numbers) . "<br>";

    foreach ($random_numbers as $num) {
        echo $num . str_repeat("|", $num) . "<br>";
    }


}
?>
</body>
</html>

