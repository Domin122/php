<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T131</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T131</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Tu przesyłamy kod z klasą Osoba z dodanym polem wiek.</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        class osoba
        {
            public $id, $nazwisko, $imie, $wiek;

            function wpiszNazwisko($nazwisko)
            {
                $this->nazwisko = $nazwisko;
            }

            function pobierzNazwisko()
            {
                return $this->nazwisko;
            }

            function wpiszImie($imie)
            {
                $this->imie = $imie;
            }

            function pobierzImie()
            {
                return $this->imie;
            }

            function wpiszWiek($wiek)
            {
                $this->wiek = $wiek;
            }

            function pobierzWiek()
            {
                return $this->wiek;
            }


            function wpiszId($id)
            {
                $this->id = $id;
            }

            function pobierzId()
            {
                return $this->id;
            }
        }

        $postac1 = new osoba();
        $postac2 = new osoba();
        $postac1->nazwisko = 'Kowalski';
        $postac1->imie = 'Jan';
        $postac1->wiek = 20;
        $postac1->id = 1;

        $postac2->wpiszNazwisko('Nowak');
        $postac2->wpiszImie('Adam');
        $postac2->wpiszWiek(22);
        $postac2->wpiszId(2);

        echo "Id: ";
        echo $postac1->id . "<br>";
        echo $postac1->nazwisko . " " . $postac1->imie . " " . $postac1->wiek;
        echo "<br>";
        echo "Id: ";
        echo $postac2->pobierzId() . "<br>";
        echo $postac2->pobierzNazwisko() . " osoba.php " . $postac2->pobierzImie() . " " . $postac2->pobierzWiek();



    }
    ?>

</section>

</body>
</html>
