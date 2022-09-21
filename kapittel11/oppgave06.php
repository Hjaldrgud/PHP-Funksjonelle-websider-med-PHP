<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_POST['vist'])) {
        if(file_exists($_POST['fil'])) {
            $fil = $_POST['fil'];
        } elseif (file_exists("./filer/" . $_POST['fil'])) {
            $fil = "./filer/" . $_POST['fil'];
        } elseif (file_exists("./Genererte PDFer/" . $_POST['fil'])) {
            $fil = "./Genererte PDFer/" . $_POST['fil'];
        } else {
            echo "Fila/katalogen eksisterer ikke.";
        }
    }
?>
    <h2>Søk etter detaljert informasjon</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="fil" placeholder="Skriv inn navn på fil">
        <input type="submit" value="vis" name="vist">
    </form>
    <br><br>
    <?php
        if(isset($fil)) {
            echo "<pre>";
            print_r(stat($fil));
            echo "</pre>";
        }
    ?>
</body>
</html>