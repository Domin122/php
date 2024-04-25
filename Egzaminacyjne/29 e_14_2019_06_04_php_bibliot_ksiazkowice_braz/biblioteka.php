<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
</header>
<div id="lewy">
    <h2>Dodaj czytelnika</h2>
    <form action="<?php ?>" method="post">
        <label> Imie:
            <input type="text" name="imie">
        </label>
        <br>
        <label> Nazwisko:
            <input type="text" name="nazwisko">
        </label>
        <br>
        <label> Rok urodzenia:
            <input type="number" name="rok_urodzenia">
        </label>
        <br>
        <input type="submit" value="Dodaj">
    </form>
    <?php
    //skrypt 1
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biblioteka";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $rok_urodzenia = $_POST["rok_urodzenia"];


        echo "Czytelnik: $imie $nazwisko został dodany do bazy danych";

        $kod_czytelnika = strtolower(substr($imie,0,2). substr($rok_urodzenia ,-2) . substr($nazwisko,0,2));

        $sql = "INSERT INTO czytelnicy (imie,nazwisko,kod) VALUES('$imie','$nazwisko','$kod_czytelnika');";

        $conn->query($sql);

        $conn->close();
    }
    ?>
</div>
<div id="srodek">
    <img src="materialy4/biblioteka.png" alt="biblioteka">
    <h4>ul. Czytelnicza 25 <br> 12-120 Książkowice <br>tel.: 123123123 <br> e-mail: <a href="mailto:biuro@bib.pl">biuro@bib.pl</a></h4>
</div>
<div id="prawy">
    <h3>Nasi czytelnicy:</h3>
    <?php
    //skrypt 2
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biblioteka";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql1 = "SELECT imie, nazwisko FROM czytelnicy;";
    $result = $conn->query($sql1);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while($row = $result->fetch_assoc()) {
            echo "<li>" . $row["imie"]. " " . $row["nazwisko"]. "</li>";
        }
        echo "</ul>";
    } else {
        echo "0 wyników";
    }
    $conn->close();
    ?>
</div>
<footer>
    <h3>Autor strony: Dominik Gabrysz 3ip_2</h3>
</footer>
</body>
</html>