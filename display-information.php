<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Complete Name: Calvin Kent R. Pamandanan', 0, 1);
$pdf->Cell(40,10,'Program: CCS', 0, 1);
$pdf->Cell(40,10,'Email Address: pamandanan.calvinkent@auf.edu.ph', 0, 1);
$pdf->Cell(40,10,'Student Number: 14-0155-965', 0, 1);
$pdf->Output();
?>