<?php
    /*
    Prosessen med forberedte spørringer består av fem steg:
        1 Vi lager en mal for spørringa hvor de faktiske verdiene i selve spørringen utelates. De erstattes med plassholdere som enten er navngitte (feks :fornavn) eller ikke-navngitte (hver verdi erstattes med et spmtegn)
        2 Vi forbereder databasen på spørringen ved å kjøre malen ovenfor mot DBen
        3 Vi binder plassholderne i malen til faktiske verdier lagret i variabler
        4 Vi kjører spørringen mot DBen
        5 Vi kontrollerer spørringen
    */

    require_once("PDOgenerering.inc.php");
    
    //1. Lager mal
    $sql = "SELECT * FROM medlemmer WHERE fnavn = :fnavn";
    //2. Vi forbereder DBen
    $sp = $pdo->prepare($sql);
    //3. Vi binder plassholdere til faktiske verdier
    $sp->bindParam(':fnavn', $fnavn, PDO::PARAM_STR);
    $fnavn = "Silje";
    
    //4. Vi kjører spørringen
    try{
        $sp->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
        //Denne feilmeldinga bør vi logge istedenfor å skrive ut på skjermen
    }

    $medlemmer = $sp->fetchAll(PDO::FETCH_OBJ);
    if($sp->rowCount() > 0) {
        foreach ($medlemmer as $medlem) {
            echo $medlem->fnavn . " ";
            echo $medlem->enavn . ", ";
            echo $medlem->epost . "<br>";
        }
    } else {
        echo "Spørringen returnerte ingen oppføringer";
    }



?>