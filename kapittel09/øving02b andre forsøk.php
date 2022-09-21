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
            function aktivitetsliste($distinkteaktiviteter){
                $akt = "";
                foreach ($distinkteaktiviteter as $aktivitet) {
                    $akt .= $aktivitet->akt_navn . ", ";
                }
                $akt = substr($akt, 0, -2);
                return $akt;
            }


        include_once("PDOgenerering.inc.php");
        $sql = "SELECT * FROM medlemmer";


        $sp = $pdo->prepare($sql);
        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }
        $medlemmer = $sp->fetchAll(PDO::FETCH_OBJ);
        if($sp->rowCount() > 0 ) {
            foreach ($medlemmer as $medlem) {
                $sql = "SELECT * FROM avtaler AS av INNER JOIN kommendeakt AS ka
                ON (av.kom_id = ka.kom_id)
                WHERE av.m_id = $medlem->m_id AND ka.startdato < current_timestamp()";
                $sp = $pdo->prepare($sql);
                try {
                    $sp->execute();
                } catch (PDOException $e) {
                    echo $e->getMessage() . "<br>";
                }
                $antallganger = $sp->fetchAll(PDO::FETCH_OBJ);
                
                $sql = "SELECT DISTINCT akt_navn 
                        FROM aktiviteter AS akt INNER JOIN kommendeakt AS ka ON (akt.akt_id = ka.akt_id)
                        INNER JOIN avtaler AS av ON (av.kom_id = ka.kom_id)
                        WHERE av.m_id=$medlem->m_id AND ka.startdato < current_timestamp()
                        
                ";
                $sp = $pdo->prepare($sql);
                try {
                    $sp->execute();
                } catch (PDOException $e) {
                    echo $e->getMessage() . "<br>";
                }
                $distinkteaktiviteter = $sp->fetchAll(PDO::FETCH_OBJ);
                echo "<tr>";
                echo "<td>" . $medlem->m_fnavn . " " . $medlem->m_enavn . "</td>";
                echo "<td>" . count($antallganger) . "</td>";
                echo "<td>" . aktivitetsliste($distinkteaktiviteter) . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>