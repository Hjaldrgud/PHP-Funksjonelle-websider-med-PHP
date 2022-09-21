<?php
    $planet = "";
    if (isset($_REQUEST['planetene'])) {
        $planet = $_REQUEST['planetene'];

        $pfakta = match ($planet) {
            "Merkur"    => "Merkur er den innerste og minste planeten i solsystemet. Den er bare litt større enn Månen, og er i likhet med Venus, Jorda og Mars en steinplanet.",
            "Venus"     => "Venus er den andre planeten regnet fra Sola. Den er den sjette største planeten i solsystemet, så vidt mindre enn Jorda. Den er i likhet med Merkur, Jorda og Mars en steinplanet.",
            "Tellus"    => "Tellus/Jorda er den femte største av planetene i vårt solsystem og den tredje planeten regnet fra Solen. Den er en steinplanet.",
            "Mars"      => "Mars er den fjerde planeten regnet fra Sola. Den er den syvende største planeten i solsystemet og har litt over halvparten så stor omkrets som Jorda. Den er i likhet med Merkur, Venus og Jorda en steinplanet.",
            "Jupiter"   => "Jupiter er den femte planeten regnet fra Sola, og den største planeten i solsystemet. Den er i likhet med Saturn, Uranus og Neptun en gassplanet.",
            "Saturn"    => "Saturn er den sjette planeten regnet fra Sola, og den nest største av planetene i solsystemet. Den er i likhet med Jupiter, Uranus og Neptun en gassplanet.",
            "Uranus"    => "Uranus er den sjuende av planetene regnet fra Sola, og den tredje største planeten i solsystemet. Uranus er i likhet med Jupiter, Saturn og Neptun en gassplanet, nærmere bestemt en iskjempe.",
            "Neptun"    => "Neptun er den åttende og ytterste av planetene i solsystemet, og den fjerde største. Den er i likhet med Jupiter, Saturn og Uranus en gassplanet, nærmere bestemt en iskjempe."
        };
        echo $pfakta;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakgrunnsfarge</title>
</head>
<!-- HER SKJER MAGIEN 2-->
<body style="background-color:  <?php echo isset($_REQUEST['farge']) ?  $_REQUEST['farge'] : "fff";?> ;">
    <br><br>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <select name="planetene">
            <option value="Merkur" <?php echo $planet=="Merkur" ? "selected=\"selected\"" : ""; ?>>Merkur</option>
            <option value="Venus" <?php echo $planet=="Venus" ? "selected=\"selected\"" : ""; ?>>Venus</option>
            <option value="Tellus" <?php echo $planet=="Tellus" ? "selected=\"selected\"" : ""; ?>>Tellus</option>
            <option value="Mars" <?php echo $planet=="Mars" ? "selected=\"selected\"" : ""; ?>>Mars</option>
            <option value="Jupiter" <?php echo $planet=="Jupiter" ? "selected=\"selected\"" : ""; ?>>Jupiter</option>
            <option value="Saturn" <?php echo $planet=="Saturn" ? "selected=\"selected\"" : ""; ?>>Saturn</option>
            <option value="Uranus" <?php echo $planet=="Uranus" ? "selected=\"selected\"" : ""; ?>>Uranus</option>
            <option value="Neptun" <?php echo $planet=="Neptun" ? "selected=\"selected\"" : ""; ?>>Neptun</option>
        </select>
        <!-- HER SKJER MAGIEN 1-->
        <input type="color" name="farge">
        <input type="submit" value="Velg">
    </form>
    <br><br>
    </form>

</body>
</html>