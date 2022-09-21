<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sende melding</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="navn" placeholder="Navn" size=24>
        <input type="email" name="epost" placeholder="Epost" size=40><br>
        <textarea name="melding" cols="59" rows="4" placeholder="Skriv inn melding her."></textarea><br>        
        <input type="submit" name="sendt" value="Send">
    </form> <br><br>

<?php
    function vask ($var) {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
    }

    function epostok ($var) {
        if(filter_var($var, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
            echo "<strong>Epost ikke godkjent</strong>";
        }
    }


    if(isset($_REQUEST['sendt'])) {
        $navn = filter_var(vask($_REQUEST['navn']), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_BACKTICK);
        if(epostok($_REQUEST['epost'])) {
            $epost = filter_var(vask($_REQUEST['epost']), FILTER_SANITIZE_EMAIL);
        }    
        $melding = vask($_REQUEST['melding']);
        
        echo "Avsender: " . $navn;
        echo "<br>Epost: " . $epost;
        echo "<br>Melding: <br>" . $melding;
    }
?>
</body>
</html>
