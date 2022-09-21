<?php
    while (file_exists($kat . $filnavn)) {
        $filnavn = "test_" . date("YmdHis") . "." . $suffiks;
    }
?>