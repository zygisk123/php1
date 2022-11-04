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
    echo "STRINGAI<br>";
    echo "1 UZDUOTIS<br>";
    $name = "Jim";
    $lastname = "Carrey";

    if (strlen($name) > strlen($lastname)) {
        echo $lastname."<br>";
    }else {
        echo $name."<br>";
    }
    echo "2 UZDUOTIS<br>";
    echo strtoupper($name) . " " . strtolower($lastname)."<br>";
    echo "3 UZDUOTIS<br>";
    $initials = "";
    $initials .= $name[0];
    $initials .= $lastname[0];
    echo $initials."<br>";
    echo "4 UZDUOTIS<br>";
    $string = "";
    // nurodome stringa, nuo kokio iki kokio elemento nukirpsime
    $string .= substr($name, strlen($name)-3, strlen($name));
    $string .= substr($lastname, strlen($lastname)-3, strlen($lastname));

    echo $string."<br>";
    echo "5 UZDUOTIS<br>";
    $string2 = "An American in Paris";

    $string2 = str_replace("a","*",$string2);
    $string2 = str_replace("A","*",$string2);

    echo $string2."<br>";
    echo "MASYVAI<br>";
    echo "1 UZDUOTIS<br>";
    $numArray = array();
    $numArrayLength = 30;
    for ($i=0; $i < $numArrayLength; $i++) { 
        $numArray[$i] = rand(5,25);
        echo $numArray[$i] . " ";
    }
    echo "<br>2 UZDUOTIS<br>";
    echo "a<br>";
    $morethan10 = 0;
    for ($i=0; $i < count($numArray); $i++) { 
        if ($numArray[$i] > 10) {
            $morethan10++;
        }
    }
    echo "Skaiciu kiekis, kurie didesni uz 10: " . $morethan10."<br>";
    echo "b<br>";
    $maxValue = 0;
    for ($i=0; $i < count($numArray); $i++) { 
        if ($numArray[$i] > $maxValue) {
            $maxValue = $numArray[$i];
        }
    }
    echo "Didziausia masyvo reiksme: " . $maxValue . "<br>";
    echo "c<br>";
    $sum = 0;
    for ($i=0; $i < count($numArray); $i++) { 
        $sum += $numArray[$i];
    }
    echo "Visu elementu suma: " . $sum . "<br>";
    echo "d<br>";
    $newNumArray = array();
    for ($i=0; $i < count($numArray); $i++) {
        $newNumArray[$i] = $numArray[$i] - $i;
        echo $newNumArray[$i] . " "; 
    }
    echo "<br>e<br>";
    $newlength = count($numArray) + 10;
    for ($i=count($numArray); $i < $newlength; $i++) { 
        $numArray[$i] = rand(5,25);
    }
    echo $numArray[30]."<br>";
    echo "f<br>";
    $elementOddID = array();
    $oddID = 0;
    $elementEvenID = array();
    $evenID = 0;

    for ($i=1; $i < count($numArray); $i++) { 
        if ($i % 2 == 0) {
            $elementEvenID[$evenID] = $numArray[$i];
          //  echo "Lyginis: " .$elementEvenID[$evenID]."<br>";
            $evenID++;
        }else{
            $elementOddID[$oddID] = $numArray[$i];
          //  echo "nelyginis: " . $elementOddID[$oddID]."<br>";
            $oddID;
        }
    }
    
    echo "g<br>";

    for ($i=0; $i < count($numArray); $i++) { 
        if ($i % 2 == 0) {
            if ($numArray[$i] > 15) {
                $numArray[$i] = 0;
            }
        }
        //echo $numArray[$i] . " ";
    }
    print_r($numArray);
    echo "<br>h<br>";
    for ($i=0; $i < count($numArray); $i++) { 
        if ($numArray[$i] > 10) {
            echo "pirmas masyvo indeksas, kurio reiksme didesne uz 10: " . $i . "<br>";
            break;
        }
    }
    echo "i<br>";
    for ($i=0; $i < $newlength; $i++) { 
        if ($i % 2 == 0) {
            unset($numArray[$i]);
        }
    }

    for ($i=0; $i < $newlength; $i++) { 
        echo $numArray[$i] . " ";
    }
    echo "<br>";
    print_r($numArray);
    ?>
</body>
</html>