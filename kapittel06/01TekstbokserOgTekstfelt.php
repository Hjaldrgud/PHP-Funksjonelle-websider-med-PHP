<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tekstbokser</title>
</head>
<body>
    <input type="text" name="navn" size="str" maxlength="lengde" value="verdi">
    <?php
        echo "Velkommen " . $_REQUEST['navn'] .  "!";
    ?>
    <textarea name="navn" cols="bredde" rows="rader" wrap="type"></textarea>
</body>
</html>