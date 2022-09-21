<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forening</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="checkbox" name="Svømming">Svømming<br>
        <input type="checkbox" name="Tegning">Tegning<br>
        <input type="checkbox" name="Dans">Dans<br>
        <input type="checkbox" name="Biljard">Biljard<br>
        <input type="checkbox" name="Fotball">Fotball<br>
        <input type="checkbox" name="Badmington">Badmington<br>
        <input type="checkbox" name="Baking">Baking<br>
        <input type="submit" value="velg" name='valgt'><br>
    </form>
    <?php
        if(isset($_REQUEST['valgt'])) {
            $interessematrise = array();
            foreach ($_REQUEST as $key => $value) {
                if($value!=$_REQUEST['valgt']) {
                    $interessematrise[]=$key;
                }
            }
            sort($interessematrise);
            echo "<strong><br><br>Interesser:</strong><br>";
            foreach ($interessematrise as $key => $value) {
                echo $value . "<br>";
        }
        }
    ?>
</body>
</html>