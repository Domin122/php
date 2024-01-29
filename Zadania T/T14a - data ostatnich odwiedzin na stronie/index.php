<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T14a</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T14a</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>PHP zastosowanie plików cookies<br><br>

        Napisz skrypt tworzący plik cookie wizyta - określający datę ostatnich odwiedzin strony przez użytkownika
        oraz skrypt odczytujący tę informację.</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        $ostatniaWizyta = date("d-m-Y H:i:s");
        $czasWaznosci = time() + (30 * 24 * 60 * 60);

        setcookie("wizyta.txt", $ostatniaWizyta, $czasWaznosci, "/");
        echo "Plik cookie 'wizyta' został utworzony.";

        if(isset($_COOKIE['wizyta'])) {
            $ostatniaWizyta = $_COOKIE['wizyta'];
            echo "Ostatnia wizyta na stronie: $ostatniaWizyta";
        } else {
            echo "Brak pliku cookie 'wizyta'.";
        }
    }
    ?>

</section>

</body>
</html>
