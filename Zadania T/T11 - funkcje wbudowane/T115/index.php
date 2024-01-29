<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T115</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T115</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Napisz funkcję, która na podstawie danych pobranych z tablicy zwracanej przez funkcję getdate() wyświetli bieżącą datę.
        W dacie miesiąc ma być wyświetlony w postaci tekstu w języku polskim.</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        function wyswietlBiezacaDate() {
            $data = getdate();
            $miesiac = [
                1 => "styczeń", 2 => "luty", 3 => "marzec", 4 => "kwiecień",
                5 => "maj", 6 => "czerwiec", 7 => "lipiec", 8 => "sierpień",
                9 => "wrzesień", 10 => "październik", 11 => "listopad", 12 => "grudzień"
            ];

            echo $data['mday'] . " " . $miesiac[$data['mon']] . " " . $data['year'];
        }

        wyswietlBiezacaDate();

    }
    ?>

</section>
</body>
</html>
