<?php
    $idag = date("F j, Y, g:i a");
    echo $idag . "<br>";
    $idag = date("Y-m-d H:i:s");
    echo $idag . "<br>";
    $idag = date("d.m.Y k\l H:i");
    echo $idag . "<br>";
    $idag = date("d.m.Y k\l. H:i", time()+3600);
    echo $idag . " en time fram. <br>";
?>