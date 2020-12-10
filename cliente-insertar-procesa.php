<?php
require_once('librerias/conexionBD.php');
session_start();


$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$carnet = $_POST['carnet'];
$celular = $_POST['celular'];
$dir = $_POST['dir'];
$id_emp = $_SESSION['id_emp'];



$sql = "INSERT INTO clientes (nombre,apellidos,ci,celular,direccion,id_emp) VALUES ('$nombres','$apellidos','$carnet','$celular','$dir','$id_emp')";

$result =  $con->query($sql);


if ($result != null) {
    print "<script>alert(\"Registro Exitoso \");window.location='clientes.php';</script>";
} else {
    print "<script>alert(\"Error al registrar..\");window.location='clientes.php';</script>";
}
