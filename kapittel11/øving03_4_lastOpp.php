<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last opp</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['bruker'])){
            foreach ($_SESSION['bruker'] as $key => $value) {
                echo $key . ": " . $value . "<br>";
            }
        }
    ?>
</body>
</html>