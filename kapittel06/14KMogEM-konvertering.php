<?php
    function vask($var) {
        $var = strip_tags($var);
        $var = htmlentities($var);
        $var = str_replace(",", ".", $var);
        $var = number_format($var, 4, ".", "");
        return $var;
    }
    if (isset($_REQUEST['konv'])) {
        $k = $m = "";
        if(isset($_REQUEST['km']) && !empty($_REQUEST['km']))
            $k = vask($_REQUEST['km']);
        if(isset($_REQUEST['em']) && !empty($_REQUEST['em']))
            $m = vask($_REQUEST['em']);
            
        $meldinger = [];
        if($k) {
            $meldinger[] = round($k, 1) . " km tilsvarer " . number_format($k * 0.6214, 4, ".", "") . " engelske mil.";
        } elseif($m) {
            $meldinger[] = round($m, 1) . " engelske mil tilsvarer " . number_format($m * 1.6093, 4, ".", "") . " km.";
        } else {
            $meldinger[] = "Ingen verdi er oppgitt";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konvertering</title>
</head>
<body>
    <pre>
        <?php 
        if(isset($meldinger)) {
            foreach ($meldinger as $melding)  { echo $melding; }
        } else {
            echo "Skriv inn enten kilometer eller engelsk mil.";
        }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Kilometer: <input type="text" name="km" placeholder="Kilometer"><br>
            Engelsk mil: <input type="text" name="em" placeholder="Engelsk mil"><br>
            <input type="submit" value="konvertér" name="konv">
        </form>
    </pre>
</body>
</html>

