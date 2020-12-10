<?php
include_once('librerias/cab.php');
?>

<?php
require_once('librerias/conexionBD.php');

$id_emp = $_SESSION['id_emp'];

if ($_SESSION['cargo'] == 'administrador') {
    $sql = "SELECT * FROM clientes ";
    $result =  $con->query($sql);
    $usuarios = array();
    while ($fila =  $result->fetch_array()) {
        $usuarios[] = $fila;
    }

} else {
    $sql = "SELECT * FROM clientes WHERE clientes.id_emp = $id_emp";
    $result =  $con->query($sql);
    $usuarios = array();
    while ($fila =  $result->fetch_array()) {
        $usuarios[] = $fila;
    }
}
?>
<div class="container-12">

    <div class="col-lg-11 py-4 mx-auto">

        <h1 class="text-center">Clientes</h1>
        <p>
            <a href="cliente-insertar.php" class="btn btn-success"> Insertar Nuevo Cliente</a>
        </p>
        <table class="table table-striped text-center">
            <tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Nro. de Carnet</th>
                <th>Celular</th>
                <th>Direccion</th>
                <th colspan="2">Acciones</th>
            </tr>
            <?php foreach ($usuarios as $item) : ?>
                <tr>
                    <td><?= $item['id_cli'] ?></td>
                    <td><?= $item['nombre'] ?></td>
                    <td><?= $item['apellidos'] ?></td>
                    <td><?= $item['ci'] ?></td>
                    <td><?= $item['celular'] ?></td>
                    <td><?= $item['direccion'] ?></td>


                    <td>
                        <a href="cliente-modifica.php?id=<?= $item['id_cli'] ?>" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                        <a href="cliente-elimina.php?id=<?= $item['id_cli'] ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

</div>


<?php
include_once('librerias/pie.php');
?>