<?php
    $fruktm = $fruktm2 = array('frukt1'=>"banan", 'frukt2'=>"appelsin", 'frukt3'=>"eple");
    extract($fruktm);
    echo $frukt1 . " er en frukt. Det er også " . $frukt2 . " og " . $frukt3 . "<br><br>";

    extract($fruktm2, EXTR_PREFIX_ALL, "f");
    echo $f_frukt1 . " er en frukt, men det er også " . $f_frukt2 . " og " . $f_frukt3 . "<br><br>";


    $frukt1 = "banan";
    $frukt2 = "appelsin";
    $frukt3 = "eple";
    $m = compact("frukt1", "frukt2", "frukt3");
    print_r($m);


?>