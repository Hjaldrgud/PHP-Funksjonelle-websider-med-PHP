<?php
    $m1 = array();
    for($i=0; $i<=3; $i++){
        $n = rand(1,100);
        if(!array_key_exists($n, $m1)) {
            $m1[$n] = $n+1;
        }
    }
    print_r($m1);
    echo "<br><br>";

    $m2 = array_keys($m1);
    print_r($m2);
    echo "<br><br>";

    $m3 = array_values($m1);
    print_r($m3);
    echo "<br><br>";


?>