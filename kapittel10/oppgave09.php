<?php
    if(isset($_REQUEST['fargerValgt'])) {
        setcookie("bakgrunnsfarge", $_REQUEST['bakgrunnsfarge'], time()+3600, "/");
        setcookie("skriftfarge", $_REQUEST['skriftfarge'], time()+3600, "/");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>

    <?php   if(isset($_COOKIE['bakgrunnsfarge']) && isset($_COOKIE['skriftfarge'])) { ?>
                body {
                    background-color: <?php echo $_COOKIE['bakgrunnsfarge'] ?>;
                }
                p {
                    color: <?php echo $_COOKIE['skriftfarge'] ?>;
                }
    <?php   } else { ?>
                body {
                    background-color: #808080;
                }
                p {
                    color: #a7a7a7;
                }
    <?php   }
        ?>

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="color" name="skriftfarge">
        <input type="color" name="bakgrunnsfarge">
        <input type="submit" value="oppdater" name="fargerValgt">
    </form>
    <br>
    <strong><p>Her skriver vi noe. Her vil teksten skifte farge. infokapslene er gyldige i en time (3600 min).
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p></strong>
</body>
</html>