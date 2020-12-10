<?php
include_once('librerias/cab.php');
?>

<?php
require_once('librerias/conexionBD.php');
$sql = "select * from empleados";
$result =  $con->query($sql);
$user = array();
while ($fila =  $result->fetch_array()) {
  $user[] = $fila;
}
?>



<div class="container">

  <div class="col-lg-5 py-5 mx-auto">

    <h2 class="text-center">Asignar Roles a Empleados</h2>
<br>
    <form action="roles-insertar-procesa.php" method="post">
    

      <div class="form-group">
        <label for="">Datos del Empleado</label>

        <select name="id_emp" class="form-control">

          <option value="">-- Seleccione --</option>

          <?php foreach ($user as $item) : ?>
            <option value="<?= $item['id_emp'] ?>"><?= $item['nombre']; ?> <?= $item['apellidos']; ?> | CI.<?=$item['ci']; ?></option>
          <?php endforeach ?>

        </select>
      </div>

      <div class="form-group">
        <label for="">Cargo</label>
        
        <select name="cargo" class="form-control">

          <option value="">-- Seleccione --</option>

            <option value="administrador">Administrador</option>
            <option value="empleado">Empleado</option>
          

        </select>
      </div>



      <div align="center">
        <button type="submit" class="btn btn-success">Enviar</button>
        <a class="btn btn-primary" href="roles.php">Volver</a>
      </div>
    </form>



  </div>

</div>






<?php
include_once('librerias/pie.php');
?>