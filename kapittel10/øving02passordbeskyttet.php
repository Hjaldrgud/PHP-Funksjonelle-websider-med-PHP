<?php
    session_start();
    if(isset($_SESSION['bruker']['innlogget'])) {
        echo "Velkommen, " . $_SESSION['bruker']['fnavn'] . " " . $_SESSION['bruker']['enavn'] . "! <br><br>";
        echo "<pre>";
        print_r($_SESSION['bruker']);
        echo "</pre>";
    } else {
        header("Location: øving02innlogging.php");
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Innlogget</title>
        <br><br>
    </head>
    <body>
        <form action="øving02innlogging.php">
            <input type="submit" value="Logg ut" />
        </form>
    </body>
    </html>