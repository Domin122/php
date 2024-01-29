<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4_1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 4_1</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Podaj, ile jest w pliku liczby.txt takich liczb, których cyfry pierwsza i ostatnia są takie same.<br>
        Zapisz tę z nich, która występuje w pliku liczby.txt jako pierwsza.<br>
        W pliku z danymi jest co najmniej jedna taka liczba.<br>
        Odpowiedź dla danych z pliku przyklad.txt: 26 626<br>
        (26 takich liczb, które mają pierwszą i ostatnią cyfrę taką samą; pierwszą z nich w pliku
        przykładowym jest 626) </p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        $linie = file("liczby.txt", FILE_IGNORE_NEW_LINES);

        $pasujaceLiczby = [];

        foreach ($linie as $linia) {
            $liczby = explode(" ", $linia);

            foreach ($liczby as $liczba) {
                if ($liczba[0] == substr($liczba, -1)) {
                    $pasujaceLiczby[] = $liczba;
                }
            }
        }

        if (!empty($pasujaceLiczby)) {
            $liczbaPasujaca = $pasujaceLiczby[0];
            $wynik = count($pasujaceLiczby) . " $liczbaPasujaca\n";
            file_put_contents("wyniki4_1.txt", $wynik);
        } else {
            file_put_contents("wyniki4.txt", "0\nBrak pasującej liczby w pliku liczby.txt\n");
        }

        echo $wynik;
    }
    ?>


</section>

</body>
</html>
