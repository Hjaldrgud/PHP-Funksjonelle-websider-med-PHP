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
        $url = "https://fiktivapi.eksempel.com/put";
        $data = ['innstilling' => true];

        //Initialiserer en cURL økt
        $ch = curl_init($url);
        $param = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_PUT => true,
            CURLOPT_POSTFIELDS => json_encode($data), //Data konvertert til JSON
            CURLOPT_HTTPHEADER => [ //Headere tilpasset en fiktiv API
                "FiktivAPI-Host: fiktivapi.eksempel.com",
                "FiktivAPI-key: xxxxx",
                "Content-Type: application/json"
            ]
        );
        curl_setopt_array($ch, $param);

        //Utfør cURL-forespørsel med innstillinger
        $respons = curl_exec($ch);
        curl_close($ch);

        //Viser hvordan dette gikk
        echo $respons;
    ?>
</body>
</html>