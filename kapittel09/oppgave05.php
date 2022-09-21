<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legg til bøker</title>
</head>
<body>
    <?php
    // ACHTUNG! HTML OG SQL HATER ÆØÅ!


        include_once("PDOgenerering.inc.php");

        $sql = "SELECT * FROM forfattere";
        $sp = $pdo->prepare($sql);
        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . " . Noe med DB feilet.<br>";
        } ?>
        <strong>FORFATTERES NAVN OG ID</strong>
        <table>
            <tr>
                <th>ID</th>
                <th>FORNAVN</th>
                <TH>ETTERNAVN</TH>
            </tr>
        <?php
        $forfattere = $sp->fetchAll(PDO::FETCH_OBJ);
        if($sp->rowCount() > 0) {
            foreach ($forfattere as $forfatter) {
                echo "<tr>";
                echo "<td>" . $forfatter->ID . "</td>";
                echo "<td>" . $forfatter->fornavn . "</td>";
                echo "<td>" . $forfatter->etternavn . "</td>";
                echo "</tr>";
            }

        } else {
            echo "Spørringen returnerte ingen oppføringer";
        }
        ?>
        </table>
        <br>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="number" name="ID" PLACEHOLDER="ID til forfatter">
        <input type="text" name="tittel" PLACEHOLDER="boktittel">
        <input type="number" name="utgivelsesaar" PLACEHOLDER="Utgivelsesår (YYYY)">
        <input type="submit" value="Legg til" name="lagtTil">
    </form>
    <?php
        if(isset($_REQUEST['lagtTil'])) {
            $pdo->beginTransaction();
            $sql = "INSERT INTO bøker (tittel, fk_forfID, utgivelsesår)
                    VALUES (:tittel, :f_id,  :utgivelsesaar)"; //ACHTUNG! KAN IKKE HA ÆØÅ PÅ VALUES! 
            $sp = $pdo->prepare($sql);

            $sp->bindParam(':tittel', $tittel, PDO::PARAM_STR);
            $sp->bindParam(':f_id', $f_id, PDO::PARAM_INT);
            $sp->bindParam(':utgivelsesaar', $utgivelsesår, PDO::PARAM_INT);

            $tittel = $_REQUEST['tittel'];
            $f_id = $_REQUEST['ID'];
            $utgivelsesår = $_REQUEST['utgivelsesaar'];
            
            if($utgivelsesår < -2100 || $utgivelsesår > date('Y')) {
                echo "Ugyldig årstall. Boka må være utgitt en gang mellom 2100 f.kr (Gilgamesh-eposet) og gjeldende år (" . date('Y') . ") <br>";
            } else {
                try {
                    $sp->execute();
                } catch (PDOException $e) {
                    echo $e->getMessage() . "<br>";
                }
            }
    
            if($pdo->lastInsertid() > 0) {
                echo "Bok ble lagt til i DBen.<br>";
                $pdo->commit();
            } else {
                echo "Bok ble ikke lagt til i DBen.<br>";
                $pdo->rollback();
            }
        }
    ?>
</body>
</html>