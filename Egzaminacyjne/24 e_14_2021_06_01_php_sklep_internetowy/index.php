<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<header>
    <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
</header>
<div id="lewy">
    <h2>Kontakt</h2>
    <p>telefon: 444333222 <br> e-mail: bok@sklep.pl</p>
    <img src="pliki1/promocja.png" alt="promocja">
</div>
<div id="srodek">
    <h2>Promocja 10% obejmuje artykuły:</h2>
    <ul>
        <li>Gumka do mazania</li>
        <li>Cienkopis</li>
        <li>Piskaki 60 szt.</li>
        <li>Markery 4 szt.</li>
    </ul>
</div>
<div id="prawy">
    <h2>Cena wybranego artykułu w promocji</h2>
    <form action="<?php ?>" method="post">
        <label>
            <select id="lista" onchange="lista()">
                <option id="gumka">Gumka do mazania</option>
                <option id="cienkopis">Cienkopis</option>
                <option id="pisaki">Piskaki 60 szt.</option>
                <option id="markery">Markery 4 szt.</option>
            </select>
        </label>
        <input type="submit" value="Wybierz">
    </form>
    <?php

    ?>
</div>
<footer>
    <h3>Autor strony: Dominik Gabrysz 3ip_2</h3>
</footer>
</body>
</html>