<?php
    session_start(); 
    echo "før: ";
    print_r($_SESSION);
    unset($_SESSION['navn']);
    echo "<br>etter: ";
    print_r($_SESSION);
    echo "<br>";
    if(isset($_SESSION['navn'])) {
        echo "Øktvariabel eksisterer fortsatt. Kanskje oppdater og sjekk da.";
    } else {
        echo "Øktvariabelen er slettet.";
    }
?>