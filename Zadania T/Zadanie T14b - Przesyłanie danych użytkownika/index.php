<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T14b</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T14b</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>PHP Przesyłanie danych użytkownika<br><br>

        (Podstawowa wersja rozwiązania)<br>
        Utwórz skrypt, który dane użytkownika przesyłane za pomocą formularza będzie przekazywał do utworzonego
        pliku cookie.<br>
        Formularz powinien zawierać imię i nazwisko użytkownika.<br><br>

        (Wersja rozszerzona)<br><br>

        Dodatkowo przekazana jest również data urodzin użytkownika. <br>
        Skrypt powinien wyświetlać informację, za ile dni użytkownik będzie obchodził urodziny.</p>
<form method="post" action="">
    Imię: <input type="text" name="imie" value=""><br>
    Nazwisko: <input type="text" name="nazwisko" value=""><br>
    Data urodzenia: <input type="date" name="data_urodzenia" value=""><br>
    <input type="submit" value="Prześlij">
</form>
<section/>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $data_urodzenia = strtotime($_POST["data_urodzenia"]);

    setcookie("imie", $imie, time() + (86400 * 30), "/");
    setcookie("nazwisko", $nazwisko, time() + (86400 * 30), "/");
    setcookie("data_urodzenia", $data_urodzenia, time() + (86400 * 30), "/");
}

function dniDoUrodzin($data_urodzenia) {
    $dzisiaj = time();
    $urodziny = strtotime(date('Y-m-d', $data_urodzenia));

    if ($urodziny < $dzisiaj) {
        $urodziny = strtotime(date('Y-m-d', strtotime('+1 year', $data_urodzenia)));
    }

    return floor(($urodziny - $dzisiaj) / (60 * 60 * 24));
}

$dni_do_urodzin = isset($_COOKIE['data_urodzenia']) ? dniDoUrodzin($_COOKIE['data_urodzenia']) : null;

if ($dni_do_urodzin !== null) {
    echo "Za $dni_do_urodzin dni obchodzisz urodziny!";
}
?>
</body>
</html>

