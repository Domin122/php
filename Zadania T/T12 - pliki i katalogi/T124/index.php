<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T124</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T124</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Plik napisy.txt zawiera 1000 liczb binarnych zapisanych w oddzielnych wierszach.<br>
        Napisz skrypt, który odczyta te liczby i wypisze je na ekranie w następującej postaci:<br><br>

        Nr_liczby – liczba_binarna – liczba_dziesiętna </p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        $p = fopen("napisy.txt", "r");

        if ($p) {
            $licznik = 1;

            while (($l = fgets($p)) !== false) {
                $binarny = trim($l);

                $dziesietny = bindec($binarny);

                echo "Nr_liczby: $licznik – liczba_binarna: $binarny – liczba_dziesiętna: $dziesietny<br>";

                $licznik++;
            }
            fclose($p);
        } else {
            echo "Błąd otwarcia pliku.";
        }


    }
    ?>

</section>

</body>
</html>
