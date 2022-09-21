<?php
    $t = 123;
    printf("%%b = %b <br>", $t); //binært tall
    printf("%%c = %c <br>", $t); //ASCII
    printf("%%e = %e <br>", $t); //Vitenskapelig notasjon

    printf("%%f = %f <br>", $t); //desimaltall
    printf("%%o = %o <br>", $t); //oktaltall
    printf("%%X = %x <br><br><br>", $t); //heksadesimalt tall
    
    printf("%s i titallsystemet er %b binært, %o oktalt og %X heksadesimalt. <br>", $t, $t, $t, $t);

    printf("%1\$s i titallsystemet er %1\$b binært, %1\$o oktalt og %1\$X heksadesimalt.", $t);
?>