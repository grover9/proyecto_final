<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$bdat = 'sisfinal';

$con = new mysqli($host,$user,$pass,$bdat);

if ($con->connect_errno > 0){
    die('Error de conexion ' . $con->connect_error);
}
?>