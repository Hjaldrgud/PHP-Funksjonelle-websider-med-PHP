<?php
    function areal($radius = 5) {
        $areal = pi() * pow($radius, 2);
        return round($areal, 2);
    }
    $areal = areal();
    echo $areal;
?>