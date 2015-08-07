<?php
	require 'fpdf17/fpdf.php';
	
	class MyPDF extends FPDF
	{
		function header()
		{
			global $title;
			
			$this->setFont("Times", '', 12);
			$this->setDrawColor(0, 0, 180);
			$this->setFillColor(230, 0, 230);
			$this->SetTextColor(0, 0, 255);
			$this->setLineWidth(.5);
			
			$width = $this->GetStringWidth($title) + 120;
			
			$this->Image("logo.png", 10, 10.5, 15, 8.5, "png");
			$this->cell($width, 9, $title, 1, 1, 'C', 1);
			$this->ln(10);
			
		}
		
		function footer()
		{
			$this->setY(-15);
			$this->setFont("Arial", 'I', 8);
			$this->cell(0, 10,
			"This is the page footer -> Page {$this->pageNo()}/{nb}", 0, 0, 'C' );
		}
	}
	
	$title = "FPDF Library Page Header";
	
	$pdf = new MyPDF('P', 'mm', 'Letter');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFont("Times", '', 24);
	$pdf->Cell(0, 0, "some text at the top of the page", 0, 0, 'L');
	$pdf->Ln(225);
	
	$pdf->Cell(0, 0, "More text toward the bottom", 0, 0, 'C');
	
	$pdf->AddPage();
	$pdf->SetFont("Arial", 'B', 15);
	
	$pdf->Cell(0, 0, "Top of page 2 after header", 0, 1, 'C');
	
	$pdf->Output();
	
?>