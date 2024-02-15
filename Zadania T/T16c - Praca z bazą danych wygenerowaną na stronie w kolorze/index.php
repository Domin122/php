<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "3ip_02_pracownicy_w_kolorze";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, first_name, last_name, email, gender, ip_address, color FROM pracownicy";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div style='background-color:" . $row["color"] . "; padding: 10px; margin: 10px;'>";
        echo "ID: " . $row["id"]. "<br>";
        echo "Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        echo "Gender: " . $row["gender"]. "<br>";
        echo "IP Address: " . $row["ip_address"]. "<br>";
        echo "</div>";
    }
} else {
    echo "0 wyników";
}
$conn->close();
?>
