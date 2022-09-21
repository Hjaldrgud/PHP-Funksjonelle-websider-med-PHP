<?php

/**
 * Kalkulerer arealet av en sirkel.
 * 
 * @param int $r er radius.
 * @return float $a er det kalkulerte arealet.
 */
function sirkelareal($r) {
    $a = $r*$r*pi();
    return $a;
}

/**
 * Kalkulerer diameteren til en sirkel.
 * 
 * @param int $r er radiusen.
 * @return float $d er den kalkulerte diameteren.
 */
function sirkeldiameter($r) {
    $d = $r*2;
    return $d;
}

/**
 * Kalkulerer en sirkels omkrets
 * 
 * @param int $r er radiusen.
 * @return float $o er den kalkulerte omkretsen.
 */
function sirkelomkrets($r) {
    $o = $r*2*pi();
    return $o;
}

?>