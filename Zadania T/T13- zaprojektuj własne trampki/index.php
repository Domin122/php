<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zaprojektuj własne trampki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>T13 - Zaprojektuj własne trampki</h1>
    <h2>Autor: Dominik Gabrysz 2ir_2</h2>
    <h1>Formularz konkursu "Podrasuj swoje buty!"</h1>
    <p>Chcesz zamienić swoje stare trampki na nową parę zaprojektowanych przez ciebie butów Forcefield?
        Napisz nam, dlaczego sądzisz, że powinieneś pożegnać się ze swoimi wysłużonymi butami,
        a być może zostaniesz jednym z laureatów konkursu!
    </p>
</header>

<form method="post" action="">
    <fieldset>
        <legend>Podstawowe Dane</legend>
        <label for="imie_nazwisko">Imie i nazwisko:</label><input id="imie_nazwisko" name="imie_nazwisko"><br>
        <label for="email">E-Mail:</label><input id="email" name="email"><br>
        <label for="Telefon">Telefon:</label><input id="Telefon" name="Telefon"><br>
        <label for="opis">Moje buty są TAKIE stare...</label><br><input  id="opis" name="opis">
    </fieldset>

    <fieldset>
        <legend>Własny projekt butów</legend>

        <fieldset>
            <legend>Kolor(wybierz jeden)</legend>
            <label><input type="radio" name="kolor" value="Czerwony">czerwony</label><br>
            <label><input type="radio" name="kolor" value="Niebieski">niebieski</label><br>
            <label><input type="radio" name="kolor" value="Czarny">czarny</label><br>
            <label><input type="radio" name="kolor" value="srebrny">srebrny</label><br>
        </fieldset>

        <fieldset>
            <legend>Opcje (możesz wybrać kilka)</legend>
            <label><input type="checkbox" name="opcje[]" value="Sznurówki">Błyszczące sznurówki</label><br>
            <label><input type="checkbox" name="opcje[]" value="Logo">Metalowe logo</label><br>
            <label><input type="checkbox" name="opcje[]" value="Podeszwy">Świecące podeszwy</label><br>
            <label><input type="checkbox" name="opcje[]" value="Mp3">Odtwarzanie MP3</label><br>
        </fieldset>

        <fieldset>
            <legend>Rozmiar</legend>
            <label for="rozmiary">Rozmiar Buta </label>
            <select id="rozmiary" name="rozmiary">
                <?php
                for ($size = 37; $size <= 48; $size++) {
                    echo "<option value=\"$size\">$size</option>";
                }
                ?>
            </select>
        </fieldset>
    </fieldset>

    <input type="submit" value="Podrasuj swoje buty">
    <input type="submit" id="reset" value="Resetuj">
</form>

<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        $imieNazwisko = $_POST["imie_nazwisko"];
        $email = $_POST["email"];
        $telefon = $_POST["Telefon"];
        $opis = $_POST["opis"];
        $kolor = $_POST["kolor"];
        $opcje = isset($_POST["opcje"]) ? implode(", ", $_POST["opcje"]) : "";
        $rozmiary = $_POST["rozmiary"];

        echo "Imię i nazwisko: " . $imieNazwisko . "<br>" .
            "E-Mail: " . $email . "<br>" .
            "Telefon: " . $telefon . "<br>" .
            "Opis butów: " . $opis . "<br>" .
            "Kolor: " . $kolor . "<br>" .
            "Opcje: " . $opcje . "<br>" .
            "Rozmiar: " . $rozmiary;
    }
    ?>
</section>

</body>
</html>
