<?php

    function LeggeTilMidtIArray ($matrise, $verdi, $splittepunkt) : array {
        $matrise2 = array_splice($matrise, $splittepunkt);
        $matrise[] = $verdi;
        $matrise = array_merge($matrise, $matrise2);

        return $matrise;
    }

    $matrise = array("alfa", "bravo", "charlie", "echo", "foxtrot", "golf"); //Matrisen som skal legges inn i
    $verdi = "delta"; //Verdien som skal settes inn
    $splittepunkt = 3; //plassnummeret der den skal bli satt inn
    $matrise = LeggeTilMidtIArray($matrise, $verdi, $splittepunkt);
    echo "<pre>";
    print_r($matrise);
    echo "<pre>";

?>