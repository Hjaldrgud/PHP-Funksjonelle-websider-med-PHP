<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
    <table>
        <?php
            $tall = range(1,70);
            shuffle($tall);
            for($i=1; $i<=5; $i++){
                echo "        
                <tr>";
                for($j=1; $j<=5; $j++){
                    $bingorute= array_shift($tall);
                    echo "<td> " . ($bingorute < 10 ? "0":"") . $bingorute . " </td>";
                }
                echo "</tr>";
            }

        ?>
    </table>
</body>
</html>