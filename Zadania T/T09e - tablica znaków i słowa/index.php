<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T09e</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T09e</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Napisz program w którym do jednowymiarowej tablicy znakowej wpisanych jest 10 znaków podanych przez użytkownika, a następnie:<br>
        -  pyta użytkownika o długość losowego słowa oraz ilość słów,<br>
        -  wyświetla wzorcową 10 znakową tablicę,<br>
        -  wyświetla podaną ilość słów składających się z podanej ilości znaków wygenerowanych ze
        znaków zapisanych w 10-elementowej tablicy stworzonej na początku programu.</p>
    <form action="" method="post">
        <label for="znak1">Podaj 1 znak:</label>
        <input type="text" name="znak1">
        <label for="znak2">Podaj 2 znak:</label>
        <input type="text" name="znak2">
        <label for="znak3">Podaj 3 znak:</label>
        <input type="text" name="znak3">
        <br>
        <label for="znak4">Podaj 4 znak:</label>
        <input type="text" name="znak4">
        <label for="znak5">Podaj 5 znak:</label>
        <input type="text" name="znak5">
        <label for="znak6">Podaj 6 znak:</label>
        <input type="text" name="znak6">
        <br>
        <label for="znak7">Podaj 7 znak:</label>
        <input type="text" name="znak7">
        <label for="znak8">Podaj 8 znak:</label>
        <input type="text" name="znak8">
        <label for="znak9">Podaj 9 znak:</label>
        <input type="text" name="znak9">
        <br>
        <label for="znak10">Podaj 10 znak:</label>
        <input type="text" name="znak10">
        <br>
        <label for="dlugosc">Podaj długość losowego słowa:</label>
        <input type="text" name="dlugosc">
        <br>
        <label for="ilosc">Podaj ilość wygenerowanych słów:</label>
        <input type="text" name="ilosc">
        <input type="submit" value="Sprawdź wynik">
    </form>
</section>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ini_set('display_errors', 0);
    $znaki = array();
    for ($i = 1; $i <= 10; $i++) {
        $znaki[] = $_POST["znak$i"];
    }

    function generujRandomoweSlowo($dlugosc, $znaki)
    {
        $dlugosc_znakow = count($znaki);
        $randomowe_slowo = '';
        for ($i = 0; $i < $dlugosc; $i++) {
            $randomowe_slowo .= $znaki[rand(0, $dlugosc_znakow - 1)];
        }
        return $randomowe_slowo;
    }

    $dlugosc = $_POST['dlugosc'];
    $ilosc = $_POST['ilosc'];

    echo "<label>Wzorcowe 10 znaków:</label>";
    echo "<br>";
    foreach ($znaki as $znak) {
        echo "$znak ";
    }
    echo "<br><br>";
    echo "<label>Wygenerowane słowa:</label>";
    echo "<br>";
    for ($j = 0; $j < $ilosc; $j++) {
        echo generujRandomoweSlowo($dlugosc, $znaki) . "<br>";
    }
}
?>
</body>
</html>
