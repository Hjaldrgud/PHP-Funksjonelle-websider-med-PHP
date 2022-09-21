<?php
    echo "totalt antall kombinasjoner fpr et passord på fem tegn med (a-z,A-Z,0-9) er 64 opphøyd i 5. <br>";
    echo "Jeg antar det er det, siden en sykkellås med 4 sifre er 10000, eller 10 opphøyd i 4<br>";
    echo "altså blir svaret (64 opphøyd i 5):<br><br><strong>";
    echo number_format(pow(64, 5),0,","," ") . "<br>" ;
?>