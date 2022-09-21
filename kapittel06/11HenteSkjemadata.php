<?php
    if(isset($_REQUEST['registrer'])) {
        echo "Følgende info er sendt gjennom skjemaet: <br>";
        foreach($_REQUEST as $felt => $skjemadata) {
            echo "Skjemaelementet " . $felt . " inneholder " . $skjemadata . ". <br>"; 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrering av medlem</title>
</head>
<body>
    <pre>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Fornavn: <input type="text" name="fnavn" placeholder="Fornavn"><br>
            Etternavn <input type="text" name="enavn" placeholder="Etternavn"><br>
            E-post <input type="email" name="epost" placeholder="E-post"><br>
            Telefon <input type="tel" name="tlf" placeholder="Mobilnummer"><br>
            Fødselsdato <input type="date" name="fdato" value="2011-05-05"><br>
            <input type="submit" value="Registrer" name="registrer">
        </form>
    </pre>
</body>
</html>