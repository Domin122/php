<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sklep</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<header>
    <h1>Ozdoby – sklep</h1>
</header>
<div id="lewy">
    <h2>OZDOBY</h2>
    <a href="galeria.html">Galeria</a><br>
    <a href="zamowienie.php">Zamówienie</a>
</div>
<div id="srodek">
    <p>Dodaj użytkownika</p>
    <form action="zamowienie.php" method="post">
        <label for="imie">Imię:</label>
        <input type="text" id="imie" name="imie"><br>
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" id="nazwisko" name="nazwisko"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sklep";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];


    $sql = "INSERT INTO zamowienia (imie, nazwisko, adres_email) VALUES ('$imie', '$nazwisko', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Nowy rekord został dodany do bazy danych";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
    ?>

</div>
<div id="prawy">
    <img src="animacja.gif" alt="animacja">
</div>
<footer>
    <h3>Autor strony: Dominik Gabrysz 3ip_2</h3>
</footer>
</body>
</html>
