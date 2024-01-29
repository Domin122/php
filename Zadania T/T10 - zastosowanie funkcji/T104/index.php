<!DOCTYPE html>
<html>
<head>
    <title>Zadanie T104</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T104</h1>
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
<h2>Zadanie T104</h2>
<p>Napisz funkcję, która będzie przyjmowała dwa argumenty liczbowe i będzie wypisywała mniejszą z nich w kolorze zielonym, a większą w czerwonym. W przypadku podania liczb jednakowych obie należy wyświetlić w kolorze niebieskim.</p>

<form method="post">
    <label>Podaj liczbę 1:</label>
    <input type="text" name="number1">
    <label>Podaj liczbę 2:</label>
    <input type="text" name="number2">
    <input type="submit" value="Porównaj">
</form>

<?php
if (isset($_POST['number1']) && isset($_POST['number2'])) {
    $liczba1 = $_POST['number1'];
    $liczba2 = $_POST['number2'];

    function porownajLiczby($a, $b) {
        if ($a < $b) {
            echo "<span class='zielony'>$a jest Mniejsze<br></span>";
            echo "<span class='czerwony'>$b jest Większe<br></span>";
        } elseif ($a > $b) {
            echo "<span class='czerwony'>$a jest Większe<br></span>";
            echo "<span class='zielony'>$b jest Mniejsze<br></span>";
        } else {
            echo "<span class='niebieski'>$a i</span>";
            echo "<span class='niebieski'> $b są równe<br></span>";
        }
    }

    porownajLiczby($liczba1, $liczba2);
}
?>
</body>
</html>
