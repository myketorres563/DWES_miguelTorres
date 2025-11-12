<?php
require_once 'fpdf186/fpdf.php';

$contenido = file('notas.txt');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

foreach ($contenido as $linea) {
    $pdf->Cell(0, 10,trim($linea), 0, 1);
}

$pdf->Output('I', 'notas.pdf');
?>