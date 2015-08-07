<?php
    require("fpdf17/fpdf.php");

    $pdf = new FPDF();
    $pdf->addPage();

    $pdf->setFont("Arial", 'B', 46);
    $pdf->cell(40, 10, "Happy Birthday!!!!");

    $pdf->output();

?>