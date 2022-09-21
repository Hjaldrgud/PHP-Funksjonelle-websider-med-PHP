<?php

function gjsnitt($karakterer) {
    $kar_poeng = array(
        'A' => 5,
        'B' => 4,
        'C' => 3,
        'D' => 2,
        'E' => 1,
        'F' => 0
    );
    $poeng = 0;

    foreach ($karakterer as $karakter) {
        $poeng += $kar_poeng[$karakter];
    }

    $gjsnitt = $poeng/count($karakterer);
    $gjsnitt = round($gjsnitt, 0, PHP_ROUND_HALF_UP);
    return array_search($gjsnitt, $kar_poeng);
}

?>