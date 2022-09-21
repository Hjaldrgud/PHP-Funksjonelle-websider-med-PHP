<?php
    require("FPDF/fpdf.php");
    $pdf = new FPDF();
    $pdf->addPage();

    $navn = "Andreas Lauvhjell";
    $pdf->setFont("Arial", "B", 13);
    $pdf->cell(40,10, "Til " . $navn);

    $pdf->Output("Genererte PDFer/enkelpdf.pdf", "I");
?>