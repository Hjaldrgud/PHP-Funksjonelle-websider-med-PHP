<?php
    function vask ($var) {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innlogging</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Brukernavn <br>
        <input type="text" name="brukernavn"><br>
        Passord <br>
        <input type="password" name="passord"><br>
        <input type="submit" value="Logg inn" name="innlogga">
    </form>
    <?php
        $brukerinfo = array(
            "lauvhjell"=>md5("test"),
            "froya"=>md5("Whippet"),
            "Lellek"=>md5("fotball")
        );
        if(isset($_REQUEST['innlogga'])) {            
            $brukernavn = vask($_REQUEST['brukernavn']);
            $passord = md5(vask($_REQUEST['passord'])); 
            echo "<br>";
            if(array_key_exists($brukernavn, $brukerinfo) && in_array($passord, $brukerinfo)) {
                echo "Innlogging vellykket. <br>"; 
            } else {
                echo "Brukernavn eller passord er feil.";
            }
        }
    ?>
</body>
</html>