<?php
require_once('librerias/conexionBD.php');



$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$carnet = $_POST['carnet'];
$celular = $_POST['celular'];
$pass = md5($_POST['pass']);


$sql = "INSERT INTO empleados (nombre,apellidos,ci,celular,pass) VALUES ('$nombres','$apellidos','$carnet','$celular','$pass')";

$result =  $con->query($sql);


if ($result != null) {
    print "<script>alert(\"Registro Exitoso \");window.location='empleados.php';</script>";
} else {
    print "<script>alert(\"Error al registrar..\");window.location='empleados.php';</script>";
}
