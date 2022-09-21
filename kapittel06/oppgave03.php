<?php
//Regn ut hvor langt en bil kan kjøre i meter basert på km/t og tid i minutter
    if(isset($_REQUEST['kalk'])) {
        $kmt = $_REQUEST['kmt'];
        $min = $_REQUEST['min'];
        $meter = number_format(($kmt * ($min/60))*1000, 2, ",", " ") ;
        echo "Kilometer/time oppgitt: " . $meter . ". <br>";
        echo "Minutter oppgitt: " . $min . ". <br><br>";
        echo "Kilometer kjørt på " . $min . " minutter i " . $kmt . "meter/t er <strong> " . $meter . "<strong>.";   
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
    <br><br>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        Oppgi KM/t: <input type="number" name="kmt">
        Oppgi tid: <input type="number" name="min">
        <input type="submit" name="kalk" value="kalkulér">
    </form>
</body>
</html>