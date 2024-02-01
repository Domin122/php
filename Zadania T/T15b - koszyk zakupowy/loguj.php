<?php
session_start();
if (isset($_SESSION['log'])) {
    header('location: strona.php');
    exit();
} elseif (isset($_POST['nazwa']) && isset($_POST['haslo'])) {
    if ($_POST['nazwa'] == 'Dominik' && $_POST['haslo'] =='dg'){$_SESSION['log'] = $_POST['nazwa'];
        header('location: strona.php');
        exit();
    } else {
        echo 'Nieprawidłowe dane logowania<br>';
    }
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>Autoryzacja danych</title>
    <meta charset="UTF-8">
    <style>
        p.fo {
            font-weight: bold;
            font-size: 11pt;
        }
        #log {
            font-weight: bold;
            font-size: 14pt;
        }
    </style>
</head>
<body>
<div>
    <form action="http://localhost/loguj.php" method="post">
        <p id="log">Logowanie</p>
        <p class="fo">Nazwa użytkownika:</p>
        <label>
            <input type="text" name="nazwa" value="" size="25">
        </label><br>
        <p class="fo">Hasło:</p>
        <label>
            <input type="password" name="haslo" value="" size="25">
        </label>
        <input type="submit" value="Zaloguj się">
    </form>
</div>
</body>
</html>
