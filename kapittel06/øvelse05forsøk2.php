<?php
    function melding($melding) {
        echo "<br><strong>" . $melding . "</strong><br>";
    }
    $spilletigang = true;
    
    function lottobrett () {
        $ord = array (
            "glass", "glass", 
            "kaffe", "kaffe", 
            "kronprins", "kronprins",
            "piano", "piano", 
            "stol", "stol", 
            "lys", "lys",
            "TV", "TV", 
            "veranda", "veranda", 
            "butikk", "butikk",
            "sverd", "sverd", 
            "pannekake", "pannekake", 
            "brannmaneit", "brannmaneit",
            "heisekran", "heisekran", 
            "hytte", "hytte", 
            "skap", "skap",
            "lyn", "lyn", 
            "asteroide", "asteroide", 
            "teppe", "teppe"
        );
        shuffle($ord);
        return $ord;
    }

    if(!isset($_REQUEST['valgt'])) {
        $ord = lottobrett();
    } else {
        if(isset($_REQUEST['valgteRuter'])) {
            $ord = $_REQUEST['rutematrise'];
            $valgteRuter = $_REQUEST['valgteRuter'];
            echo "<pre>";
            print_r($_REQUEST);
            echo "</pre>";
            if(count($valgteRuter) <= 1) {
                melding("Velg to ruter");
            } else {
                if(count($valgteRuter) > 2) {
                    $valgteRuter =array_splice($valgteRuter, 0, 2);
                }
                melding("Valgte ruter: $valgteRuter[0] og $valgteRuter[1]");

                if($valgteRuter[0] == $valgteRuter[1]) {
                    echo "To like valgt!";
                    $ordnøkkel = array_search($valgteRuter[0], $ord);
                    unset($ord[$ordnøkkel]);
                    $ordnøkkel = array_search($valgteRuter[0], $ord);
                    unset($ord[$ordnøkkel]);
                    $ord = array_values($ord);
                    $turteller = $_REQUEST['turteller'];
                    $s1poeng =  $_REQUEST['s1poeng'];
                    $s2poeng =   $_REQUEST['s2poeng'];
                    if($turteller%2 == 0){
                        $s1poeng++;
                        $_REQUEST['s1poeng'] = $s1poeng;
                    } else {
                        $s2poeng++;
                        $_REQUEST['s2poeng'] = $s2poeng;
                    }
                } else {
                    echo "Beklager! feil!";
                }
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 15px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto</title>
</head>
<body>
    <?php 
    if(!isset($_REQUEST['startet']) && !isset($_REQUEST['valgt'])) { ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="spiller1" placeholder="spiller 1 navn">
        <input type="text" name="spiller2" placeholder="spiller 2 navn">
        <input type="hidden" name="s1poeng" value=0>
        <input type="hidden" name="s2poeng" value=0>
        <input type="hidden" name="turteller" value=1>
        <input type="submit" value="start spill" name="startet">
        </form>
    <?php     
        } ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <?php
            if(isset($_REQUEST['turteller']) && $spilletigang) {
                $spiller1 = $_REQUEST['spiller1'];
                $spiller2 = $_REQUEST['spiller2']; 
                $s1poeng = $_REQUEST['s1poeng'];
                $s2poeng = $_REQUEST['s2poeng'];
                $hovedteller = 0;
                $tellegrense = count($ord);

                echo "Resultat: " . $spiller1 . " har " . $s1poeng . " poeng. - " . $spiller2 . " har " . $s2poeng . " poeng";
                
                $turteller = $_REQUEST['turteller'];
                if($turteller%2 != 0){
                    melding($spiller1 . " sin tur:");
                } else {
                    melding($spiller2 . " sin tur:");
                }

                        $i=1;
                        while($i<=6 && $hovedteller < $tellegrense) {
                            echo "<tr>";
                            $j=1;
                            while($j<=6 && $hovedteller < $tellegrense) {
                                echo "<td> RUTE " . $hovedteller+1 . '<input type="checkbox" name="valgteRuter[]" value="' . $ord[$hovedteller] . '"></td>';  
                                echo '<input type="hidden" name="rutematrise[' . $hovedteller . ']" value="' . $ord[$hovedteller] . '">';
                                $hovedteller++;
                                $j++;
                            }
                            echo "</tr>";
                            $i++;
                        }            
        echo '</table>';
        $turteller++;
        echo '<input type="hidden" name="spiller1" value="' . $spiller1 . '">';
        echo '<input type="hidden" name="spiller2" value="' . $spiller2 . '">';
        echo '<input type="hidden" name="s1poeng" value="' . $s1poeng . '">';
        echo '<input type="hidden" name="s2poeng" value="' . $s2poeng . '">';
        echo '<input type="hidden" name="turteller" value="' . $turteller . '"> '; 
        echo '<input type="submit" value="velg" name="valgt">';
        echo  '</form>';

        if(count($ord) == 0) {
            melding("SPILLET ER OVER! <br>");
            $spilletigang=false;
            if($s1poeng > $s2poeng) {
                melding($spiller1 . " vant spillet!");
            } elseif ($s1poeng < $s2poeng) {
                melding($spiller2 . " vant spillet!");
            } else {
                melding("Runda ble uavgjort!");
            }
        }
    
        } 
        ?>
</body>
</html>