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
        $url = "https://api.imgflip.com/caption_image";

        $data = [
            'username' => "Hjaldrgud",
            'password' => "Test123Test123",
            'template_id' => 438680,
            'text0' => "Hvordan lager...",
            'text1' => "Alltid med PHP!"
        ];

        //initialiserer en cURL-økt
        $ch = curl_init($url);
        $param = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data
        );
        curl_setopt_array($ch, $param);

        //Utfør cURL-forespørsel med innstillinger
        $resultat = curl_exec($ch);
        curl_close($ch);

        //Dekoder JSON til matrise
        $meme = json_decode($resultat, true);

        //Finner URL og viser bildet på skjermen
        echo '<img src="' . $meme['data']['url'] . '"alt="Meme" width="400">';
    ?>
</body>
</html>