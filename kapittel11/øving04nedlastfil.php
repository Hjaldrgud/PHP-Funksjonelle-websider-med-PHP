<?php
    //SUKSESS!!!
    function lastnedUtenåse($filhenv) {
        $suksess = 'øving04.php';
        $fiasko = '';
        if (file_exists($filhenv)) {
            header("Content-Description: File Transfer");
            header("Content-Type: application/octet-stream"); //tving nedlasting
            header("Content-Length: " . filesize($filhenv));
            header("Content-Transfer-Encoding: Binary");
            header("Content-Disposition: attachment; filename=\"" .$filhenv . "\"");
            header("Pragma: public");
            readfile($filhenv);
            header("Location: http://localhost/phpskole/boka/kapittel11/");
        } else {
            //omdiriger
           header("Location: " . $fiasko);
        }
    }

    lastnedUtenåse('filer/'.$_GET['fil']);
?>