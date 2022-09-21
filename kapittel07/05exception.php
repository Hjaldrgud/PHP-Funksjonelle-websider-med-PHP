<?php

$gyldig = 'echo "Tekst som skrives ut på skjermen";';
$ugyldig = 'Dette er ikke gyldig PHP-kode';

try {
    eval($ugyldig);
} catch (ParseError $e) {
    echo $e->getMessage();
}


?>