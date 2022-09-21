<?php
    require("FPDF/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->setFont("Arial", "", 13);
    $pdf->SetTextColor(0,0,0);
    $tekst = iconv("UTF-8", "windows-1252", "klikk på følgende lenke: ");
    $pdf->write(10, $tekst);
    $pdf->setFont("", "U");
    $pdf->SetTextColor(0,0,255);
    $pdf->write(10, "Universitetsforlaget", "http://www.universitetsforlaget.no");
    
    $pdf->output("Genererte PDFer/hyperlenke.pdf", "I");
?>