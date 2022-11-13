<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddFont('Gothic-Regular','','GOTHIC.php');
$pdf->AddFont('Gothic-Bold','','GOTHICB.php');
$pdf->AddFont('Gothic-BoldItalic','','GOTHICBI.php');
$pdf->AddFont('Gothic-Italic','','GOTHICI.php');


$pdf->AddPage();
$pdf->SetFont('Gothic-Regular','',35);
$pdf->Write(10,'"There are no accidents." - Master Oogway');
$pdf->Ln(20);

$pdf->SetFont('Gothic-Bold','',35);
$pdf->Write(10,'"There is just news. There is no good or bad." - Master Oogway');
$pdf->Ln(20);

$pdf->SetFont('Gothic-BoldItalic','',35);
$pdf->Write(10,'"Yesterday is history, Tomorrow is a mystery, but today is a gift. That is why it is called the present." - Master Oogway');
$pdf->Ln(20);

$pdf->SetFont('Gothic-Italic','',35);
$pdf->Write(10,'"It matters not what someone is born, but what they grow to be." - Master Oogway');
$pdf->Ln(20);


$pdf->Output();
?>