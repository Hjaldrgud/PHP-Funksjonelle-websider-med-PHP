<?php
    $brukerinfo = array (
        'fornavn' => "Andreas",
        'etternavn' => "Lauvhjell",
        'mobilnummer' => "98118852"
    );

    $endremelding="";
    if(isset($_REQUEST['endret'])) {
        if($brukerinfo['fornavn'] != $_REQUEST['fornavn']) {
            $endremelding = "Fornavnet har blitt endret fra " . $brukerinfo['fornavn'] . " til " . $_REQUEST['fornavn'] . ".<br>";
        }
        if($brukerinfo['etternavn'] != $_REQUEST['etternavn']) {
            $endremelding .=  "Etternavnet har blitt endret fra " . $brukerinfo['etternavn'] . " til " . $_REQUEST['etternavn'] . ".<br>";
        }
        if($brukerinfo['mobilnummer'] != $_REQUEST['mobilnummer']) {
            $endremelding .=  "Mobilnummeret har blitt endret fra " . $brukerinfo['mobilnummer'] . " til " . $_REQUEST['mobilnummer'] . ".<br>";
        }
    }

    if(isset($_REQUEST['endret'])){
        $brukerinfo['fornavn'] = $_REQUEST['fornavn'];
        $brukerinfo['etternavn'] = $_REQUEST['etternavn'];
        $brukerinfo['mobilnummer'] = $_REQUEST['mobilnummer'];
    }
    $fornavn = $brukerinfo['fornavn'];
    $etternavn = $brukerinfo['etternavn'];
    $mobil = $brukerinfo['mobilnummer'];
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="fornavn" value="<?php echo $fornavn ?>"><br>
        <input type="text" name="etternavn" value="<?php echo $etternavn ?>"><br>
        <input type="text" name="mobilnummer" value="<?php echo $mobil ?>"><br>
        <input type="submit" value="endre" name="endret">
    </form> <br><br><br>
    <?php
        echo $endremelding;
        echo "<br><br>";
        echo "<strong> Medlemsinfo </strong><br>";
        echo "Fornavn: " . $fornavn . "<br>";
        echo "Etternavn: " . $etternavn . "<br>";
        echo "Mobilnummer: " . $mobil . "<br>";
    ?>
</body>
</html>