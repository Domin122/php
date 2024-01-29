<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T122</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T122</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Napisz skrypt, który do pliku tekstowego o nazwie narodoweCzytanie.txt zapisze następujący tekst:<br><br>

        W TYM ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE SIĘ 08.09.2018 R.
        W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA ŻEROMSKIEGO „PRZEDWIOŚNIE”.<br>
        WŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ SZKOLE W PRZEDDZIEŃ
        TEGO WYDARZENIA 07.09.2018 R.<br>
        NA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ. CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.<br>
        FORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ DO CZYTANIA LUB SŁUCHANIA.<br><br>

        W zapisanym pliku zachowaj wielkość liter i podział na wiersze. Zwróć uwagę, że każde nowe zdanie
        zaczyna się od nowego wiersza.<br><br>

        *Napisz funkcję, która odczyta dane z pliku narodoweCzytanie.txt i wypisze je na stronie z zachowaniem
        podziału na wiersze.<br></p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        $tekst = "W TYM ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE SIĘ 08.09.2018 R. W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA ŻEROMSKIEGO PRZEDWIOŚNIE.\nWŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ SZKOLE W PRZEDDZIEŃ TEGO WYDARZENIA 07.09.2018 R.\nNA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ. CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.\nFORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ DO CZYTANIA LUB SŁUCHANIA. ";

        file_put_contents("narodoweCzytanie.txt", $tekst);

        if (!$p = fopen('narodoweCzytanie.txt', 'r')) {
            echo "Nie można otworzyć pliku dane.txt";
        } else {
            while (!feof($p)) {
                $w = fgets($p,200);
                echo "$w<br>";
            }
            fclose($p);
        }

    }
    ?>

</section>

</body>
</html>
