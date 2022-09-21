<?php

    include_once("øvelse01 (sirkelkalkulator).inc.php");
    $r = 5;

    echo "Arealet til sirkelen er " .  round(sirkelareal($r), 2)  . " <br>" ;
    echo "Diameteren til sirkelen er " .  round(sirkeldiameter($r), 2) . " <br>";
    echo "Omkretsen til sirkelen er " .  round(sirkelomkrets($r), 2) . " <br>";
?>