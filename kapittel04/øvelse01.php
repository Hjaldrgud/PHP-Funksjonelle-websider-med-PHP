<html>
    <style>
        table, td, tr, th {
        border: 1px solid black;
        }
    </style>
    <body>
        <table>
            <tr>
                <th>Celsius</th>
                <th>Fahrenheit</th>
            </tr>
            <?php
                for($g=0; $g<=100; $g+=5) {
                    echo             
                    "<tr>
                        <td>". $g ."</td>
                        <td>". 1.8 * $g + 32 ."</td>
                    </tr>";
                }
            ?>
        </table>
    </body>
</html>