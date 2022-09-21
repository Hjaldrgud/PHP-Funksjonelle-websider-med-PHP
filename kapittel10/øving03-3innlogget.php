<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Øving03 Innlogget</title>
</head>
<body>
    <?php 
        if(isset($_REQUEST['id']) && $_SESSION['medlem']['innlogget']) {
            if($_REQUEST['id'] == $_SESSION['medlem']['id']) {
                echo "Dette gikk fint. din ID stemmer overens med sida du ønsker å se";
            }
        } else {
            echo "Du må logge inn på nettsiden først.";
        }
    ?>
</body>
</html>