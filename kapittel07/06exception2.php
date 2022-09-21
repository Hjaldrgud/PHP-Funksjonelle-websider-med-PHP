<?php

function divisjon($x) {
    if(!$x) {
        throw new Exception("Divisjon med null.");
    }
    return 5/$x;
}
try {
    echo divisjon(5) . "<br>";
    echo divisjon(0) . "<br>";
} catch (Exception $e) {
    echo "Exception: ", $e->getMessage(), "<br>";
}

@unlink("fil-som-ikke-eksisterer");

error_reporting(0);

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    //gjør noe med feilen
});


set_error_handler(function($errno, $errstr, $errfile, $errline) {
    //gjør noe med feilen
}, E_NOTICE);

restore_error_handler();

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if(!(error_reporting() && $errno)) {
        /* Vi gjør ingenting ettersom feilen ikke er spesifisert i error_reporting()-innstillingen */
        return;
    }
    throw new \ErrorException($errstr, $errno, 0, $errfile, $errline);
});
?>