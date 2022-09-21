<?php
$radius = 5;
define("PI", 3.14159265359);
$omkrets = 2 * PI * $radius;
$areal = PI * $radius * $radius;

echo <<<SIRKEL
omkretsen av sirkelen er $omkrets og 
arealet av sirkelen er $areal.
SIRKEL;
?>