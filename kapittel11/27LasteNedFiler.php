<?php
    $filhenv = "/katalog/til/iilene/" . vask($_REQUEST['filnavn']);
    if (file_exists($filhenv)) {
        header("Content-Description: File Transfer");
        header("Content-Type: application/octet-stream"); //tving nedlasting
        header("Content-Length: " . filesize($filhenv));
        header("Content-Transfer-Encoding: Binary");
        header("Content-Disposition: attachment; filename=\"" .$filhenv . "\"");
        header("Pragma: public");
        readfile($filhenv);
        header("Location: " . $suksess);
    } else {
        //omdiriger
        header("Location: " . $fiasko);
    }
?>