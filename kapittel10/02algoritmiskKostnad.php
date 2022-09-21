<?php

$tidsbegrensning = 0.05; //i sekunder = 50 millisekunder

$kostnad = 4;
do {
    $start = microtime(true);
    password_hash("mittpassord", PASSWORD_DEFAULT, ['cost' => $kostnad]);
    $slutt = microtime(true);

    echo "Kostnad " . $kostnad . " | tidsbruk = " . $slutt-$start . "<br>";

    $kostnad++; //Øker kostnaden med en
} while (($slutt-$start) < $tidsbegrensning);
    $kostnad = $kostnad - 2; //fordi kostnad har økt to ganger etter makskostnad

    /* Passende kostnad */
    echo "Passende kostnad for denne tjeneren: " . $kostnad;

?>