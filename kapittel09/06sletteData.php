<?php
    require_once("PDOgenerering.inc.php");

    /*
    Prosessen med forberedte spørringer består av fem steg:
        1 Vi lager en mal for spørringa hvor de faktiske verdiene i selve spørringen utelates. De erstattes med plassholdere som enten er navngitte (feks :fornavn) eller ikke-navngitte (hver verdi erstattes med et spmtegn)
        2 Vi forbereder databasen på spørringen ved å kjøre malen ovenfor mot DBen
        3 Vi binder plassholderne i malen til faktiske verdier lagret i variabler
        4 Vi kjører spørringen mot DBen
        5 Vi kontrollerer spørringen
    */

    //1. vi lager mal for spørringa
    $sql = "DELETE FROM medlemmer WHERE ID = :id";
    //2 vi forbereder DB
    $sp=$pdo->prepare($sql);
    //3. Vi binder plassholdere til faktiske verdier:
    $sp->bindParam(':id', $id, PDO::PARAM_INT);
    $id = 1;
    //4. Vi kjører spørringa
    try {
        $sp->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }
    //5. Vi kontrollerer kjøringa
    if($sp->rowCount() > 0) {
        echo $sp->rowCount() . " oppføring ble slettet"; 
    } else {
        echo "Oppføringa ble ikke sletta";
    }

?>