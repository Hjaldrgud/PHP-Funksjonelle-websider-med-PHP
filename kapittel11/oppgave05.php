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
            echo "Filstien er: " . realpath($_POST['fil']);
        } elseif (file_exists("./filer/" . $_POST['fil'])) {
            echo "Filstien er: " . realpath("./filer/" . $_POST['fil']);
        } elseif (file_exists("./Genererte PDFer/" . $_POST['fil'])) {
            echo "Filstien er: " . realpath("./Genererte PDFer/" . $_POST['fil']);
        } else {
            echo "Fila/katalogen eksisterer ikke.";
        }
    }
?>
    <h2>Søk etter absolutt filsti</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="fil" placeholder="Skriv inn navn på fil">
        <input type="submit" value="vis" name="vist">
    </form>
</body>
</html>