<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1 UZDUOTIS
    $name = "Zygimantas";
    $surname = "Kizla";
    $birth = 1999;
    $currentYeAR = 2022;
    echo "As esu " .$name ." ". $surname . ". Man yra " . $currentYeAR - $birth . " metai<br>";

    // 2 UZDUOTIS
    $valueA = rand(1, 4);
    $valueB = rand(1, 4);
    if ($valueA >= $valueB && $valueB > 0) {
        echo number_format((float)$valueA / $valueB, 2, '.', '');
    }else if ($valueB > $valueA && $valueA > 0){
        echo number_format((float)$valueB / $valueA, 2, '.', '');
    }else{
        echo "Dalyba negalima";
    }
    echo "<br>";
    // 3 UZDUOTIS
    $value1 = rand(0,25);
    $value2 = rand(0,25);
    $value3 = rand(0,25);
    if (($value1 > $value2 && $value1 < $value3) || ($value1 < $value2 && $value1 > $value3)) {
        echo "Vidurine reiksme: " . $value1;
    }
    if (($value1 < $value2 && $value2 < $value3) || ($value1 > $value2 && $value2 > $value3)) {
        echo "Vidurine reiksme: " . $value2;
    }
    if (($value3 > $value2 && $value1 > $value3) || ($value3 < $value2 && $value1 < $value3)) {
        echo "Vidurine reiksme: " . $value3;
    }else if ($value1 == $value2 || $value1 == $value3 || $value2 == $value3){
        echo "Vidurines reiksmes nera";
    }
    echo "<br>".$value1." ".$value2." ".$value3."<br><br>";
    // 4 UZDUOTIS
    $a = rand(0,25);
    $b = rand(0,25);
    $c = rand(0,25);
    if (($a + $b > $c || $a + $c > $b || $b + $c > $a) && ($a > 0 && $b > 0 && $c > 0)) {
        echo $a ." ". $b ." ". $c." Galima nupiesti trikampi.<br><br>";
    }else{
        echo $a ." ". $b ." ". $c." Trikampio nupiesti negalima.<br><br>";
    }
    // 5 uzduotis
    $value5 = rand(0,2);
    $value6 = rand(0,2);
    $value7 = rand(0,2);
    $value8 = rand(0,2);
    $amount0 = 0;
    $amount1 = 0;
    $amount2 = 0;
    if ($value5 == 0) {
        $amount0++;
    }else if($value5 == 1){
        $amount1++;
    }else {
        $amount2++;
    }

    if ($value6 == 0) {
        $amount0++;
    }else if($value6 == 1){
        $amount1++;
    }else {
        $amount2++;
    }

    if ($value7 == 0) {
        $amount0++;
    }else if($value7 == 1){
        $amount1++;
    }else {
        $amount2++;
    }

    if ($value8 == 0) {
        $amount0++;
    }else if($value8 == 1){
        $amount1++;
    }else {
        $amount2++;
    }

    echo "Nuliu kiekis: " . $amount0 . " ";
    echo "Vienetu kiekis: " . $amount1 . " ";
    echo "Dvejetu kiekis: " . $amount2 . " ";
    //6 UZDUOTIS
    $randNum = rand(1,6);
    echo "<h". $randNum . ">" . $randNum . "</h". $randNum ."><br>";
    // 7 UZDUOTIS
    $value9 = rand(-10,10);
    $value10 = rand(-10,10);
    $value11 = rand(-10,10);
    if ($value9 < 0) {
        echo "<font color=green>".$value9."</font>";
    }elseif ($value9 == 0) {
        echo "<font color=red>".$value9."</font>";
    }else{
        echo "<font color=blue>".$value9."</font>";
    }
    if ($value10 < 0) {
        echo "<font color=green>".$value10."</font>";
    }elseif ($value10 == 0) {
        echo "<font color=red>".$value10."</font>";
    }else{
        echo "<font color=blue>".$value10."</font>";
    }
    if ($value11 < 0) {
        echo "<font color=green>".$value11."</font>";
    }elseif ($value11 == 0) {
        echo "<font color=red>".$value11."</font>";
    }else{
        echo "<font color=blue>".$value11."</font>";
    }
    // 8 UZDUOTIS
    $canddlePrice = 1;
    $canddleAmount = rand(5,3000);
    $finalPrice = 0;
    if ($canddleAmount > 1000) {
        $finalPrice = $canddleAmount * ($canddlePrice - $canddlePrice * 0.03);
    }elseif ($canddleAmount > 2000) {
        $finalPrice = $canddleAmount * ($canddlePrice - $canddlePrice * 0.04);
    }else {
        $finalPrice = $canddleAmount * $canddlePrice;
    }
    echo "<br><br>".$finalPrice."<br><br>";
    echo "9 UZDUOTIS<br>";
    // 9 UZDUOTIS
    $value12 = rand(0,100);
    $value13 = rand(0,100);
    $value14 = rand(0,100);
    $average1 = ($value12 + $value13 + $value14) / 3;
    $average2 = 0;
    $sum = 0;
    echo number_format((float)$average1, 0, '.', '')."<br>";

    if($value12 >= 10 && $value12 <= 90){
        $sum += $value12;
    }
    if($value13 >= 10 && $value13 <= 90){
        $sum += $value13;
    }
    if($value14 >= 10 && $value14 <= 90){
        $sum += $value14;
    }

   echo number_format((float)$sum /3, 0, '.', '')."<br>";
   echo "10 UZDUOTIS<br>";

    ?>
</body>
</html>