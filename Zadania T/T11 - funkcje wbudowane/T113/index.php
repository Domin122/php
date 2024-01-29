<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T113</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T113</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Dane są dwie tablice. Napisz funkcję, która otrzymuje obie tablice w argumencie i zwraca posortowaną tablicę
        zawierającą wszystkie elementy z pierwszej i drugiej tablicy.</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        function sortuj($tablica1, $tablica2) {
            $wynikowaTablica = array_merge($tablica1, $tablica2);
            sort($wynikowaTablica);
            print_r($wynikowaTablica);
        }

        $tablicaA = [3, 1, 4];
        $tablicaB = [2, 7, 5];
        echo "Tablice przed sortowaniem <br>";
        print_r($tablicaA);
        echo "<br>";
        print_r($tablicaB);
        echo "<br>";
        echo "Tablica po sortowaniu <br>";
        sortuj($tablicaA, $tablicaB);

    }
    ?>

</section>


</body>
</html>
