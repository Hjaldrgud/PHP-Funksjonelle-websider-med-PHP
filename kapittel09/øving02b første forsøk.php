<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitetslogg</title>
</head>
<body>
    <table>
        <tr>
            <th>Medlemsnavnet</th>
            <th>Totalt antall aktiviteter</th>
            <th>Aktiviteter medlemmet har vært med på</th>
        </tr>
        <?php
        include_once("PDOgenerering.inc.php");
        $sql = "SELECT m.m_fnavn, m.m_enavn, av.av_id, akt.akt_navn, ka.startdato, ka.sluttdato 
        FROM medlemmer AS m 
        INNER JOIN avtaler AS av ON (m.m_id = av.m_id)
        INNER JOIN kommendeakt AS ka ON (ka.kom_id = av.kom_id)
        INNER JOIN aktiviteter AS akt ON (ka.akt_id = akt.akt_id)
        ORDER BY m.m_enavn
        ";


        $sp = $pdo->prepare($sql);
        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }
        $medlemmer = $sp->fetchAll(PDO::FETCH_OBJ);
        if($sp->rowCount() > 0 ) {
            foreach ($medlemmer as $medlem) {
                echo "<pre>";
                print_r($medlem);
                echo "</pre>";
                /* echo "<tr>";
                echo "<td>" . $medlem->m_fnavn . " " . $medlem->m_enavn . "</td>";
                echo "</tr>"; */
            }
        }
        ?>
    </table>
</body>
</html>