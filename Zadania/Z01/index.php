<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 01</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Program wczytuje imię i wyświetla powitanie z tym imieniem</p>
    <form action="<?php ?>" method="post">
        <label for="imie">Podaj imię:</label>
        <input type="text" id="imie" name="imie">
        <input type="submit" value="Wyślij">
    </form>
</section>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $imie = $_POST['imie'];
    echo "<h1>Witaj $imie!!<br>Miło cię wydzieć na naszej stronie";
}
?>

</body>
</html>