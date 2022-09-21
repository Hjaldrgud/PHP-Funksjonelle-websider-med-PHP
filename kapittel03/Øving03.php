<?php
    function generering() {
        $passord = "1";
        
        while(!preg_match("/[a-z]/i", $passord)){
            $passord = str_shuffle(strtoupper(substr(md5("Hallo på do"), rand(0,22), 8)));
        }
        echo $passord;
    }
    generering();
?>