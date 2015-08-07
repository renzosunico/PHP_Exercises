<?php
	require 'fpdf17/fpdf.php';
	
	$pdf = new FPDF();
	$pdf->AddPage();
	
	$pdf->SetFont("Times",'U',15);
	$pdf->SetTextColor(128);
	$pdf->Cell(0, 5, "Times font, Underlined and shade of Grey Text", 0, 0, 'L');
	
	$pdf->output();
	
?>