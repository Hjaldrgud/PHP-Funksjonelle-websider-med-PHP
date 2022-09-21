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
            <th>DAG</th>
            <th>TEMPERATUR</th>
        </tr>
        <?php
            $temperaturer = array ();
            for ($i=1; $i<=30; $i++) {
                $temp = rand(10,34);
                $temperaturer[] = $temp;
                echo "        
                <tr>
                    <td>$i</td>
                    <td>$temp</td>
                </tr>";
            }        
        ?>
    </table>
        <?php
            $min=100;
            $maks = 0;
            $tempsum = 0;
            
            foreach($temperaturer as $temp) {
                $maks = $maks>=$temp ? $maks : $temp;
                $min = $min<=$temp ? $min : $temp;
                $tempsum +=$temp;
            }

            echo "<br><br>";
            echo $min . " er den laveste temperaturen.<br>";
            echo $maks . " er maks-temperaturen.<br>";
            echo ($min+$maks)/2 . " er medianen. <br>";
            echo $tempsum/count($temperaturer) . " er gjennomsnittstemperaturen.<br>";
        ?>



</body>
</html>