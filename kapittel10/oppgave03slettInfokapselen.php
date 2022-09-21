<?php
    setcookie("oppgave01", "Dette er en informasjonskapsel", time()-3600, "/");

    if (isset($_COOKIE['oppgave01'])) {
        echo $_COOKIE['oppgave01'];
    } else {
        echo "infokapselen er fjernet";
    }

?>