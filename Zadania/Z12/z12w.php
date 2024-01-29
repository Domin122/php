<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad 12 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $min = $_POST['a'];
    $max = $_POST['b'];


    function Random($min, $max, $count)
    {
        $numbers = array();
        for ($i = 0; $i < $count; $i++) {
            $numbers[] = rand($min, $max);
        }
        return $numbers;
    }

    function Sum($numbers)
    {
        return array_sum($numbers);
    }

    function Product($numbers)
    {
        $product = 1;
        foreach ($numbers as $number) {
            $product *= $number;
        }
        return $product;
    }

    function Average($numbers)
    {
        $count = count($numbers);
        $sum = Sum($numbers);
        return $sum / $count;
    }

    $count = 5;

    $randomNumbers = Random($min, $max, $count);

    echo "Wylosowane liczby: " . implode(", ", $randomNumbers) . "<br>";

    $sum = Sum($randomNumbers);
    $product = Product($randomNumbers);
    $average = Average($randomNumbers);

    echo "Suma: " . $sum . "<br>";
    echo "Iloczyn: " . $product . "<br>";
    echo "Średnia: " . $average . "<br>";


    ?>

</section>
</body>
</html>