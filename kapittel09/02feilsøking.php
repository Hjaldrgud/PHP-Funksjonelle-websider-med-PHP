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

    $sql = "SELECT * FROM medlemmer WHERE fornavn = 'Matheo';";
    
    $sp = $pdo->prepare($sql);

    //$pdo->debugDumpParams();
?>