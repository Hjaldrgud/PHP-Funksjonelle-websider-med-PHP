<?php

    define("DB_VERT", "localhost");
    define("DB_BRUKER", "root");
    define("DB_PASS", "");
    define("DB_NAVN", "phpskole");
    $dkn = "mysql:host=" . DB_VERT . ";dbname=" . DB_NAVN;

    try {
        $pdo = new PDO($dkn, DB_BRUKER, DB_PASS);
    } catch (PDOException $e){
        echo "Feil ved tilkoblingen til databasen: " .
        $e->getMessage();
    }



    //Forberedte spørringer
    /*
    Prosessen med forberedte spørringer består av fem steg:
        1Vi lager en mal for spørringa hvor de faktiske verdiene i selve spørringen utelates. De erstattes med plassholdere som enten er navngitte (feks :fornavn) eller ikke-navngitte (hver verdi erstattes med et spmtegn)
        2Vi forbereder databasen på spørringen ved å kjøre malen ovenfor mot DBen
        3Vi binder plassholderne i malen til faktiske verdier lagret i variabler
        4Vi kjører spørringen mot DBen
        5Vi kontrollerer spørringen
    */ 
    $sql = "INSERT INTO 'tabell' ('feltnavn') 
            VALUES (:feltverdi)";
    $sql = "INSERT INTO 'tabell' ('feltnavn')
            VALUES (?)";

    //feilsøking
    $sp->debugDumpParams();
?>