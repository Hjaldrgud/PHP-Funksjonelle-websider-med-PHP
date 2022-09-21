<?php
    require_once("../../../../htdocsASSETS/inc/DB.inc.php");
    require_once("FPDF/fpdf.php");

    class PDFTabell extends FPDF {
        function lagTabell($overskrift, $rader) {
            $this->setFillColor(255, 255, 0);
            $this->setTextColor(0);
            $this->setDrawColor(128,128,0);
            $this->SetLineWidth(0.3);
            $this->setFont("", "B");

            $kolbredde = array(40,40,50); //Hver kolonnes bredde

            //Lage tabelloverskriftene i PDF-fila:
            for($i=0; $i<count($overskrift); $i++) {
                $this->cell($kolbredde[$i], 7, $overskrift[$i], 1, 0, "L", 1);
            }

            $this->ln();

            //endre til standardfont og farger
            $this->setFillColor(175);
            $this->setFont("");

            $fyll = 0; //Brukes for å alternere bakgrunnsfargen til radene

            foreach ($rader as $rad) {
                $this->cell($kolbredde[0], 6, $rad[0], "LR", 0, "L", $fyll);
                $this->cell($kolbredde[1], 6, $rad[1], "LR", 0, "L", $fyll);
                //Endrer font og farger for å simulere hyperlenke
                $this->setTextColor(0,0,255);
                $this->setFont("", "U");
                $mailto = "mailto: " . $rad[2];
                $this->cell($kolbredde[2], 6, $rad[2], "LR", 0, "L", $fyll, $mailto);
                //endrer tilbake til standardfont og -farger
                $this->setTextColor(0);
                $this->setFont("");
                $this->ln();
                $fyll = ($fyll) ? 0:1;
            }
            $this->cell(array_sum($kolbredde), 0, "", "T");
        }
    }

    $sql = "SELECT * FROM medlemmer_k11";
    // WHERE m_fnavn = :fnavn
    $sp = $pdo->prepare($sql);
    //$sp->bindParam(":fnavn", $fnavn, PDO::PARAM_STR);
    //$fnavn = "Andreas";

    try {
        $sp->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }

    $medlemmer = $sp->fetchAll(PDO::FETCH_OBJ);
    if($sp->rowCount() > 0) {
        foreach ($medlemmer as $medlem) {
            $rader[] = array($medlem->m_fnavn, $medlem->m_enavn, $medlem->m_epost);
        }
    }

    //tabell er en forlengelse av FPDF
    $pdf = new PDFTabell();

    //Kolonneoverskriftene
    $overskrift = array("Fornavn", "Etternavn", "E-post");

    $pdf->setFont("Arial", "", 14);
    $pdf->addPage();
    $pdf->lagTabell($overskrift, $rader);
    $pdf->output();

?>