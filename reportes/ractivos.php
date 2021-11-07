
<?php
require 'PDF_MC_Table.php';

$pdf = new PDF_MC_Table();

$pdf->AddPage('landscape', 'letter');

$y_axis_initial = 25;
//header

$pdf->SetFont('Times', 'B', 15);
$pdf->Ln(5);
$pdf->Cell(0, 5, 'Lista de activos',0,0,'C');
$pdf->SetDrawColor(84,148,204);
$pdf->SetLineWidth(0);
$pdf->Line(98, 54, 180, 54);

$pdf->SetFont('Times', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetDrawColor(84,148,204);
$pdf->SetLineWidth(1);
$pdf->ln(19);
$pdf->SetFillColor(84,148,204);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(35, 8, utf8_decode('Código'),0,0,'C',1);
$pdf->Cell(45, 8, 'Nombre',0,0,'C',1);
$pdf->Cell(15, 8, 'Marca',0,0,'C',1);
$pdf->Cell(15, 8, 'Modelo',0,0,'C',1);
$pdf->Cell(18, 8, 'Serie',0,0,'C',1);
$pdf->Cell(18, 8, 'Fecha',0,0,'C',1);
$pdf->Cell(20, 8, 'Valor',0,0,'C',1);
$pdf->Cell(15, 8, utf8_decode('Tipo'),0,0,'C',1);
$pdf->Cell(20, 8, utf8_decode('Sucursal'),0,0,'C',1);
$pdf->Cell(25, 8,  utf8_decode('Departamento'),0,0,'C',1);
$pdf->Cell(20, 8, utf8_decode('Tipo activo'),0,0,'C',1);
$pdf->Cell(15, 8, utf8_decode('Estado'),0,0,'C',1);
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(255,255,255);
$pdf->ln(11);
$pdf->SetDrawColor(84,148,204);
$pdf->SetLineWidth(0);
$pdf->SetFont('Times', '', 10);
include_once("../models/ReportesModel.php");
$daoC = new ReportesModel();
$sub=$daoC->activo();

$pdf->SetWidths(array(35, 45, 15, 15, 18, 18, 20, 15,  20, 25, 20, 15));

while ($fila = $sub->fetch_assoc()) {
     $pdf->SetFont('Times', '', 9);
    $pdf->row(array($fila['codigo'], utf8_decode($fila['nombre']), $fila['marca'],
     $fila['modelo'], $fila['serie'], $fila['fecha'], utf8_decode($fila['valor']), $fila['tipo'],
   utf8_decode($fila['sucursal']), $fila['departamento'],
     $fila['tipoactivo'], $fila['estado']));
    $pdf->Ln(1);
}

$pdf->Output();
ob_end_flush();
