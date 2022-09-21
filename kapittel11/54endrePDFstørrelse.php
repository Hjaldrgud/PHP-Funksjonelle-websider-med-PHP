<?php
    require("FPDF/fpdf.php");
    $pdf = new FPDF("P", "mm", array(100,150));
    $pdf->addPage();

    $navn = "Andreas Lauvhjell";
    $pdf->setFont("Arial", "B", 13);
    $pdf->SetFillColor(255,179,179);
    $pdf->cell(60,10, "Til " . $navn, 1, 0, "R", true);

    $pdf->output("Genererte PDFer/1.pdf", "F"); //lagrer fila i mappa
?>