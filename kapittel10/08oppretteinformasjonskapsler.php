<?php
    setcookie("lang", "no", time()+5184000, "/"); //60 døgn


    echo $_COOKIE['lang'];

    //Slette infokapsel:
    #setcookie("lang", "no", time()-5184000, "/") //60 døgn
?>