<?php

require_once ('librerias/conexionBD.php');

	$id = $_REQUEST['id'];
	

	$sql = "DELETE FROM clientes WHERE id_cli = '$id'";
    $resultado = $con->query($sql);
    



	if($resultado){

			header("Location: clientes.php");

		}else{
			echo "Error al Eliminar";
			header("Location: clientes.php");	
		}



		


?>
