<?php
    $dts = new DateTimeZone("America/Argentina/Buenos_Aires");
    $dn = new DateTime("now", $dts);
    echo $dn->format("d.m.y. k\l. H:i:s");
?>