<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T11a</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T11a</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Utwórz stronę, której tło będzie zielone w niedziele, natomiast w pozostałe dni tygodnia kolor będzie wybierany losowo</p>
    <form method="post" action="">
        <input type="submit" value="Wyślij">
    </form>

</section>
<section>
    <style>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ini_set('display_errors', 0);
        function losowyKolor() {
            return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
        }


        $dzienTygodnia = date('w');
        if ($dzienTygodnia == 0) {

            echo 'body { background-color: green; }';
        } else {

            echo 'body { background-color: ' . losowyKolor() . '; }';
        }

    }
    ?>
    </style>
</section>

</body>
</html>




