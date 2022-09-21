<?php
    $tstring = "Thereses familie skulle ha ris til middag. Hun ville heller ha en is å spise.";
    if(str_contains($tstring, "is")) {
        echo substr_count($tstring, "is");
    }
?>