
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Øvelse 6.4</title>
</head>
<body>
<strong>NORSK-ENGELSK ORDBOK:</strong>
<?php
    if(!isset($_REQUEST['lagtTil'])){
        $ordbok = array('snegle'=>"snail", 'hoppe'=>"jump", 'ta'=>"grab", 'selv'=>"self");
        $_REQUEST['ordbok'] = $ordbok;
    } else{ //Hadde denne delen originalt nedenfor skjemaet med en (isset($_REQUEST['lagtTil']) og da klarte den ikke lagre.
        
        //For å gjøre det litt mer oversiktlig
        $norsk = $_REQUEST['norsk'];
        $engelsk = $_REQUEST['engelsk'];

        $_REQUEST['ordbok'][$norsk] = $engelsk;
        echo "<br>Ord lagt til. \"" . $_REQUEST['norsk'] . "\" oversatt til engelsk blir: \"" . $_REQUEST['engelsk'] . "\".<br>";
    }
    echo "<pre>";
    print_r($_REQUEST['ordbok']);
    echo "</pre>";
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="norsk" placeholder="norsk ord">
    <input type="text" name="engelsk" placeholder="engelsk ord"><br>
    <?php
        foreach ($_REQUEST['ordbok'] as $norsk => $engelsk) { 
            echo '<input type="hidden" name="ordbok[' . $norsk . ']" value="' . $engelsk . '">';
        }
    ?>
    <input type="submit" value="legg til" name="lagtTil">
    </form>
</body>
</html>