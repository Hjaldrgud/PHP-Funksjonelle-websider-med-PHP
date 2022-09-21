<?php
    $sitat = "Alle tenker på seg - det er bare jeg som tenker på meg.";
    $finnord = "tenker"; 
    $erstatning = str_repeat("*",strlen($finnord));

    if(str_contains($sitat, $finnord)) {
        $sitat = str_replace($finnord, $erstatning, $sitat);
    }
    echo $sitat;
?>