<?php
include_once('librerias/cab.php');
?>

<?php
require_once('librerias/conexionBD.php');
$sql = "select * from empleados";
$result =  $con->query($sql);
$usuarios = array();
while ($fila =  $result->fetch_array()) {
    $usuarios[] = $fila;
}
?>
<div class="container-12">
    
    <div class="col-lg-11 py-4 mx-auto">
            
            <h1 class="text-center">Empleados</h1>
            <p>
                <a href="empleado-insertar.php" class="btn btn-success"> Insertar Nuevo Empleado</a>
            </p>
            <table class="table table-striped text-center">
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Nro. de Carnet</th>
                    <th>Celular</th>
                    <th colspan="2">Acciones</th>
                </tr>
                <?php foreach ($usuarios as $item) : ?>
                    <tr>
                        <td><?= $item['id_emp'] ?></td>
                        <td><?= $item['nombre'] ?></td>
                        <td><?= $item['apellidos'] ?></td>
                        <td><?= $item['ci'] ?></td>
                        <td><?= $item['celular'] ?></td>
                        

                        <td>
                            <a href="empleado-modifica.php?id=<?= $item['id_emp'] ?>" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <a href="empleado-elimina.php?id=<?= $item['id_emp'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    
</div>


<?php
include_once('librerias/pie.php');
?>