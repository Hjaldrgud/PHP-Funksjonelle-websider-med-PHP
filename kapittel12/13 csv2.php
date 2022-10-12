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
        $brukernavn = array (
            array("Brukernavn", "ID", "Fornavn", "Etternavn"),
            array("sijo79", "1410", "Silje Marie", "Johansen"),
            array("tata81", "1789", "Tarjei", "Tallaksen")
        );
        $fp = fopen("fil.csv", "w");
        foreach ($brukernavn as $f) {
            fputcsv($fp, $f);
        }
        fclose($fp);
    ?>
</body>
</html>