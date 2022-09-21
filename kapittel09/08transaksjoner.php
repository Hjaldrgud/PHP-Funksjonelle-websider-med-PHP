<?php
    require_once("PDOgenerering.inc.php");

    $pdo->beginTransaction();
    $sql = "INSERT INTO medlemmer (fnavn, enavn) VALUES (:fnavn, :enavn)";

    $sp = $pdo->prepare($sql);
    $sp->bindParam(':fnavn', $fnavn, PDO::PARAM_STR);
    $sp->bindParam(':enavn', $enavn, PDO::PARAM_STR);
    $fnavn = "Silje"; 
    $enavn = "Johansen";

    //Aj! Ikke try-catch blokk. ikkje braaa
    $sp->execute();
    $sp->execute();

    $pdo->rollback();

    $pdo->commit();

    //ALLTID Innlemme execute() i try-catch
    try {
        $sp->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }
    //&&
    //Sjekke om våre data ble lagret i databasen
    if($pdo->lastInsertId() > 0) {
        echo "Dataene er satt inn i tabellen.";
        $pdo->commit();
    } else {
        echo "Dataene er ikke satt inn i tabellen.";
        $pdo->rollback();
    }

?>