<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last opp fil</title>
</head>
<body>
    <p>
        <?php
            if(isset($meldinger)) {
                foreach($meldinger as $melding) {
                    echo $melding;
                }
            }
        ?>
    </p>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div>
            <div>
                <input type="file" name="foto" size="20">
            </div>
        </div>
        <div>
            <input type="submit" value="Last Opp" name="sendt">
        </div>
    </form>
</body>
</html>