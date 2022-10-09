<?php
    libxml_use_internal_errors(true);
    $notat=<<<XML
        <?xml version='1.0' encoding='UTF-8'?>
        <notat>
            <til>Silje</til>
            <fra>Johan</fra>
            <overskrift>Kursforberedelse></overskrift>
            <melding>Lese kapittel 4 i boka</melding>
        </notat>
        XML;

    $xml = simplexml_load_string($notat);
    if($xml == false){
        echo "Feil returnert ved lasting av XML:";
        foreach(libxml_get_errors() as $error) {
            echo "<br>&bull; ", $error->message;
        }
    } else {
        print_r($xml);
    }

    echo "<br><br>";

    libxml_use_internal_errors(true);
    $xml = simplexml_load_file("notat1.xml"); 
    if($xml === false){
        echo "Feil returnert ved lasting av XML: ";
        foreach(libxml_get_errors() as $error) {
            echo"<br>&bull; ", $error->message;
        }
    } else {
        print_r($xml);
    }

    echo "<br><br>";

    $xml = simplexml_load_file("notat1.xml") or die("Noe gikk galt");
    echo $xml->til ."<br>";
    echo $xml->fra ."<br>";
    echo $xml->overskrift ."<br>";
    echo $xml->melding ."<br>";
?>