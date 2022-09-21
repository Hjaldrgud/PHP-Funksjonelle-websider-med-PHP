<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Boktittel</th>
            <th>Forfatters navn</th>
        </tr>
<?php
        include_once("PDOgenerering.inc.php");
        $sql = "SELECT b.tittel, f.fornavn, f.etternavn 
                FROM bøker AS b INNER JOIN forfattere AS f
                ON (b.fk_forfID = f.ID)";
        $sp = $pdo->prepare($sql);
        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $bøkerOgForfattere = $sp->fetchAll(PDO::FETCH_OBJ);
        if($sp->rowCount() > 0 ) {
            foreach ($bøkerOgForfattere as $bok) {
                echo "<tr>";
                echo "<td>" . $bok->tittel . "</td>";
                echo "<td>" . $bok->fornavn . " " . $bok->etternavn . "</td>";
                echo "</tr>";
            } 
        } else {
            echo "Søket gav ingen oppføringer fra DBen.";
        }
?>
    </table>
</body>
</html>