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

    //1
    $sql = "SELECT m.fnavn, m.gateadresse, m.postnr, p.poststed 
            FROM medlemmer AS m LEFT OUTER JOIN postadresser AS p
            ON (m.postnr = p.postnr) WHERE m.postnr > :postnr";
    //2
    $sp = $pdo->prepare($sql);
    //3
    $sp->bindParam(':postnr', $postnr, PDO:PARAM_INT);
    $postnr = 9400;
    //4
    try {
        $sp->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }
    //5
    $medlemmer = $sp->fetchAll(PDO::FETCH_OBJ);
    if($sp->rowCount > 0) {
        foreach ($medlemmer as $medlem) {
            echo $medlem->fnavn . ", ";
            echo $medlem->gateadresse . ", ";
            echo $medlem->postnr . ", ";
            echo $medlem->poststed . "<br>";
        }
    } else {
        echo "Spørringen returnerte ingen oppføringer";
    }
?>