<?php
include_once("øvelse04  (medlemsskjema).inc.php");
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
    <?php 

    if(!isset($_REQUEST['sendt'])) {
        medlemsskjema("Navn", "Telefonnummer", "Epost"); 
    } else {
        medlemsskjema($_REQUEST['navn'], $_REQUEST['tlf'], $_REQUEST['epost']);  
    }
        
    
    if(isset($_REQUEST['sendt'])) {
        echo "<br><br> Nytt medlem lagt til <br>";
        echo $_REQUEST['navn'] . "<br>";
        echo $_REQUEST['tlf'] . "<br>";
        echo $_REQUEST['epost'] . "<br>";
    }
    
    ?>

</body>
</html>