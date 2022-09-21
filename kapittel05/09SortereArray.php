<?php
    $konkurranse = array ('silje'=>5, 'Per'=>3, 'Therese'=>0, 'Ola'=>9);
    arsort($konkurranse);
    print_r($konkurranse);
    echo "<br>";
    asort($konkurranse);
    print_r($konkurranse);
    echo "<br>";
    echo "<br>";

    $dyr1 = array("hund", "tiger", "akvariefisk", "ape", "sjiraff", "flodhest");
    usort($dyr1, function ($a, $b) {
        if(strlen($a) > strlen($b)){
            echo strlen($a) - strlen($b) . "= $a > $b <br>"; 
        } else {
            echo strlen($a) - strlen($b) . "= $a < $b <br>"; 
        }
        return strlen($a) - strlen($b);
    } );
    echo "<br><br><br>";
    print_r($dyr1);
    echo "<br><br><br>";


    $usort = array(3,2,1,0);
    usort($usort, function ($a, $b) {
        if($a > $b){
            echo $a-$b . " = $a > $b <br>"; 
        } else {
            echo $a-$b . " = $a < $b <br>"; 
        }
        return $a-$b;
    } );
    echo "<br><br><br>";
    print_r($usort);
?>