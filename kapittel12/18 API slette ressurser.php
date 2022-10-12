<?php
    $url = "https://fiktivapi.eksempel.com/del";
    $ressurs = 112233;
    $url = $url . "/" . $ressurs;

    //initialiserer en cURL-økt
    $ch = curl_init($url);
    $param = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_HTTPHEADER => [ //Headere tilpasset en fiktiv API
            "FiktivAPI-Host: fiktivapi.eksempel.com",
            "FiktivAPI-key: xxxxx",
            "Content-Type: application/json"
        ]
        );
        curl_setopt_array($ch, $param);

        //UTfør cURL-forespørsel med innstillinger
        $respons = curl_exec($ch);
        curl_close($ch);

        //Viser hvordan dette gikk
        echo $respons;
?>