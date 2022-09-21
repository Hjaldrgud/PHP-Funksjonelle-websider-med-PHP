<?php
    //Lag et skript som regner ut omkrets og areal av en sirkel basert på oppgitt radius.
    if(isset($_REQUEST['kalk'])) {
        echo "Radius oppgitt: " . $_REQUEST['radius'] . "<br>";
        echo "Omkretsen er " . number_format(2 * pi() * $_REQUEST['radius'], 2, ",", " ")  . "<br>";
        echo "Arealet er " . number_format(pi() * pow($_REQUEST['radius'], 2) , 2, ",", " ")  . "<br>";
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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Oppgi Radius: <input type="number" name="radius">
        <input type="submit" name="kalk" value="kalkuler">
    </form>
</body>
</html>