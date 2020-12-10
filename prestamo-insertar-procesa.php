<?php
require_once('librerias/conexionBD.php');





$monto = $_POST['monto'];

$fecha_ini = $_POST['fecha_ini'];


$f_in = date_create_from_format('m-d-Y', $fecha_ini);

$ini = date_format($f_in, 'Y-m-d');

$fecha_fin = $_POST['fecha_fin'];
$f_fin = date_create_from_format('m-d-Y', $fecha_fin);

$fin = date_format($f_fin, 'Y-m-d');



$t_pago = $_POST['t_pago'];
$cuota = $_POST['cuota'];
$id_emp = $_POST['id_emp'];
$id_cli = $_POST['id_cli'];



$sql = "INSERT INTO prestamos (monto,fecha_ini,fecha_fin,t_pago,cuota,id_emp,id_cli) VALUES ('$monto','$ini','$fin','$t_pago','$cuota','$id_emp','$id_cli')";

$result =  $con->query($sql);


if ($result != null) {
    print "<script>alert(\"Registro Exitoso \");window.location='prestamos.php';</script>";
} else {
    print "<script>alert(\"Error al registrar..\");window.location='prestamos.php';</script>";
}
