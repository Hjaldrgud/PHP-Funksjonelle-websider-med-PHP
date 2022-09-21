<html>
    <style>
        table, td, tr, th {
        border: 1px solid black;
        }
</style>
    <body>
        <table>
            <tr>
                <?php
                    for($i=8; $i>=1; $i--) {
                        echo "<tr><th> " . $i . " </th>";
                        for($j=1; $j<=8; $j++) {
                            echo "<td> </td>";
                        }
                        echo "</tr>";
                    }
                    echo "<th> </th>";
                    for($i="A"; $i<="H"; $i++) {
                        echo "<th>" . $i . "</th>";
                    }
                ?>
            </tr>
</table>
</body>
</html>