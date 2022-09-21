<?php
    //Ingen feilmeldinger så langt?
    if(empty($meldinger)){
        $opplastet_fil = move_uploaded_file($_FILES['foto']['tmp_name'], $kat . $filnavn);

        //Gikk dette bra=
        if($opplastet_fil) {
            $meldinger[] = "Fila ble lastet opp";
        } else {
            $meldinger[] = "Fila ble ikke lastet opp.";
        }
    }
?>