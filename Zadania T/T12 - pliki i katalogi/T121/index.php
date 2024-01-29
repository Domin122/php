<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T121</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T121</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Zapoznaj się z materiałem lekcji. Utwórz skrypt, który:<br><br>

        - Tworzy plik nazwisko_i_imie.txt<br>
        - Tworzy plik o nazwie: doSkasowania.txt.<br>
        - Kasuje plik doSkasowania.txt<br>
        - Tworzy folder o nazwie zgodnej z Twoim nazwiskiem.<br>
        - W tym folderze tworzy plik o nazwie nazwisko_i_imie.txt</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);


        $imie = "Dominik";
        $nazwisko = "Gabrysz";
        $i = "_";

        file_put_contents("$nazwisko$i$imie.txt", "");
        file_put_contents("doSkasowania.txt", "");
        unlink("doSkasowania.txt");
        mkdir($nazwisko);
        file_put_contents("$nazwisko/$nazwisko$i$imie.txt", "");

        print "Stworzono<br>";
        print "Sprawdź pliki";
    }
    ?>

</section>

</body>
</html>
