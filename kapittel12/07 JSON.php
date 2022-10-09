<?php
    $php = array('Afrika'=>"Kilimanjaro", 'Amerika'=>"Mauna Kea");
    echo "<br>". gettype($php)."<br>";
    $json = json_encode($php);
    echo $json . "<br>";

    $json2 = $json;
    $php2 = json_decode($json2, true); //Default så er den false, noe som returnerer et objekt!!!
    echo "<br>". gettype($php2)."<br>";
    print_r($php2);
?>