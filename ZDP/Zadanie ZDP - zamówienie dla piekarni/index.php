<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie ZDP - zamówienie dla piekarni</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie ZDP - zamówienie dla piekarni</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <h1>Zamówienie online</h1>
    <form action="<?php ?>" method="post">
        Ile masz lat
        <input type="text" id="wiek" name="wiek">
        <br/><br>
        Ile Bułek (0.49 PLN/szt):
        <input type="text" name="bulek" />
        <br/><br/>
        Ile Eklerek (5 PLN/szt):
        <input type="text" name="eklerek" />
        <br/><br/>
        Ile Pączków (0.99 PLN/szt):
        <input type="text" name="paczkow" />
        <br/><br/>
        Wybierz dostawę:
        <select name="dostawa">
            <option value="odbior_osobisty">Odbiór osobisty (Darmowa)</option>
            <option value="kurier">Dostawa kurierem (10 PLN)</option>
            <option value="paczkomat">Dostawa do paczkomatu (8 PLN)</option>
        </select>
        <br/><br/>
        <input type="submit" value="Wyślij zamówienie" />
    </form>
</section>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dostawa = $_POST['dostawa'];
    $wiek = $_POST['wiek'];
    $paczkow = $_POST['paczkow'];
    $eklerek = $_POST['eklerek'];
    $bulek = $_POST['bulek'];

    $suma = 0.99 * $paczkow + 0.49 * $bulek + 5 * $eklerek;

    if ($dostawa === 'kurier') {
        $suma += 10;
    } else if ($dostawa === 'paczkomat') {
        $suma += 8;
    }

    if ($wiek > 18) {
        echo<<<END
	<h2>Podsumowanie zamówienia</h2>
	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<td><img width="100" height="100" src="bułka.jpeg">Bułka (0.49PLN/szt)</td> <td>{$bulek}</td>
	</tr>
	<tr>
		<td><img width="100" height="100" src="Eklerka.jpg">Eklerka (5PLN/szt)</td> <td>{$eklerek}</td>
	</tr>
	<tr>
		<td><img width="100" height="100" src="paczek.jpg">Pączek (0.99PLN/szt)</td> <td>{$paczkow}</td>
	</tr>
	<tr>
		<td>Dostawa</td> <td>{$dostawa}</td>
	</tr>
	<tr>
		<td>SUMA</td> <td>{$suma} PLN</td>
	</tr>	
	</table>
	

END;
    } else{
        echo "Masz poniżej 18 lat";
    }

}
?>

</body>
</html>

