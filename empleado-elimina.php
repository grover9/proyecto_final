<?php

require_once ('librerias/conexionBD.php');

	$id = $_REQUEST['id'];
	

	$sql = "DELETE FROM empleados WHERE id_emp = '$id'";
    $resultado = $con->query($sql);
    



	if($resultado){

			header("Location: empleados.php");

		}else{
			echo "Error al Eliminar";
			header("Location: empleados.php");	
		}



		


?>
