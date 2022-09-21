<?php
    $brukerinfo = array (
        'fornavn' => "Andreas",
        'etternavn' => "Lauvhjell",
        'mobilnummer' => "98118852"
    );

    if(isset($_REQUEST['endret'])){
        $brukerinfo['fornavn'] = $_REQUEST['fornavn'];
        $brukerinfo['etternavn'] = $_REQUEST['etternavn'];
        $brukerinfo['mobilnummer'] = $_REQUEST['mobilnummer'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="fornavn" value="<?php echo $brukerinfo['fornavn'] ?>"><br>
        <input type="text" name="etternavn" value="<?php echo $brukerinfo['etternavn'] ?>"><br>
        <input type="text" name="mobilnummer" value="<?php echo $brukerinfo['mobilnummer'] ?>"><br>
        <input type="submit" value="endre" name="endret">
    </form> <br><br><br>
</body>
</html>