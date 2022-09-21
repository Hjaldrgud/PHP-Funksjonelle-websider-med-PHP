<?php 
    if(isset($_REQUEST['regn'])) {

        if(isset($_REQUEST['cels']) && (!empty($_REQUEST['cels']) || $_REQUEST['cels']==0)) {
            $cels = $_REQUEST['cels'];
            echo "Celsius oppgitt " . $cels . " blir " . number_format($cels*1.8+32, 2, ",", "") . " fahrenheit. <br>";
        } elseif(isset($_REQUEST['fahr']) && (!empty($_REQUEST['fahr']) || $_REQUEST['fahr']==0)) { 
            $fahr = $_REQUEST['fahr'];
            echo "Fahrenheit oppgitt " . $fahr . " blir " . number_format($fahr-32/1.8, 2, ",", "") . " celsius. <br>";
        } else {
            echo "Vennligst oppgi et nummer i enten celsius eller fahrenheit.";
        }

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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Oppgi celsius: <input type="number" name="cels">
        Oppgi fahrenheit: <input type="number" name="fahr">
        <input type="submit" name="regn" value="Beregn">
    </form>
</body>
</html>