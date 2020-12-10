<?php
include 'plantilla.php';
require_once ('librerias/conexionBD.php');


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();




$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);

$id_pre = $_REQUEST['id'];

$query = "SELECT id_pre, prestamos.id_emp, clientes.ci, monto, cuota,  clientes.nombre, clientes.apellidos, clientes.id_cli, fecha_ini, t_pago,fecha_fin
FROM clientes,prestamos
WHERE prestamos.id_pre = '$id_pre' AND prestamos.id_cli = clientes.id_cli";
$res = $con->query($query);
$r = $res->fetch_array();


$pdf->Cell(190,10,' Datos del Cliente',0,1,'C');



$pdf->Cell(50,6,'Nro. de Cliente: ',0,0);
$pdf->Cell(60,6,utf8_decode($r['id_cli']),0,0);

$pdf->Cell(50,6,'Carnet de Identidad: ',0,0);
$pdf->Cell(2,6,utf8_decode($r['ci']),0,1);


$pdf->Cell(50,6,'Nombres: ',0,0);
$pdf->Cell(60,6,utf8_decode($r['nombre']),0,0);


$pdf->Cell(50,6,'Monto Prestado: ',0,0);
$pdf->Cell(2,6,utf8_decode($r['monto']),0,1);


$pdf->Cell(50,6,'Apellidos: ',0,0);
$pdf->Cell(60,6,utf8_decode($r['apellidos']),0,0);




$pdf->Cell(50,6,'Fecha de Prestamo: ',0,0);
$pdf->Cell(2,6,utf8_decode($r['fecha_ini']),0,1);


$pdf->Cell(50,6,'Meses de Pago: ',0,0);
$pdf->Cell(60,6,utf8_decode($r['t_pago']),0,0);



$pdf->Cell(50,6,'Fecha de Fin de Pago:  ',0,0);
$pdf->Cell(2,6,utf8_decode($r['fecha_fin']),0,1);

$pdf->Ln(10);






$pdf->Cell(95,6,'Fechas de Pago',0,0,'C',1);
$pdf->Cell(95,6,'Cuotas',0,1,'C',1);


$pdf->SetFont('Arial','',10);



$fecha = $r['fecha_ini'];
$fecha = date("Y-m-d",strtotime($fecha."+ 1 month")); 
for ($i=0; $i < $r['t_pago']; $i++) { 


    $pdf->Cell(95,6,utf8_decode($fecha),0,0,'C');
    $pdf->Cell(95,6,$r['cuota'],0,1,'C');

    //sumo 1 mes
    $fecha = date("Y-m-d",strtotime($fecha."+ 1 month")); 
}

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);

$pdf->Cell(95,6,'Total: ',0,0,'C',1);
$pdf->Cell(95,6,$r['monto'],0,1,'C','1');

    

    
   


$pdf->Output();
