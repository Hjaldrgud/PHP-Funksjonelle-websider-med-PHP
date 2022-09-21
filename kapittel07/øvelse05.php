<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cron-generator</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="minutt">
    <input type="text" name="time">
    <input type="text" name="dag_i_måned">
    <input type="text" name="måned">
    <input type="text" name="ukedag">
    <p>MINUTT - TIME - DAG I MÅNED - MÅNED - UKEDAG</p>
    <input type="submit" value="lag" name="laget">
    </form>
</body>
</html>