<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="nyheter" size="1">
        <option value="2">E-post</option>
        <option value="3">SMS</option>
        <option value="4">E-post og SMS</option>
        <option value="1" selected="selected">Vil ikke motta nyheter</option>
    </select>
    <br><br><br>

    <select onchange="locatio" = this.options[this.selectedIndex].value;>
        <option>Velg handling ..</option>
        <option value="profil.php?m<?php echo $m;?>>">Se profil</option>
        <option value="endre.php?m=<?php echo $m;?>">Endre profil</option>
        <?php if ($bstatus ==1) {//superbruker ?>
        <option value="slett.php?m=<?php echo $m;?>">Slett profil</option>
        <?php } ?>
    </select>
    <br><br><br>

    <select name="nyheter" size="2" multiple="multiple">
            <option value="2">E-post</option>
            <option value="3">SMS</option>
    </select>
    <br><br><br>

    Velg Farge <input type="color" name"farge">
    <br><br><br>

    <input type="number" name="nr">
        <br><br><br>

    <input type="range" name="nr" min="0" max="100" value="50" step="5">
    <br><br><br>

    <input type="time" name="kl" value="09:00">
    <br><br><br>

    <input type="hidden" name="mid" value="3M1hf4">
</body>
</html>