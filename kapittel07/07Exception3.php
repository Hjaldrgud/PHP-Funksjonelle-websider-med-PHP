<?php

    set_exception_handler(function(Exception $e) {
        //gjør noe og logg exception
    });

    restore_exception_handler();


    function validerepost($epost) {
        if (!filter_var($epost, FILTER_VALIDATE_EMAIL)) {
            trigger_error("Dette er ikke en gyldig e-postadresse", E_USER_WARNING);
            return;
        }
    }
    $epost = "gd/5%";
    validerepost($epost);
?>