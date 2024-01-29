<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T09g</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T09g</h1>
    <h2>Autor: Dominik Gabrysz 3ip_2</h2>
</header>
<section>
    <p>Dana jest następująca tablica:<br>
$players = [];<br>
$players[] = ["Nazwisko" => "Ronaldo", "Wiek" => 31, "Kraj" => "Portugalia","Drużyna" => "Real Madrid"];<br>
$players[] = ["Nazwisko" => "Messi", "Wiek" => 27, "Kraj" => "Argentyna", "Drużyna"=> "Barcelona"];<br>
$players[] = ["Nazwisko" => "Neymar", "Wiek" => 24, "Kraj" => "Brazylia", "Drużyna"=> "Barcelona"];<br>
$players[] = ["Nazwisko" => "Rooney", "Wiek" => 30, "Kraj" => "Anglia", "Drużyna"=> "Man United"];<br>
Dopisz kod, który wyświetli tablicę wraz z nazwami kluczy.</p>
    <form action="<?php ?>" method="post">
        <input type="submit" value="Sprawdź wynik">
    </form>
</section>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ini_set('display_errors', 0);

    $players = [];
    $players[] = ["Nazwisko" => "Ronaldo", "Wiek" => 31, "Kraj" => "Portugalia","Drużyna" => "Real Madrid"];
    $players[] = ["Nazwisko" => "Messi", "Wiek" => 27, "Kraj" => "Argentyna", "Drużyna"=> "Barcelona"];
    $players[] = ["Nazwisko" => "Neymar", "Wiek" => 24, "Kraj" => "Brazylia", "Drużyna"=> "Barcelona"];
    $players[] = ["Nazwisko" => "Rooney", "Wiek" => 30, "Kraj" => "Anglia", "Drużyna"=> "Man United"];

  foreach ($players as $x){
      foreach ($x as $key =>$value){
          echo $key . ": " . $value . ", ";
      }
      echo "<br>";
  }
}
?>
</body>
</html>
