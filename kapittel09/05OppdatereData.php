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

    //1 lage mal
    $sql = "UPDATE medlemmer SET gateadresse = :gateadresse, postnr = :postnr, poststed = :poststed WHERE ID = :id";

    //2. Forberede spørring:
    $sp = $pdo->prepare($sql);
    //3. Binder plassholdere til faktiske verdier
    $sp->bindParam(':gateadresse', $gateadresse, PDO::PARAM_STR);
    $sp->bindParam(':postnr', $postnr, PDO::PARAM_INT);
    $sp->bindParam(':poststed', $poststed, PDO::PARAM_STR);
    $sp->bindparam(':id', $id, PDO::PARAM_INT);

    $gateadresse = "Storbyveien 1";
    $postnr = "9999";
    $poststed = "Storby";
    $id = 1;

    //4. Vi kjører spørringen
    try {
        $sp->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }

    //5. vi kontrollerer spørringen
    if($sp->rowCount() > 0 ) {
        echo $sp->rowCount() . " oppføring ble oppdatert.";
    } else {
        echo "Oppføringen ble ikke oppdatert.";
    }
?>