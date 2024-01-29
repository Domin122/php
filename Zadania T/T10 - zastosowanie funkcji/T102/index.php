<!DOCTYPE html>
<html>
<head>
    <title>Zadanie T102</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T102</h1>
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
<h2>Zadanie T102</h2>
<p>Napisz funkcję, której wynikiem będzie podniesienie wartości przekazanego jej poprzez referencję argumentu do potęgi przekazanej również jako argument.</p>

<form method="post">
    <label>Podaj x:</label>
    <input type="text" name="x">
    <label>Podaj y:</label>
    <input type="text" name="y">
    <input type="submit" value="Oblicz">
</form>

<?php
if (isset($_POST['x']) && isset($_POST['y'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];

    function potega(&$podstawa, $wykladnik) {
        $podstawa = pow($podstawa, $wykladnik);
        return $podstawa;
    }
    echo "x= $x <br>";
    potega($x, $y);
    echo "y= $y <br>";
    echo "xy= $x <br>";
}
?>
</body>
</html>
