<?php
    $frukt = $fruktm2 = $frukt3m = array("banan", "appelsin", "eple");
    list($frukt1, $frukt2, $frukt3) = $frukt;
    echo $frukt1 . " er en frukt, og det er også " . $frukt2 . " og " . $frukt3 . "<br><br>";

    list($frukt2, $frukt3) = array_slice($fruktm2, 1, 2);
    echo "nå tok vi kun med " . $frukt2 . " og " . $frukt3;

    list($b, , $e) = $frukt3m;
?>