<?php
    $brukernavn = "admin"; //Må hentes fra feks db
    $passord = '$2y$10$AY8vPqc'; //Må hentes fra feks db

    if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {

        if($_SERVER['PHP_AUTH_USER'] === $brukernavn && $_SERVER['PHP_AUTH_PW'] === $passord)
            echo "Du er nå logget inn";
        else die("Ugyldig brukernavn og/eller passord");

    } else {
        header('WWW-authenticate: Basic realm="Restricted Area"');
        header("HTTP/1.0 401 Unauthorized");
        die("Vennligst skriv inn brukernavn og passord");
    }
?>