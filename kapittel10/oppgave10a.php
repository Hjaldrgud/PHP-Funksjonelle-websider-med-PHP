<?php
    session_start();
    if(!isset($_SESSION['oppgave10'])) {
        $_SESSION['oppgave10'] = "Dette er oppgave 10. Denne teksten er den originale fra A-delen av oppgava.";
    } else {
        echo $_SESSION['oppgave10'];
        unset($_SESSION['oppgave10']);
    }


?>