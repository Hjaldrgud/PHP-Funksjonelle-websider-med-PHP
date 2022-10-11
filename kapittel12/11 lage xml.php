<?php
    $xml = xmlwriter_open_memory();
    xmlwriter_set_indent($xml, 1); //Innrykk i koden
    $res = xmlwriter_set_indent_string($xml, " "); //Innrykk i koden

    xmlwriter_start_document($xml, "1.0", "UTF-8");
    //Start dokumet
    xmlwriter_start_element($xml, "tagg1"); //Ny tagg

    xmlwriter_start_attribute($xml, "attr1"); //Attributt for tagg1

    xmlwriter_text($xml, "attributt1 verdi"); //Verdien for attr1

    xmlwriter_end_attribute($xml); //avslutt attributt

    xmlwriter_write_comment($xml, "Nå kommer en tagg på et nivå under");

    xmlwriter_start_element($xml, "tagg11"); //Ny tagg
    xmlwriter_text($xml, "tekst i tagg11"); //Teksten i tagg11
    xmlwriter_end_element($xml); //Avslutt tagg11

    xmlwriter_end_element($xml); //Avslutt tagg1
    xmlwriter_end_document($xml); //Avslutt dokument

    echo xmlwriter_output_memory($xml); //Utskrift av XML-kode
?>