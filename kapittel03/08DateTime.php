<?php
    //$dn = new DateTime("now");
    //$dn = new DateTime("1992-06-21 09:39:30");

    //$dts = new DateTimeZone("Pacific/Honolulu");
    //echo $dts->getName();
    //$dn = new DateTime("now");

    //$cts = ini_get('date.timezone');
    //$dts = new DateTimeZone($cts);
    //$dn = new DateTime("now", $dts);
    
    $dts = new DateTimeZone("Pacific/Honolulu");
    $dn = new DateTime("now", $dts);
    echo $dn->format("Y-m-d H:i:s");
?>