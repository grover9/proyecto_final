<?php
	require 'librerias/fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			#$this->Image('img/logo.jpg', 5, 5, 30 );
			$this->SetFont('Arial','B',20);
			$this->Cell(30);
			$this->Cell(120,20, 'Plan de Pagos',0,0,'C');
			$this->Ln(30);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>
