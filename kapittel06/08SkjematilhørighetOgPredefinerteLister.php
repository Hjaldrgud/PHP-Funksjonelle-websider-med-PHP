<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="skjema"1></form>
    <input type="text" name="brukernavn" form="skjema1">
    <br><br><br>


    <input type="text" name="aktiviteter" list="aktliste">
    <datalist id="aktliste">
        <option label="Tirsdager og Torsdager" value="quiz">
        <option label="Onsdager" value="Bordtennis">
        <option label="Fredager" value="Dans">
    </datalist>
</body>
</html>