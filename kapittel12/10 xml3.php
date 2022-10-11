<?php
    libxml_use_internal_errors(true);
    $xml = simplexml_load_file("notat2.xml"); 
    if($xml === false){
        echo "Feil returnert ved lasting av XML: ";
        foreach(libxml_get_errors() as $error) {
            echo"<br>&bull; ", $error->message;
        }
    } else {
        print_r($xml);
    }


    //Matriseliknende greier
    echo $xml->notat[1]->melding . "<br>";


    echo "<br><br>Løkke:<br>";
    //Løkke
    $xml = simplexml_load_file("notat2.xml") or die("Noe gikk galt");
    foreach ($xml->children() as $notat) {
        echo "Til ".$notat->til." fra ".$notat->fra."<br>";
    }

    echo "<br><br>Attributter:<br>";
    //Attributter (Fungerer ikke som det skal)
    $xml = simplexml_load_file("notat2.xml") or die("Noe gikk galt");
    foreach ($xml->children() as $notat) {
        echo $notat->melding['type'] . ": " . $notat->melding."<br>";
    }

    echo "<br><br><br>";
    echo $xml->notat[1]->melding['type'] . "<br>";

?>