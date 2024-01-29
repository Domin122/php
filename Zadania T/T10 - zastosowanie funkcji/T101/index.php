<!DOCTYPE html>
<html>
<head>
    <title>Zadanie T101</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T101</h1>
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
<h2>Zadanie T101</h2>
<p>Napisz funkcję, która dla podanej liczby zwraca jej wartość bezwzględną.</p>

<form method="post">
    <label>Podaj liczbę:</label>
    <input type="text" name="number">
    <input type="submit" value="Oblicz">
</form>

<?php
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    function wartoscBezwzgledna($num) {

        $wynik = ($num < 0) ? -$num : $num;
        return $wynik;

        // $wynik = $num < 0 ? -$num : $num;
        // return $wynik;
    }

    $bezwzgledna = wartoscBezwzgledna($number);
    echo "Wartość bezwzględna liczby $number to $bezwzgledna.";
}
?>
</body>
</html>
