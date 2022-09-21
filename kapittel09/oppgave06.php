<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bøker</title>
</head>
<body>
    <strong>Bøker:</strong>
    <table>
        <tr>
            <th>Tittel</th>
            <th>Utgivelsesår</th>
        </tr>
        <?php
        include_once("PDOgenerering.inc.php");
        $sql = "SELECT tittel, utgivelsesår FROM bøker";
        $sp = $pdo->prepare($sql);
        
        try {
            $sp->execute();
        } catch (Exception $e) {
            echo $e->getMessage() . "<br>";
        }

        $bøker = $sp->fetchAll(PDO::FETCH_OBJ);
        if($sp->rowcount() > 0) {
            foreach ($bøker as $bok) {
                echo "<tr>";
                echo "<td>" . $bok->tittel . "</td>";
                echo "<td>" . $bok->utgivelsesår . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>