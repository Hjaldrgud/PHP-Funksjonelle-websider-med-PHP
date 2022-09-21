<?php
    if(isset($_REQUEST['butikkValgt'])) {
        setcookie("lokalbutikk", $_REQUEST['lokalbutikk'], time()+3600, "/");
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
    <?php if(!isset($_COOKIE['lokalbutikk'])) { ?>
    <strong>Velg din lokalbutikk</strong>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <select name="lokalbutikk">
        <option value="Kristiansand">Kristiansand</option>
        <option value="Grimstad">Grimstad</option>
        <option value="Risør">Risør</option>
        <option value="Arendal">Arendal</option>
    </select>
        <input type="submit" value="velg" name="butikkValgt">
    </form>
    <?php } 
        if(isset($_COOKIE['lokalbutikk'])) {
            echo "Velkommmen som kunde til oss hos Kiwi " . $_COOKIE['lokalbutikk'];
            echo "<br>Vår butikk ligger i Adressegate 24 på Plassen";
        }
 ?>
</body>
</html>