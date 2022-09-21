<?php
    function lottobrett () {
        $ord = array (
            "glass", "glass", "kaffe", "kaffe", "kronprins", "kronprins",
            "piano", "piano", "stol", "stol", "lys", "lys",
            "TV", "TV", "veranda", "veranda", "butikk", "butikk",
            "sverd", "sverd", "pannekake", "pannekake", "brannmaneit", "brannmaneit",
            "heisekran", "heisekran", "hytte", "hytte", "skap", "skap",
            "lyn", "lyn", "asteroide", "asteroide", "teppe", "teppe"
        );
        shuffle($ord);
        return $ord;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>
<body>
    <?php

        $ord = lottobrett();
        $i=0;
        $brett = array (
            'rad1' => array (
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++]
            ),
            'rad2' => array (
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++]
            ),
            'rad3' => array (
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++]
            ),
            'rad4' => array (
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++]
            ),
            'rad5' => array (
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++]
            ),
            'rad6' => array (
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++],
                $ord[$i++]
            )
        );

        print_r($brett);

    ?> 
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table>
        <?php 
        $i = 1;
        foreach ($brett as $key => $value) { 
            
            echo "<tr>";
            foreach ($brett[$key] as $key2 => $value2) {
                
            ?>
                <td>
                    Rute <?php echo $i<10 ? "0".$i : $i; ?><input type="checkbox" name="ruter[]" value="<?php echo $value2; ?>">
                </td>                
            <?php 
                $i++;
            }

            echo "</tr><br>";
        }
        ?>
        </table>   
        <input type="submit" value="sjekk" name="gjetta">         
    </form>
    <?php
        if(isset($_REQUEST['gjetta'])) {
            $ruter = array_slice($_REQUEST['ruter'], 0, 2, true);
            foreach ($ruter as $value) {
                echo $value . "<br>";
            }
            if(count(array_count_values($ruter))==1 && count($ruter)>1){
                echo "To like!"; 
            } else {
                echo "feil.";
            }
        }
    ?>
</body>
</html>