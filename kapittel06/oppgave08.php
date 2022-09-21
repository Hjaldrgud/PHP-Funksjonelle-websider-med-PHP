<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nøkkelord</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <textarea name="nokkelord" cols="30" rows="10"></textarea>
        <input type="submit" name="sendt" value="send inn">
    </form>

    <?php
        if(isset($_REQUEST['sendt'])) {
            $tekststreng = $_REQUEST['nokkelord'];
            $matrise = explode(", ", $tekststreng);
            if(count($matrise)>10) {
                $matrise = array_splice($matrise, 0, 10);
            }
            sort($matrise);
            foreach ($matrise as $value) {
                echo $value . "<br>";
            }
        }
    ?>
</body>
</html>
