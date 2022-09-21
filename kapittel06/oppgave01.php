<?php
    //Lag et skript som viser forskjellige bilder basert på valg fra radioknapper
    if(isset($_REQUEST['valgt'])) {
        /* 
        $i = 1;
         foreach ($_REQUEST as $key => $value) {
            echo "nøkkel: " . $key . " og verdi: " . $value;
            echo "<br>" . $i .  "<br>";
            $i++;
        } 
        */
        if($_REQUEST['bf'] == "1942") {
            echo "<img src=\"Battlefield_1942.jpg\" width=\"200\">";
        } elseif($_REQUEST['bf'] == "Vietnam") { ?>
            <img src="Battlefield_Vietnam.jpg" width="200">
        <?php } elseif($_REQUEST['bf'] == "2") { ?>
            <img src="Battlefield_2.jpg" width="200"> 
        <?php }
    }
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
    


    <br>
    <form name="bf" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Battlefield 1942: <input type="radio" name="bf" value="1942"><br>
    Battlefield Vietnam: <input type="radio" name="bf" value="Vietnam"><br>
    Battlefield 2: <input type="radio" name="bf" value="2"><br>
    <input type="submit" name="valgt" value="Velg bilde">
    </form>
</body>
</html>