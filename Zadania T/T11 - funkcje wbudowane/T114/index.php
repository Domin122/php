<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T114</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T114</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Napisz funkcję, która dla podanej daty w postaci mm, dd, YY sprawdzi, czy jest to prawidłowa data i jeśli tak sprawdzi,
        czy jest to data z przeszłości. Jeśli tak funkcja wypisze słowo „historia”, a jeśli nie wypisze „teraźniejszość lub przyszłość”.
        W przypadku błędnej danej funkcja kończy działanie i wyświetla komunikat o błędnej dacie.</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);

        function sprawdzDate($mm, $dd, $YY) {
            if (checkdate($mm, $dd, $YY)) {
                $aktualnaData = strtotime(date("Y-m-d"));
                $podanaData = strtotime("$YY-$mm-$dd");

                if ($podanaData < $aktualnaData) {
                    echo "historia";
                } else {
                    echo "teraźniejszość lub przyszłość";
                }
            } else {
                echo "Błędna data";
            }
        }

        //sprawdzDate(11, 15, 21);
        sprawdzDate(11, 20, 23);


    }
    ?>

</section>

</body>
</html>
