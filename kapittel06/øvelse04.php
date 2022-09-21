<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordbok</title>
</head>
<body>
    <?php

    if(isset($_REQUEST['nyttord'])) {
        //prøve å hente tibake ordboka
        $ordbok = array();
        $ordbok = $_REQUEST['ordbok'];
        print_r($_REQUEST);
    } else {
        $ordbok = array(
            'smør' => "butter",
            'iskrem' => "ice cream",
            'papir' => "paper",
            'snegle' => "snail"
        );
        echo "<pre>";
        print_r($ordbok);
        echo "</pre>";
    }


    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Norsk ord: <input type="text" name="norsk">
        Engelsk ord: <input type="text" name="engelsk"> <br>
        <input type="submit" value="legg til" name=nyttord><br>
        <?php
        if(isset($_REQUEST['nyttord'])) {
            //Ulike forsøk på å sende hele ordboka igjennom
            $_REQUEST['ordbok'] = $ordbok;
            #array_push($_REQUEST['ordbok'], $ordbok);
            
            //og det nye ordet
            $_REQUEST['ordbok'][$_REQUEST['norsk']] = $_REQUEST['engelsk'];
            echo "<pre>";
            print_r($_REQUEST);
            echo "<br></pre>";
        }
    ?>
    </form>
</body>
</html>