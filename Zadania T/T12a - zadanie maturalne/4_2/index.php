<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4_2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 4_2</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
<p>Znajdź w pliku liczby.txt:<br>
- liczbę, która ma w rozkładzie najwięcej czynników pierwszych (podaj tę liczbę oraz liczbę jej czynników pierwszych) <br>
- liczbę, która ma w rozkładzie najwięcej różnych czynników pierwszych (podaj tę liczbę oraz liczbę jej różnych czynników pierwszych).<br>
Przykład: liczba 420=2·2·3·5·7 ma w rozkładzie 5 czynników pierwszych, w tym 4 różne czynniki pierwsze (2, 3, 5, 7).<br>
    <br>
Odpowiedź dla danych z pliku przyklad.txt: 144 6 210 4<br>
(Liczba 144 ma najwięcej czynników pierwszych; liczba czynników pierwszych liczby 144<br>
wynosi 6. Liczba 210 ma najwięcej różnych czynników pierwszych; liczba różnych czynników<br>
pierwszych liczby 210 wynosi 4). php nazwy po polsku bez komentarzy</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        function liczbaCzynnikowPierwszych($liczba)
        {
            $czynniki = [];

            for ($i = 2; $i <= sqrt($liczba); $i++) {
                while ($liczba % $i == 0) {
                    $czynniki[] = $i;
                    $liczba /= $i;
                }
            }

            if ($liczba > 1) {
                $czynniki[] = $liczba;
            }

            return $czynniki;
        }

        $plikWejsciowy = fopen('liczby.txt', 'r');

        $najwiecejCzynnikow = 0;
        $najwiecejRoznychCzynnikow = 0;
        $liczbaNajwiecejCzynnikow = 0;
        $liczbaNajwiecejRoznychCzynnikow = 0;


        while (($liczba = fgets($plikWejsciowy)) !== false) {
            $liczba = trim($liczba);
            $czynniki = liczbaCzynnikowPierwszych($liczba);
            $iloscCzynnikow = count($czynniki);
            $iloscRoznychCzynnikow = count(array_unique($czynniki));


            if ($iloscCzynnikow > $najwiecejCzynnikow) {
                $najwiecejCzynnikow = $iloscCzynnikow;
                $liczbaNajwiecejCzynnikow = $liczba;
            }

            if ($iloscRoznychCzynnikow > $najwiecejRoznychCzynnikow) {
                $najwiecejRoznychCzynnikow = $iloscRoznychCzynnikow;
                $liczbaNajwiecejRoznychCzynnikow = $liczba;
            }
        }


        $plikWynikowy = fopen('wynik_4_2.txt', 'w');
        fwrite($plikWynikowy, "Liczba z największą ilością czynników pierwszych: $liczbaNajwiecejCzynnikow (ilość: $najwiecejCzynnikow)\n");
        fwrite($plikWynikowy, "Liczba z największą ilością różnych czynników pierwszych: $liczbaNajwiecejRoznychCzynnikow (ilość: $najwiecejRoznychCzynnikow)\n");
        fclose($plikWynikowy);


        echo "Liczba z największą ilością czynników pierwszych: $liczbaNajwiecejCzynnikow (ilość: $najwiecejCzynnikow)<br>";
        echo "Liczba z największą ilością różnych czynników pierwszych: $liczbaNajwiecejRoznychCzynnikow (ilość: $najwiecejRoznychCzynnikow)";
    }
    ?>
</section>

</body>
</html>
