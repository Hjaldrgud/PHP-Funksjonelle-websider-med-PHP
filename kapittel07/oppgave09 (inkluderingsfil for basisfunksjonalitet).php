<?php

function vask ($s) {
    $s = strip_tags($s);
    $s = htmlentities($s);
    return $s;
}

function sjekkEpost($epost) {
    if (!filter_var($epost, FILTER_VALIDATE_EMAIL)) {
        echo $epost . " er ikke en gyldig epostadresse.";
    }
    $epost = filter_var($epost, FILTER_SANITIZE_EMAIL);
    return $epost;
}

function pre($matrise) {
    echo "<pre>";
    print_r($matrise);
    echo "<pre>";
}

function errorjakt() {
    error_reporting(E_ALL); // Error/Exception engine, always use E_ALL
    // always use TRUE
    #ini_set('ignore_repeated_errors', TRUE); 
    // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment
    #ini_set('display_errors', FALSE); 
    // Error/Exception file logging engine.
    #ni_set('log_errors', TRUE); 
    // Logging file path
    #ini_set('error_log', 'your/path/to/errors.log'); 
}

?>