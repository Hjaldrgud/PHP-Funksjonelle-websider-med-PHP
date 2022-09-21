<?php
    $dts = new DateTimeZone("Europe/Oslo");
    if(isset($_REQUEST['registrert'])) {
        //sjekk når skjemaet er sendt:
        $dtstart = new DateTime($_POST['dtstart'], $dts);
        $dtslutt = new DateTime("now", $dts);
        var_dump($dtstart); echo "<br>"; var_dump($dtslutt);
    } else {
        //tid ved lasting av skjema
        $dtstart = new DateTime("now", $dts);
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
    <pre>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"><br>
        Fornavn: <input type="text" name="fnavn" placeholder="fornavn"><br>
        Etternavn: <input type="text" name="enavn" placeholder="etternavn"><br>
        E-post: <input type="email" name="epost" placeholder="e-post"><br>
        Telefon: <input type="tel" name="tlf" placeholder="mobilnummer"><br>
        Fødselsdato: <input type="date" name="fdato" value="2000-01-01"><br>
        <input type="submit" value="Registrer" name="registrert"><br>
        <input type="hidden" name="dtstart" value="<?php echo $dtstart>format("Y-m-d H:i:s.u"); ?>">
    </form>
    </pre>
</body>
</html>