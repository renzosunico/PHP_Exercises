<?php
    require("fpdf17/fpdf.php");

    $pdf = new FPDF();
    $pdf->addPage();

    $pdf->setFont("Arial", 'B', 16);
    $pdf->cell(190, 10, "Happy Birthday!!!!", 1, 0, 'C');

    $pdf->output();

?>