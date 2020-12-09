<!--
// include('conn.php');
// $busca= $_REQUEST['id']; //Empresa
// $busca2= $_REQUEST['id2']; //Año -->

<?php
require('pdf/lib/fpdf/fpdf.php');
 
$pdf = new FPDF();
$pdf->SetFont('Arial','',8);
$pdf->AddPage();
$pdf->Cell(50,10,'sssss',1);
$pdf->Cell(50,10,'',1);
$pdf->Ln();
$pdf->Cell(50,10,'',1);
$pdf->Cell(50,10,'',1);
$pdf->Ln();
$pdf->Cell(50,10,'',1);
$pdf->Cell(50,10,'',1);
$pdf->Ln();
$pdf->Cell(50,10,'',1);
$pdf->Cell(50,10,'',1);
$pdf->Ln();
$pdf->Cell(5,10,'D',1);
$pdf->Cell(10,10,'',1);
$pdf->Cell(10,10,'',1);
$pdf->Cell(70,10,'',1);
$pdf->Cell(5,10,'',1);
$pdf->Ln();
$pdf->Cell(5,10,'',1);
$pdf->Cell(10,10,'',1);
$pdf->Cell(10,10,'',1);
$pdf->Cell(70,10,'',1);
$pdf->Cell(5,10,'',1);
$pdf->Ln();
$pdf->Cell(5,10,'',1);
$pdf->Cell(10,10,'',1);
$pdf->Cell(10,10,'',1);
$pdf->Cell(70,10,'',1);
$pdf->Cell(5,10,'',1);
$pdf->Ln();
$pdf->Cell(5,10,'',1);
$pdf->Cell(10,10,'',1);
$pdf->Cell(10,10,'',1);
$pdf->Cell(70,10,'',1);
$pdf->Cell(5,10,'',1);
$pdf->Ln();
$pdf->Output();
?>
