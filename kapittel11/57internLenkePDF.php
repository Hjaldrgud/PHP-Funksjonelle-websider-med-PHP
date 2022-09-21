<?php

    require("FPDF/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->setFont("Arial", "", 13);
    $pdf->SetTextColor(0,0,0);
    $tekst = iconv("UTF-8", "windows-1252", "Lenke til neste side: ");
    $pdf->write(10, $tekst);
    $pdf->setFont("", "U");
    $pdf->SetTextColor(0,0,255);

    $tilside2 = $pdf->addLink();
    $pdf->write(10, "klikk her", $tilside2);
    
    $pdf->addPage();
    $pdf->setLink($tilside2);

    $pdf->output("Genererte PDFer/hyperlenkeLokal.pdf", "I");

    ?>