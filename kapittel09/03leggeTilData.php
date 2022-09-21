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

    /*
    Prosessen med forberedte spørringer består av fem steg:
        1 Vi lager en mal for spørringa hvor de faktiske verdiene i selve spørringen utelates. De erstattes med plassholdere som enten er navngitte (feks :fornavn) eller ikke-navngitte (hver verdi erstattes med et spmtegn)
        2 Vi forbereder databasen på spørringen ved å kjøre malen ovenfor mot DBen
        3 Vi binder plassholderne i malen til faktiske verdier lagret i variabler
        4 Vi kjører spørringen mot DBen
        5 Vi kontrollerer spørringen
    */

    // 1. legge til data FS:
    $sql = "INSERT INTO medlemmer (datoOprettet, fnavn, enavn, epost)
            VALUES (:datooprettet, :fornavn, :etternavn, :epost)";

    //2. Forberede DB på spørringen:
    $sp = $pdo->prepare($sql);

    //3.a Binde variabler til plassholdere:
    $sp->bindParam(':datoOpprettet', $datoOpprettet);
    $sp->bindparam(':fnavn', $fnavn, PDO::PARAM_STR);
    $sp->bindparam(':enavn', $enavn, PDO::PARAM_STR);
    $sp->bindparam(':epost', $epost, PDO::PARAM_STR);

    //3.b Tilordne verdier til variablene:
    $dts = new DateTimeZone("Europe/Berlin");
    $dn = new DateTime("now", $dts);
    $datoOpprettet = $dn->format("Y-m-d H:i:s");
    $fnavn = "Silje";
    $enavn = "Johansen";
    $epost = "***@***.no";

    //4. Utføringen av spørrelsen til DB:
    try {
        $sp->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }

    //5. Sjekke om dataene våre ble lagret i databasen
    if($pdo->lastInsertId() > 0 ) {
        echo "Dataene er satt inn i tabellen";
    } else {
        echo "Dataene ble ikke satt inn i tabellen";
    }
?>