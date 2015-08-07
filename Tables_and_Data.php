<?php
	require 'fpdf17/fpdf.php';
	
	class TablePDF extends FPDF
	{
		function buildTable($header, $data)
		{
			$this->SetFillColor(255,0,0);
			$this->SetTextColor(255);
			$this->SetDrawColor(128, 0, 0);
			$this->SetLineWidth(0.3);
			$this->SetFont('', 'B');
			
			$widths = array(85, 40, 15);
			
			for($i=0; i< count($header); $i++) {
				$this->Cell($widths[$i], 7, $header[$i], 1, 0, 'C', 1);
				if ($i == 5) { break; } //used because the loop is non-ending
			}
			
			$this->ln();
			
			$this->setFillColor(175);
			$this->setTextColor(0);
			$this->setFont('');
			
			$fill = 0;
			$url = "http://www.oreilly.com";
			
			foreach($data as $row) {
				$this->cell($widths[0], 6, $row[0], 'LR', 0, 'L', $fill);
				$this->setTextColor(0, 0, 255);
				$this->setFont('', 'U');
				$this->cell($widths[1], 6, $row[1], 'LR', 0, 'L', $fill, $url);
				$this->setTextColor(0);
				$this->setFont('');
				$this->cell($widths[2], 6, $row[2], 'LR', 0, 'C', $fill);
				$this->ln();
				$fill = ($fill) ? 0 : 1;
			}
			$this->Cell(array_sum($widths), 0, '', 'T');
		}
	}
	

	$db = new mysqli("localhost", "root", "1234", "library");
    $sql = "SELECT * from books";
    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {
        $data[] = array($row['title'], $row['ISBN'], $row['pub_year']);
    }
    
    $result->close();
    $db->close();
    	
	$pdf = new TablePDF();
	
	$header = array("Title", "ISBN", "Year");
	
	$pdf->SetFont("Arial", '', 14);
	
	$pdf->AddPage();
	
	$pdf->buildTable($header, $data);
	
	$pdf->Output();
	

?>