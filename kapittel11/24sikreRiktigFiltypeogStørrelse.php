<?php
    /* filtype akseptert? */
    if(!in_array($filtype, $filtyper)) {
        $meldinger[] = "Ugyldig filtype";
    }

    /* Filstørrelse akseptert? */
    if($filstr > $max_filstr) {
        $meldinger[] = "Fila er for stor.";
    }
?>