<?php
    session_start();
    if(isset($_REQUEST['gjenopprettet'])) {
        unset($_REQUEST['sendt']);
    }
    if(isset($_REQUEST['sendt'])) {
        $_SESSION['knappvalg'] = $_REQUEST['sendt'];
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
    <?php 
        if(!isset($_REQUEST['sendt']) || $_SESSION['knappvalg'] == "knapp 1") {
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="submit" value="knapp 1" name="sendt">
        </form>
    <?php 
        }
        if(!isset($_REQUEST['sendt']) || $_SESSION['knappvalg'] == "knapp 2") {
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="submit" value="knapp 2" name="sendt">
        </form>
    <?php 
        }
    ?>
        <br><br>
        <?php if(isset($_REQUEST['sendt'])){ ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="submit" value="gjenopprett" name="gjenopprettet">
        </form>
        <?php } ?>
</body>
</html>