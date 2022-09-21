<?php
    $dts = new DateTimeZone("Europe/Berlin");
    $df = new DateTime("1992-06-21 09:39:30");
    $dn = new DateTime("now", $dts);
    $diff = $df->diff($dn);
    echo "Forskjellen mellom " . $df->format("d.m.Y k\l. H:i:s") . " og " . $dn->format("d.m.Y k\l. H:i:s") .  " er " . $diff->format("%y år, %m måneder, %d dager, %h timer, %i minutter og %s sekunder");
?>