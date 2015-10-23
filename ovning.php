<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
<?php
    /* Aritemtiska operatorer */
    $tal1 = 30;
    $tal2 = 13;

    $summa = $tal1 + $tal2;
    $produkt = $tal1 * $tal2;
    $substraktion = $tal1 - $tal2;
    $division = $tal1 / $tal2;

    /* Modulus */
    $modulus = $tal1 % $tal2; // 30 = 2 * 13 + 4 räknar ut vad resten är alltså 4
    echo "<p>modulus = $modulus</p>";

    /* Ligiska operatorer */
    $HarFemFingrar = true;
    $HarSexTar = false;

    $sats = $HarFemFingrar and $HarSexTar;
    echo "<p>sats är $sats</p>";

    $losenord = 123;

    if ($losenord == "123") {
        echo "<p>Du är inloggad!</p>";
    }
    else {
        "<p>Fel lösenord, försök igen!</p>";
    }

    if ($tal1 != 0) {
        "<p>Talet är inte noll</p>";
    }
    else if ($tal1 < 0) {
        echo "<p>Talet är mindre än noll</p>";
    }
    else if ($tal1 > 0) {
        "<p>Talet är större än noll</p>";
    }

    if ($tal1 > 20 && $tal1 <50) {
        "<p>Första talet: $tal1 är större än 20 och mindre än 50</p>";
    }

    if ($HarFemFingrar && $HarSexTar) {
        echo "<p>Svaret är sant.</p>";
    }
    else {
        echo "<p>Svaret är falskt.</p>";
    }

    /* Loopar */
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>i = $i</p>";
    }

    $l = 1;
    while ($l <= 10) {
        echo "<p>l = $l</p>";
        $l++;
    }
?>
</body>
</html>
