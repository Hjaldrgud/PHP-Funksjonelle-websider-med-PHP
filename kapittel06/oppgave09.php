<?php
    //<?php echo $var; 'spmtegn'> skal skrives inn i tekstboksen og $var-innholdet skal skrives ut. Lurespørsmål? Ser ut som at
    //det allerede er en form for vasking implementert, siden jeg kan skrive andre ting inn, men ikke det.
    $var = "Dette skal skrives ut";
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
        <textarea name="melding" cols="30" rows="10"></textarea>
        <input type="submit" value="send">
    </form>
    <?php 
        $var = "Dette skal skrives ut";
        if(isset($_REQUEST['melding'])) {
            echo $_REQUEST['melding'];
        }
    ?> 
</body>
</html>