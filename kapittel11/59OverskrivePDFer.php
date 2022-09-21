<?php
    //FPDO navneområde (namespace)
    use setasign\Fpdi\Fpdi;

    //inkluderer fpdf og fpdi
    require_once("FPDF/fpdf.php");
    require_once("FPDI/src/autoload.php");

    //oppretter et objekt av Fpdi-klassa:
    $pdf = new Fpdi();


    //Lager ny PDF-side
    $pdf->AddPage();

    //IMporterer PDF-fil som vi skal benytte som mal
    $pdf->setSourceFile("filer/Karakterer IT.pdf");

    //Importerer første side av PDF-fila
    $fs = $pdf->importPage(1);

    //Bruker PDF-fila som mal
    $pdf->useTemplate($fs);

    //Setter font, fontstørrelse, tekstposisjon og skriver kursdeltakerens navn i fila
    $pdf->SetFont("Arial", "B", 16);
    $pdf->ln(84.0);
    $pdf->cell(0,0,"Andreas Lauvhjell", 0,0, "C");

    //Setter ny tekstposijon og skriver kursnavnet i fila
    $pdf->SetFont("Arial", "B");
    $pdf->ln(40.0);
    $pdf->cell(0,0, "PDF og PHP", 0,0, "C");

    //Setter ny tekstposisjon og skriver kursresultatet i fila
    $pdf->setFont("Arial", "B");
    $pdf->ln(35.0);
    $pdf->cell(0,0, "Best i klassa! A+++", 0, 0, "C");

    //Setter ny fontstørrelse, ny tekstposisjon og skriver sted samt dagens dato
    $pdf->SetFont("Arial", "I", 12);
    $pdf->SetXY(24,200);
    $pdf->Write(3, "Kristiansand, " . date("d.m.Y"));
    $pdf->setXY(24,210);
    $pdf->Write(3, "Peter Andre Busch");

    //Plasserer et bilde av kursholderen i PDF-fila
    $pdf->Image("filer/Busch.jpg", 85, 200, 80, 0, "", "");

    //lager PDF-fil og viser den i nettleseren
    $pdf->output("I", "kursbevis.pdf");

?>