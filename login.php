
<?php
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width: 1100px;" class="d-block " src="img/1.jpg"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img style="width: 1100px;" class="d-block " src="img/2.jpg"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img style="width: 1100px;" class="d-block " src="img/3.jpg"  alt="First slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
session_start();
require_once('conexionBD.php');

$celular = $_POST['celular'];
$pass = md5($_POST['pass']);

$sql =  "SELECT empleados.id_emp, cargo, empleados.celular, empleados.pass, empleados.nombre
FROM empleados, roles
WHERE empleados.id_emp = roles.id_emp  AND empleados.celular = '$celular' AND empleados.pass = '$pass' LIMIT 1";

$result = $con->query($sql);

foreach ($result as $consulta) {
    $id = $consulta["id_emp"];
    $cargo = $consulta["cargo"];
    $nombre = $consulta["nombre"];
}

if ($result->num_rows > 0) {

    $_SESSION["id_emp"] = $id;
    $_SESSION["cargo"] = $cargo;
    $_SESSION["nombre"] = $nombre;
    
    print "<script>alert(\"Bienvenido  \");window.location='../inicio.php';</script>";
} else {
    print "<script>alert(\"Empleado no Registrado.\");window.location='../index.php';</script>";
}


?>