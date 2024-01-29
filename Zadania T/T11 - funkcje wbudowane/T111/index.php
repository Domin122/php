<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T111</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T111</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Dana jest tablica zawierająca liczby. Napisz funkcję, która po otrzymaniu tej tablicy jako argumentu zwraca sumę dwóch
        najmniejszych liczb zapisanych w tablicy.</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        function sumaDwochNajmnLiczb($tablica) {
            sort($tablica);
            return $tablica[0] + $tablica[1];
        }

        $tab = [8, 2, 5, 3, 7];
        echo "Suma dwóch najmniejszych liczb z podanej tablicy to: " . sumaDwochNajmnLiczb($tab);


    }
    ?>

</section>

</body>
</html>
