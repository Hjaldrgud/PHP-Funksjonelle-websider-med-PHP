<?php
    function sendEpost($til, $fra, $emne, $melding){
        $mhoder = "From: " . $fra . "\r\n" . 
                  "Reply-To: " . $fra . "\r\n" .
                  "X-Mailer: PHP/ " . phpversion();

        mail($til, $emne, $melding, $mhoder);
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
    <form action="" method="post">
        <input type="email" name="til" size="34" placeholder="Til@mail.no"><br>
        <input type="email" name="fra" size="34" placeholder="Fra@mail.com"><br>
        <input type="text" name="emne" size="34" placeholder="emne"><br>
        <textarea name="melding" placeholder="melding" cols="30" rows="10"></textarea><br>
        <input type="submit" value="send" name="innsendt">
    </form>
    <?php
        if(isset($_REQUEST['innsendt'])){
            echo "<br><br><br>";
            $til        = $_REQUEST['til'];
            $fra        = $_REQUEST['fra'];
            $emne       = $_REQUEST['emne'];
            $melding    = $_REQUEST['melding'];
            sendEpost($til, $fra, $emne, $melding);
            echo "<b>Melding blei sendt:</b><br>";
            echo "<b>Til:</b> <i>" . $til . "</i><br>";
            echo "<b>Fra:</b> <i>" . $fra . "</i><br>";
            echo "<b>Emne:</b> <i>" . $emne . "</i><br>";
            echo "<b>Melding:</b> <i>" . $melding . "</i><br>";
        }
    ?>
</body>
</html>
