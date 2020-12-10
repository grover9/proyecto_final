<?php
require_once ("librerias/conexionBD.php");

$id = $_REQUEST['id'];



$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$carnet = $_POST['carnet'];
$celular = $_POST['celular'];
$dir = $_POST['dir'];

		

			$sql ="UPDATE clientes SET nombre='$nombres',apellidos='$apellidos',ci='$carnet', celular='$celular',direccion='$dir' WHERE id_cli='$id'";

			$query =$con->query($sql);

		
			
			if($query!=null){
				print "<script>alert(\"Modificación Exitosa \");window.location='clientes.php';</script>";
			}else{
				print"<script>alert(\"Error al Modificar\");window.location='clientes.php';</script>";
			}
