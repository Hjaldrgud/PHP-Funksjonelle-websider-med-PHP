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
        $url = "https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?camera=FHAZ&earth_date=2021-5-28&api_key=DEMO_KEY";
        
        //Initialiserer en cURL-økt
        $ch = curl_init();
        $param = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $param);

        //Utfør cURL-forespørsel med innstillinger
        $resultat = curl_exec($ch);
        $resinfo = curl_getinfo($ch); //Inneholder informasjon om forespørselen
        curl_close($ch);

        $foto=json_decode($resultat, true);

        //Viser det første bildet i matrisen (plass 0 i nettleseren)
        $foto1 = $foto['photos'][0]['img_src'];
        echo '<img src="' . $foto1 . '" alt="Mars-bilde av Curiosity width="600">';

        //Alle bildene i matrisen
        echo "<br><br> Alle bilder tatt med FHAZ-kameraet på curiosity denne datoen:";
        echo "<pre>";
        print_r($foto);
        echo "</pre>";
    ?>
</body>
</html>