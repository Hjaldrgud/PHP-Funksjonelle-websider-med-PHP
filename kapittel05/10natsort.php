<?php
    $bilder1 = $bilder2 = array("b12.png", "b10.png", "b2.png", "b1.png");
    asort($bilder1);
    echo "Alfabetisk sortering: <br>";
    print_r($bilder1);
    natsort($bilder2);
    echo "<br><br> Naturlig sortering: <br>";
    print_r($bilder2);
?>