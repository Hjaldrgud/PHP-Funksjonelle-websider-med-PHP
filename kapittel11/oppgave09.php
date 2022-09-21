
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="fnavn" placeholder="fornavn">
        <input type="text" name="enavn" placeholder="enavn">
        <input type="image" src="oppgave09bilde.php" alt="Submit" width="200" height="200" name="sendt"> 
    </form>
    <br><br>
<?php
        if(isset($_POST['sendt_x'])) {
            echo "Navnet ditt er " . $_POST['fnavn'] . " " . $_POST['enavn'];
        }
?>
</body>
</html>