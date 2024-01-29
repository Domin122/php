<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T112</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T112</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Dana jest tablica zawierająca imiona. Napisz funkcję, która wypisuje ilość imion żeńskich zapisanych w tablicy.<br>
        Dla uproszczenia zakładamy, że imiona żeńskie to te, które kończą się na literę "a". Proszę uwzględnić imiona Kuba i Barnaba.</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        function iloscImion($imiona) {
            $ilosc = 0;
            foreach ($imiona as $imie) {
                if (substr($imie, -1) === 'a' && !in_array($imie, ['Kuba', 'Barnaba'])) {
                    $ilosc++;
                }
            }
            echo $ilosc;
        }

        $imiona = ["Anna", "Kuba", "Janina", "Barnaba", "Maria"];
        echo "W podanej tablicy są ";
        iloscImion($imiona);
        echo " imiona żeńskie" ;

    }
    ?>

</section>


</body>
</html>
