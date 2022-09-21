<?php
    function vask($var) {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
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
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Skriv in tall: <input type="number" name="tall" step=".001"><br>
        <input type="submit" value="konvertér" name="konv"><br><br> 
    </form>

    <?php
        if(isset($_REQUEST['konv'])) {
            $tall = floatval(vask($_REQUEST['tall']));
            if(is_float($tall)) {
                echo "Tallet ". $tall . " i binær blir " . decbin($tall);
            } else {
                echo "Tallet er ikke et desimaltall <br>";
            }
        }
    ?>
</body>
</html>