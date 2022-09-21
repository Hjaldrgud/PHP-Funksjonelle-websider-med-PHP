<?php
    $dn = new DateTime("now");
    function hilsen($navn) {
        global $dn;
        $hilsen = $dn->format("d.m.Y k\l. H:i") . " Hei " . $navn . "! <br>";
        echo $hilsen;
    } 
    hilsen("Silje"); 
?>