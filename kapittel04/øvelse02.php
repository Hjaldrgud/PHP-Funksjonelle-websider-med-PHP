<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        table, td, tr, th {
        border: 1px solid black;
        }
    </style>
<body>

    <table>
        <tr>
            <th>ÅR</th>
            <th>MÅNED</th>
            <th>LENGDE</th>
            <th>MM VOKST</th>
        </tr>
    <?php
        $lengdemin = $lengdestart = 1660;
        $lengdemax = 2413;
        $diff = $lengdemax - $lengdemin;
        for($m=1; $m<=132; $m++) {
            $lengdemin+=($diff/11/12);
            echo "    
            <tr>
                <td>".(floor($m/12)+1)."</td>
                <td>".$m."</td> 
                <td>".round($lengdemin)."</td>
                <td>".round($lengdemin-$lengdestart)."</td> 
            </tr>";

        }
    ?>
    </table>

</html>
</body>
</html>