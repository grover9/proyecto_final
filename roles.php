<?php
include_once('librerias/cab.php');
?>

<?php
require_once('librerias/conexionBD.php');
$sql = "SELECT empleados.id_emp,id, nombre, ci, cargo
FROM empleados, roles
WHERE roles.id_emp = empleados.id_emp";
$result =  $con->query($sql);
$roles = array();
while ($fila =  $result->fetch_array()) {
    $roles[] = $fila;
}

?>

<div class="container-12">

    <div class="col-lg-10 py-4 mx-auto">

        <h1 class="text-center">Roles</h1>
        <p>
            <a href="roles-insertar.php" class="btn btn-success"> Insertar Nuevo Rol</a>
        </p>
        <table class="table table-striped text-center">
            <tr>

                <th>Id Empleado</th>
                <th>Nombres</th>
                <th>Carnet de Identidad</th>
                <th>Cargo</th>
                <th>Acciones</th>

            </tr>
            <?php foreach ($roles as $item) : ?>
                <tr>
                    <td><?= $item['id_emp'] ?></td>
                    <td><?= $item['nombre'] ?></td>
                    <td><?= $item['ci'] ?></td>
                    <td><?= $item['cargo'] ?></td>



                    <td>
                        <a href="roles-elimina.php?id=<?= $item['id'] ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

</div>


<?php
include_once('librerias/pie.php');
?>