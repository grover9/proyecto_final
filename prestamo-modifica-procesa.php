<?php
require_once ("librerias/conexionBD.php");

$id = $_REQUEST['id'];

$monto = $_POST['monto'];
$fecha_ini =$_POST['fecha_ini'];
$fecha_fin = $_POST['fecha_fin'];
$t_pago = $_POST['t_pago'];
$cuota = $_POST['cuota'];



		

			$sql ="UPDATE prestamos SET monto='$monto',fecha_ini='$fecha_ini',fecha_fin='$fecha_fin', t_pago='$t_pago',cuota='$cuota' WHERE id_pre='$id'";

			$query =$con->query($sql);

		
			
			if($query!=null){
				print "<script>alert(\"Modificación Exitosa \");window.location='prestamos.php';</script>";
			}else{
				print"<script>alert(\"Error al Modificar\");window.location='prestamos.php';</script>";
			}
