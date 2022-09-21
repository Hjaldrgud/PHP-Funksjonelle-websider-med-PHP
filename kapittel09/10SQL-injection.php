<?php

    $bnavn = $_REQUEST['brukernavn'];
    $pord = $_REQUEST['passord'];
    $sp = "SELECT * FROM medlemmer WHERE bnavn='$bnavn' AND pord = '$pord'";

    SELECT * FROM medlemmer WHERE bnavn='noe' OR 1=1 #' AND pord='passord'

    DELETE FROM medlemmer WHERE bnavn='noe' OR 1=1 #' AND pord='passord'
?>