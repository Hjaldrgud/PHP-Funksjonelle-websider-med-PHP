<?php
    session_start(); //Livsviktig å ha på sida hvis man skal hente noe ut!!!!
    echo "øktvariabel: Navnet ditt er "; 
    echo $_SESSION['navn'];
?>