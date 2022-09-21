<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medlemmer</title>
</head>
<body>
    <table>
        <tr>
            <th>Medlemsnavn:</th>
        </tr>
        <?php
            include_once("PDOgenerering.inc.php");
            $sql = "SELECT m_fnavn, m_enavn FROM medlemmer ORDER BY m_enavn";
            $sp = $pdo->prepare($sql);

            try {
                $sp->execute();
            } catch (PDOException $e) {
                echo $e->getMessage() . "<br>";
            }

            $medlemmer = $sp->fetchAll(PDO::FETCH_OBJ);
            if($sp->rowCount() > 0) {
                foreach ($medlemmer as $medlem) {
                    echo "<tr>";
                    echo "<td>" . $medlem->m_fnavn . " " . $medlem->m_enavn . "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>