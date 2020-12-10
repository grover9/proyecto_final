<?php
require_once ("librerias/conexionBD.php");

$id = $_REQUEST['id'];


$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$carnet = $_POST['carnet'];
$celular = $_POST['celular'];
$pass = md5($_POST['pass']);


		

			$sql ="UPDATE empleados SET nombre='$nombres',apellidos='$apellidos',ci='$carnet', celular='$celular',pass='$pass' WHERE id_emp='$id'";

			$query =$con->query($sql);

		
			
			if($query!=null){
				print "<script>alert(\"Modificación Exitosa \");window.location='empleados.php';</script>";
			}else{
				print"<script>alert(\"Error al Modificar\");window.location='empleados.php';</script>";
			}
