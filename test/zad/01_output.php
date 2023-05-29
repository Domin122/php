<?php

echo 'Hello';
echo 123;
echo '<h1>Hello</h1>';


print 'Hello';
echo '<hr>';

print_r('Hello');
echo '<hr>';
print_r([1,2,3]);
echo '<hr>';

var_dump('Hello');
echo '<hr>';
var_dump([1,2,3]);
echo '<hr>';

echo "Tytuł książki: \"Kamienie na Szaniec\"";
echo '<hr>';

$haslo = 'toster_elektryczny';

echo 'tutaj pojawi się łańcuch znaków: $haslo<br>';
echo "tutaj pojawi się wartość zmiennej: $haslo<br>";

?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Witaj <?php echo 'Roman'?></h1>

<h1>Witaj <?= 'Marek' ?></h1>
</body>
</html>
