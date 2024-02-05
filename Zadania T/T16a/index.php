<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$querySelectData = "SELECT * FROM arkusz1";
$result = $conn->query($querySelectData);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>Stanowisko</th><th>Pensja</th><th>Data Zatrudnienia</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["imie"]."</td><td>".$row["nazwisko"]."</td><td>".$row["stanowisko"]."</td><td>".$row["pensja"]."</td><td>".$row["data_zatrudnienia"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak danych do wyświetlenia.";
}

mysqli_close($conn);
?>
