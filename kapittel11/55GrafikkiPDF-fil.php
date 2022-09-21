<?php
    require("FPDF/fpdf.php");
    $pdf = new FPDF();
    $pdf->addPage();
    $pdf->image("filer/universitetsforlaget_logo.png", 10, 10, 50, 50);
    $pdf->output("Genererte PDFer/grafikkpdf1.pfd", "I");
    ?>