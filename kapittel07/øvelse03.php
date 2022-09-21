<?php

    include_once("oppgave09 (inkluderingsfil for basisfunksjonalitet).php");
    header($_SERVER['SERVER_PORT'] == 80 ? "Location: https://www.google.no" : "Location: https://www.kvasir.no");
    echo $_SERVER['SERVER_PORT'];
    

?>