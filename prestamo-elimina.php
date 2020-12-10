<?php

require_once ('librerias/conexionBD.php');

	$id = $_REQUEST['id'];
	

	$sql = "DELETE FROM prestamos WHERE id_pre = '$id'";
    $resultado = $con->query($sql);
    



	if($resultado){

			header("Location: prestamos.php");

		}else{
			echo "Error al Eliminar";
			header("Location: prestamos.php");	
		}



		


?>
