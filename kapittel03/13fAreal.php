<?php
    function areal($radius) {
        $areal = pi() * pow($radius, 2);
        return round($areal, 2);
    }

    $radius = 5;
    echo areal($radius);


?>