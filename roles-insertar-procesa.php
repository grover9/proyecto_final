<?php 
require_once('librerias/conexionBD.php');

$carnet = $_POST['id_emp'];
$cargo = $_POST['cargo'];



$sql = "INSERT INTO roles (id_emp,cargo) VALUES ('$carnet','$cargo')";

$result =  $con->query($sql);


if (!$result) die('Error al insertar');
header('Location: roles.php');
?>