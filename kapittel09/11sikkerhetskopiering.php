<?php

    define("DS", DIRECTORY_SEPARATOR);
    $database = "Test";
    $bruker = "bruker";
    $passord = "passord";
    $vert = "localhost";
    $kat = dirname(__FILE__) . DS . "test.sql";

    $mysqlkat = "C:" . DS . "xampp" . DS . "mysql" . DS . "bin";
    $mysqldump = $mysqlkat . DS . "mysqldump";

    echo "<h3>Sikkerhetskopi</h3>";
    echo "Database: <code>{$database}</code> <br>";
    echo "Destinasjon: <code>{$kat}</code><br>";

    exec("{$mysqldump} --user={$bruker} --password={$passord} --host={$vert} {$database} > {$kat} 2>&1", $utdata);
    echo "Ev. utdata fra kommandoen som kjøres ";
    var_dump($utdata);
    
?>