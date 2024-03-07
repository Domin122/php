<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "baza";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$data_rez = $_POST['data'];
$liczba_osob = $_POST['ile_osob'];
$telefon = $_POST['telefon'];


$sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data_rez', $liczba_osob, '$telefon')";

if ($conn->query($sql) === TRUE) {
    echo "Dodano rezerwację do bazy";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
