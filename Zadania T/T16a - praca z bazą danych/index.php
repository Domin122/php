<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt</title>
</head>
<body>

<form action="index.php" method="post">
    <button type="submit" name="utworz_tabele">Utwórz tabelę</button>
    <button type="submit" name="zaladuj_dane">Załaduj dane</button>
    <button type="submit" name="wyswietl_dane">Wyświetl dane</button>
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pracownicy";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['utworz_tabele'])) {
    $sql = "CREATE TABLE pracownicy1 (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nazwisko VARCHAR(50) NOT NULL,
        imie VARCHAR(50) NOT NULL,
        stanowisko VARCHAR(50) NOT NULL,
        dzial VARCHAR(50) NOT NULL,
        sekcja VARCHAR(50) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabela pracownicy1 utworzona pomyślnie";
    } else {
        echo "Błąd podczas tworzenia tabeli: " . $conn->error;
    }
}

if (isset($_POST['zaladuj_dane'])) {
    $unicodeFile = 'pracownicy.txt';

    $unicodeContent = file_get_contents($unicodeFile);

    if ($unicodeContent === false) {
        echo "Error reading content from Unicode file.";
    } else {
        $utf8Content = mb_convert_encoding($unicodeContent, 'UTF-8', 'UTF-16LE');

        $lines = explode(PHP_EOL, $utf8Content);

        foreach ($lines as $line) {
            $data = explode("\t", $line);

            if (count($data) === 6) {
                $id = trim($data[0]);
                $nazwisko = trim($data[1]);
                $imie = trim($data[2]);
                $stanowisko = trim($data[3]);
                $dzial = trim($data[4]);
                $sekcja = trim($data[5]);

                if (!empty($id) && !empty($nazwisko) && !empty($imie) && !empty($stanowisko) && !empty($dzial) && !empty($sekcja)) {
                    $sql = "INSERT INTO pracownicy1 (id, nazwisko, imie, stanowisko, dzial, sekcja) 
                VALUES ('$id', '$nazwisko', '$imie', '$stanowisko', '$dzial', '$sekcja')
                ON DUPLICATE KEY UPDATE
                nazwisko = '$nazwisko', imie = '$imie', stanowisko = '$stanowisko', dzial = '$dzial', sekcja = '$sekcja'";

                    if ($conn->query($sql) !== TRUE) {
                        echo "Błąd podczas dodawania danych: " . $conn->error;
                    }
                }
            }
        }

        echo "Dane załadowane pomyślnie";
    }
}



if (isset($_POST['wyswietl_dane'])) {
    $sql = "SELECT * FROM pracownicy1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nazwisko</th>
                    <th>Imię</th>
                    <th>Stanowisko</th>
                    <th>Dział</th>
                    <th>Sekcja</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nazwisko"] . "</td>
                    <td>" . $row["imie"] . "</td>
                    <td>" . $row["stanowisko"] . "</td>
                    <td>" . $row["dzial"] . "</td>
                    <td>" . $row["sekcja"] . "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "Brak danych do wyświetlenia";
    }
}

$conn->close();
?>

</body>
</html>
