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
        $fornavn="Andreas";
        
        //HTML-vask
        $fornavn = htmlentities($_REQUEST['fnavn']);

        //PHP og HTML vask
        $fornavn = strip_tags($_REQUEST['fnavn']);


        //egen funksjon som vasker
        function vask($var) {
            $var = strip_tags($var);
            $var = htmlentities($var);
            return $var;
        }
        $fornavn = vask($_REQUEST['fnavn']);

        //filtrere venstreaksent
        $fornavn = filter_var($_REQUEST['fnavn'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_BACKTICK);


        //Filtrere en epostadresse:
        $epost = filter_var($epost, FILTER_SANITIZE_EMAIL);

        ?>
        validere skjemadata
        <input type="email" name="epost" placeholder="E-post">

        <?php

            //sjekke eposten med filter_VAR
            if(filter_var($_REQUEST['epost'], FILTER_VALIDATE_EMAIL)) {
                echo $_REQUEST['epost'] . " har gyldig epostadresse-format.";
            } else {
                echo $_REQUEST['epost'] . " har ikke gyldig e-postadresse-format.";
            }

        ?>

</body>
</html>