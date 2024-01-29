<!DOCTYPE html>
<html>
<head>
    <title>Zadanie T105</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T105</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<table>
    <tr>
        <th>Imię i nazwisko:</th>
        <th>Klasa/grupa:</th>
        <th>Data:</th>
    </tr>
    <tr>
        <td>Dominik Gabrysz</td>
        <td>3ip_2</td>
        <td>03.11.2023</td>
    </tr>
</table>
<h2>Zadanie T105</h2>
<p>Napisz funkcję, która dla dwóch liczb całkowitych wyświetla ich wspólny dzielnik (algorytm Euklidesa).</p>

<form method="post">
    <label>Podaj liczbę 1:</label>
    <input type="text" name="liczba1">
    <label>Podaj liczbę 2:</label>
    <input type="text" name="liczba2">
    <input type="submit" value="Oblicz">
</form>

<?php
if (isset($_POST['liczba1']) && isset($_POST['liczba2'])) {
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];

    function algorytmEuklidesa($a, $b) {
        while ($b != 0) {
            $t = $b;
            $b = $a % $b;
            $a = $t;
        }
        return $a;
    }

    $wynik = algorytmEuklidesa($liczba1, $liczba2);
    echo "Wspólny dzielnik liczb $liczba1 i $liczba2 to: $wynik";
}
?>
</body>
</html>
