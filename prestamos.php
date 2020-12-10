<?php
include_once('librerias/cab.php');
?>

<?php
require_once('librerias/conexionBD.php');

if ($_SESSION['cargo'] == 'administrador') {
    $id_emp = $_SESSION['id_emp'];
    $sql = "SELECT id_pre, clientes.ci, monto, cuota, empleados.id_emp, clientes.nombre, clientes.apellidos
FROM prestamos,clientes, empleados
WHERE prestamos.id_cli = clientes.id_cli and clientes.id_emp = empleados.id_emp";
    $result =  $con->query($sql);
    $usuarios = array();
    while ($fila =  $result->fetch_array()) {
        $usuarios[] = $fila;
    }
} else {
    $id_emp = $_SESSION['id_emp'];
    $sql = "SELECT id_pre, prestamos.id_emp, clientes.ci, monto, cuota,  clientes.nombre, clientes.apellidos
FROM clientes,prestamos
WHERE prestamos.id_emp = '$id_emp' AND prestamos.id_cli = clientes.id_cli ";
    $result =  $con->query($sql);
    $usuarios = array();
    while ($fila =  $result->fetch_array()) {
        $usuarios[] = $fila;
    }
}
?>
<div class="container-12">


    <div class="col py-4 mx-auto">

        <h1 class="text-center">Prestamos</h1>
        <p>
            <a href="prestamo-insertar.php" class="btn btn-success">Nuevo Prestamos</a>
        </p>
        <table class="table table-striped text-center">
            <tr>
                <th>ID de Asesor</th>
                <th>Nro. CI. de Cliente</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Monto Prestado</th>
                <th>Couta Mensual</th>


                <th colspan="3">Detalles</th>
            </tr>
            <?php foreach ($usuarios as $item) : ?>
                <tr>
                    <td><?= $item['id_emp'] ?></td>
                    <td><?= $item['ci'] ?></td>
                    <td><?= $item['nombre'] ?></td>
                    <td><?= $item['apellidos'] ?></td>
                    <td><?= $item['monto'] ?></td>
                    <td><?= $item['cuota'] ?></td>

                    <?php
                    if ($_SESSION['cargo'] == 'administrador') {
                    ?>

                        <td>
                            <a target="_blank" href="reporte-prestamos.php?id=<?= $item['id_pre'] ?>" class="btn btn-warning">Mas Info</a>
                        </td>
                        <td>
                            <a href="prestamo-modifica.php?id=<?= $item['id_pre'] ?>" class="btn btn-primary">Modificar</a>
                        </td>
                        <td>
                            <a href="prestamo-elimina.php?id=<?= $item['id_pre'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>

                    <?php
                    } else {
                    ?>
                        <td>
                            <a target="_blank" href="reporte-prestamos.php?id=<?= $item['id_pre'] ?>" class="btn btn-warning">Mas Informacion</a>
                        </td>
                    <?php
                    }

                    ?>



                </tr>
            <?php endforeach ?>
        </table>
    </div>

</div>


<?php
include_once('librerias/pie.php');
?>