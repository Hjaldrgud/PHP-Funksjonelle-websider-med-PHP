<html>
    <style>
        table, td, tr, th {
        border: 1px solid black;
        }
</style>
        <body>
            <table>
                <?php
                echo "<tr><th> </th>";
                for($i=11; $i<=20; $i++) {
                    echo "<th>" . $i . "</th>";
                }
                echo "</tr>";
                for($i=11; $i<=20; $i++) {
                    echo "<tr><th>" . $i . "</th>";
                    for ($j=11; $j<=20; $j++) {
                        echo "<td>" . $i*$j . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
</table>
</body>
</html>



<?php
    for($i=11; $i<=20; $i++) {
        for($j=1; $j<=20; $j++) {
           //echo $i . " ganger " . $j . " er lik " . $i*$j . "<br>";
        }
    }
?>