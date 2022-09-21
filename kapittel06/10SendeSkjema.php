<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Fornavn: <input type="text" name="fnavn" placeholder="Fornavn"><br>
            Etternavn: <input type="text" name="enavn" placeholder="Etternavn"><br>
            E-post: <input type="email" name="epost" placeholder="E-post"><br>
            Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer"><br>
            Fødselsdato: <input type="date" name="fdato" value="2011-05-05"><br>
            <input type="submit" name="registrer" value="Registrer">
        </form>
    </pre>
</body>
</html>