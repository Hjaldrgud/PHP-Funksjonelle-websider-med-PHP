<?php
$palindrom = "221";

function palindromsjekk () {
    global $palindrom;
    echo $palindrom . "<br>";
    $antall = floor(strlen($palindrom)/2);
    echo $antall . " Bokstaver trenger å være like. <br>";
    $front = substr($palindrom, 0, $antall);
    $bak = strrev(substr($palindrom, -$antall));
    
    
    
    echo $front. " Framre bokstaver. <br>";
    echo $bak. " Bakre bokstaver. <br>";
    echo ($front == $bak ? "Dette er et palindrom" : "Dette er IKKE et palindrom");
}

palindromsjekk();
?>