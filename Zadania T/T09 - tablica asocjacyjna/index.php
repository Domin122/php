<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T09</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>

</header>
<section>
    <p>Czytanie danych z formularza i wykonywanie operacji matematycznych</p>
    <form action="<?php ?>" method="post">
        <input type="submit" value="Wyślij">
    </form>
</section>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $cena = array(
        'Polska' => 'Warszawa',
        'Niemcy' => 'Berlin',
        'Hiszpania' => 'Madryt',
        'Wielka Brytania' => 'Londyn',
        'Francja' => 'Paryż',

    );

    foreach ($cena as $klucz => $wartosc)
        echo $klucz . " -> " . $wartosc . "<br>";

    echo "<br>";
    var_dump($cena);

}
?>

</body>
</html>
