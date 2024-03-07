<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
<section id="miniatury">
    <div id="blok-miniatury">
        <a href="borowik.jpg">
            <img src="borowik-miniaturka.jpg" title="Grzybobranie" alt="Grzybobranie">
        </a>
    </div>
</section>
<div id="blok-tytulowy">
    <header>
        <h1>Idziemy na grzyby!</h1>
    </header>
</div>
<section>
    <div id="blok-lewy">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dane2";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql1 = "SELECT potoczna, nazwa_pliku FROM grzyby";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                echo '<img src="' . $row["nazwa_pliku"] . '" title="' . $row["potoczna"] . '" alt="' . $row["potoczna"] . '">';
            }
        } else {
            echo "Brak wyników dla skryptu nr 1";
        }

        $conn->close();
        ?>
    </div>
    <div id="blok-prawy">
        <h2>Grzyby jadalne</h2>
        <?php
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql2 = "SELECT nazwa, potoczna FROM grzyby";
        $result2 = $conn->query($sql2);

        if ($result2->num_rows > 0) {
            while ($row = $result2->fetch_assoc()) {
                echo '<p>' . $row["nazwa"] . ' (' . $row["potoczna"] . ')</p>';
            }
        } else {
            echo "Brak wyników dla skryptu nr 2";
        }

        $conn->close();
        ?>
        <h2>Polecamy do sosów</h2>
        <?php
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql3 = "SELECT g.nazwa, g.potoczna, r.nazwa AS rodzina 
                 FROM grzyby g 
                 JOIN rodzina r ON g.rodzina_id = r.id 
                 WHERE potrawy_id = 1";
        $result3 = $conn->query($sql3);
        if ($result3->num_rows > 0) {
            echo '<ol>';
            while ($row = $result3->fetch_assoc()) {
                echo '<li>' . $row["nazwa"] . ' (' . $row["potoczna"] . '), rodzina: ' . $row["nazwa"] . '</li>';
            }
            echo '</ol>';
        } else {
            echo "Brak wyników dla skryptu nr 3";
        }

        $conn->close();
        ?>
    </div>
</section>
<footer id="stopka">
    <div id="blok-stopka">
        <p>Autor: <?php echo "Dominik Gabrysz"; ?></p>
    </div>
</footer>
</body>
</html>
