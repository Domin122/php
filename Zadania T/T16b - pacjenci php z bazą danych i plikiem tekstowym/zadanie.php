<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "3ip_2_pacjenci";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Nieudało się połączyc: " . $conn->connect_error);
}


$lines = file("dane.txt");
foreach ($lines as $line) {
    $data = explode(",", $line);
    $id = trim($data[0]);
    $imie = trim($data[1]);
    $nazwisko = trim($data[2]);
    $email = trim($data[3]);


    $sql = "INSERT INTO tabela_1 (id, imię, nazwisko, email) VALUES ('$id', '$imie', '$nazwisko', '$email')";
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$sql = "SELECT * FROM tabela_1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border='1'><tr><th>Id</th><th>Imię</th><th>Nazwisko</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["imię"]."</td><td>".$row["nazwisko"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 wyników";
}
$conn->close();
?>
