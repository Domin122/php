<!DOCTYPE html>
<html>
<head>
    <title>Zadanie T103</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T103</h1>
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
<h2>Zadanie T103</h2>
<p>Napisz funkcję, która dla podanej liczby całkowitej w zakresie od 1 do 12 zwraca nazwę miesiąca w języku polskim.</p>

<form method="post">
    <label>Podaj numer miesiąca (od 1 do 12):</label>
    <input type="text" name="month">
    <input type="submit" value="Sprawdź">
</form>

<?php
if (isset($_POST['month'])) {
    $month = $_POST['month'];

    function nazwaMiesiaca($numer) {
        $miesiace = array(1 => 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');
        if ($numer >= 1 && $numer <= 12) {
            return $miesiace[$numer];
        } else {
            return "Błąd: Podano nieprawidłowy numer miesiąca.";
        }
    }

    $wynik = nazwaMiesiaca($month);
    echo "Miesiąc: $wynik";
}
?>
</body>
</html>
