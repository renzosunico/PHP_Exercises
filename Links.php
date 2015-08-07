<?php
	
	require 'fpdf17/fpdf.php';
	
	$pdf = new FPDF();
	
	$pdf->AddPage();
	$pdf->SetFont("Times", '', 14);
	
	$pdf->Write(5, "For a link to the next page - Click ");
	$pdf->SetFont("", 'U');
	$pdf->SetTextColor(0, 0, 255);
	$linkToPage2 = $pdf->AddLink();
	$pdf->Write(5, "here", $linkToPage2);
	$pdf->SetFont('');
	
	$pdf->AddPage();
	$pdf->SetLink($linkToPage2);
	$pdf->image("logo.png", 10, 10, 30, 0, '', "http://www.php.net");
	$pdf->ln(20);
	
	$pdf->SetTextColor(1);
	$pdf->Cell(0, 5, "Click the following link or click on the image", 0, 1, 'L');
	$pdf->SetFont('', 'U');
	$pdf->SetTextColor(0, 0, 255);
	$pdf->write(5, "www.oreilly.com", "http://www.oreilly.com");
	
	$pdf->Output();
	
?>