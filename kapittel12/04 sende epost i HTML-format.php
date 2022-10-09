<?php
    function sendEpostHTML($tilNavn, $tilEpost, $fraNavn, $fraEpost, $emne, $melding){
        $mhoder[] = "MIME-Version: 1.0";
        $mhoder[] = "Content-type: text/html; charset=iso-8859-1";
        //For HTML-epost

        $mhoder[] = "To: $tilNavn <$tilEpost>";
        $mhoder[] = "From: $fraNavn <$fraEpost>";
        $mhoder[] = "Cc: $fraEpost";
        $mhoder[] = "Bcc: $fraEpost";
        mail($tilEpost, $emne, $melding, implode("\r\n", $mhoder));
    }
?>
<form action="" method="post">
    <input type="submit" value="send eposter" name="sendt">
</form>
<?php
$tilNavn = "Andreas Lauvhjell";
$tilEpost = "megalomanicsupernaut@gmail.com";
$fraNavn = "Lauv Andreassen";
$fraEpost = "lauvhjell@gmail.com";
$emne = "Takk for din ordre!";
$melding = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Takk for at du handler hos oss! Her er det du har bestilt:</p>
    <table>
        <tr>
            <th>Produkt</th>
            <th>Beskrivelse</th>
            <th>Pris</th>
        </tr>
        <tr>
            <td>Double 12 Domino</td>
            <td>Et tradisjonelt dominospill</td>
            <td>Kr 300,-</td>
        </tr>
        <tr>
            <td>Trivial Pursuit</td>
            <td>Et spennende spørresill for hele familien</td>
            <td>Kr 500,-</td>
        </tr>
    </table>
</body>
</html>';

if(isset($_REQUEST['sendt'])){
    sendEpostHTML($tilNavn, $tilEpost, $fraNavn, $fraEpost, $emne, $melding);
    echo "<br>Meldinger blei sendt";
}
?>