<?php
        require("fpdf/fpdf.php");
        $pdf = new FPDF();
        $pdf->addPage();

        if(!isset($_GET['fulltnavn'])){
            $_GET['fulltnavn'] = "Andreas Lauvhjell";
        }

        $navn = $_GET['fulltnavn'];
        $fra = "Gud";
        $dato = date("d.m.Y");
        $tekst1 = iconv("UTF-8", "windows-1252", "Gratulerer med å være kulest i verden. Du er en super kar!");
        $tekst2 = iconv("UTF-8", "windows-1252", "Du er mitt forbilde! Stå på, jeg heier på deg!");


        $pdf->setFont("Arial","B", 13);
        $pdf->ln(15.0);
        $pdf->cell(0,0,"Til " . $navn, 0, 0, "C");

        $pdf->setFont("Arial", "", 11);
        $pdf->ln(10.0);
        $pdf->cell(0,0,$tekst1, 0, 0, "C");
        $pdf->ln(5.0);
        $pdf->cell(0,0,$tekst2, 0, 0, "C");

        $pdf->ln(10.0);
        $pdf->cell(0,0,"Dagens dato " . $dato, 0, 0, "C");
        $pdf->ln(5.0);
        $pdf->cell(0,0,"Hilsen " . $fra, 0, 0, "C");

        $pdf->image("filer/profilbilde.jpg", 67, 70, 80, 0, "", "");


        $pdf->output("filer/Øving 05.pdf", "I");
    ?>