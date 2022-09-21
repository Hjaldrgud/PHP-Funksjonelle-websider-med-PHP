<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fargehenvisning</title>
</head>
<style>
    body {
        background: #ddc7a0;
        color: gray;
    }
</style>
<body>
    <?php
    $sang = "<p>
    Våre kjoler er i alle farger<br>
    Grønn, blå, rød, hvit, svart og mange flere<br>
    Men hør nå bare, hva jeg vil fortelle,<br>
    grønn, blå, rød, hvit, svart og mange flere<br><br>

    Se min kjole, den er grønn som gresset,<br>
    alt hva jeg eier, det er grønt som den<br>
    Det er fordi jeg elsker alt det grønne,<br>
    og fordi en jeger er min venn<br><br>
    
    Se min kjole, den er blå som havet,<br>
    alt hva jeg eier, det er blått som den.<br>
    Det er fordi jeg elsker alt det blå,<br>
    og fordi en sjømann er min venn<br><br>

    Se min kjole, den er hvit som sneen,<br>
    alt hva jeg eier, det er hvitt som den<br>
    Det er fordi jeg elsker at det hvite,<br>
    og fordi en møller er min venn<br><br>

    Se min kjole, den er rød som rosen,<br>
    alt hva jeg eier, det er rødt som den<br>
    Det er fordi jeg elsker alt det røde,<br>
    og fordi et postbud er min venn<br><br>

    Se min kjole, den er svart som kullet,<br>
    alt hva jeg eier, det er svart som den<br>
    Det er fordi jeg elsker alt det svarte,<br>
    og fordi en feier er min venn </p>";
    
    if(str_contains($sang, "grønn") || str_contains($sang, "grønt") || str_contains($sang, "grønne")|| str_contains($sang, "grønt")) {
        $sang = str_replace("Grønn", '<span style=\'color: Green;\'>Grønn</span>', $sang);
        $sang = str_replace("grønne", '<span style=\'color: Green;\'>grønne</span>', $sang);
        $sang = str_replace(" grønt", '<span style=\'color: Green;\'> grønt</span>', $sang);
        $sang = str_replace(" grønn", '<span style=\'color: Green;\'> grønn</span>', $sang);
    }
    if(str_contains($sang, "blå") || str_contains($sang, "blått")) {
        $sang = str_replace("blått", '<span style=\'color: Blue;\'>blått</span>', $sang);
        $sang = str_replace(" blå", '<span style=\'color: Blue;\'> blå</span>', $sang);
    }
    if(str_contains($sang, "hvit") || str_contains($sang, "hvitt") || str_contains($sang, "hvite")) {
        $sang = str_replace("hvitt", '<span style=\'color: White;\'>hvitt</span>', $sang);
        $sang = str_replace("hvite", '<span style=\'color: White;\'>hvite</span>', $sang);
        $sang = str_replace(" hvit", '<span style=\'color: White;\'> hvit</span>', $sang);
    }
    if(str_contains($sang, "rød") || str_contains($sang, "røde") || str_contains($sang, "rødt")) {
        $sang = str_replace("rødt", '<span style=\'color: Red;\'>rødt</span>', $sang);
        $sang = str_replace("røde", '<span style=\'color: Red;\'>røde</span>', $sang);
        $sang = str_replace(" rød", '<span style=\'color: Red;\'> rød</span>', $sang);
    }
    if(str_contains($sang, "svart") || str_contains($sang, "svarte")) {
        $sang = str_replace(" svarte", '<span style=\'color: Black;\'> svarte</span>', $sang);
        $sang = str_replace(" svart", '<span style=\'color: Black;\'> svart</span>', $sang);
    }
    echo $sang;

    ?>
</body>
</html>