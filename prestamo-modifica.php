<?php
require_once('librerias/cab.php');
?>

<?php
require_once("librerias/conexionBD.php");
$id = $_REQUEST['id'];
$sql = "SELECT clientes.id_emp, clientes.nombre, clientes.apellidos, clientes.ci, monto, t_pago,cuota,fecha_ini, fecha_fin
FROM prestamos,clientes
WHERE id_pre = '$id' AND clientes.id_cli = prestamos.id_cli";
$query = $con->query($sql);
$row = $query->fetch_array();
?>



<div class="text-center">
    <div class="container ">


        <div class="col-lg-5 py-4 mx-auto">

            <div>
                <h1>Modificar Datos del Prestamo</h1>





                <form class="text-left" name="modificar" action="prestamo-modifica-procesa.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data" autocomplete="off">

                    <div class="form-group"> <label for="form16">ID de Asesor</label>
                        <input type="number" class="form-control" name="id_emp" value="<?php echo $row['id_emp']; ?>" readonly>
                    </div>
                    <hr>
                    <div class="form-group"> <label for="form17">Datos del Cliente</label>
                        <input type="text" class="form-control" name="id_cli" value="<?php echo $row['nombre']; ?> <?php echo $row['apellidos']; ?> | CI:<?php echo $row['ci']; ?>" readonly>
                    </div>
                    <hr>
                    <div class="form-group"> <label for="form17">Monto del Prestamo</label>
                        <input type="number" class="form-control" name="monto" value="<?php echo $row['monto']; ?>">
                    </div>

                    <div class="form-group"> <label for="form17">Nro. de Meses a Pagar</label>
                        <input type="number" class="form-control" name="t_pago" value="<?php echo $row['t_pago']; ?>">
                    </div>


                    <div class="form-group"> <label for="form18">Cuota Mensual</label>
                        <input type="number" class="form-control" name="cuota" value="<?php echo $row['cuota']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Fecha de Prestamo</label>


                        <input type="date" name="fecha_ini" class="form-control" value="<?php echo $row['fecha_ini']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de Conclusion de Prestamo</label>


                        <input type="date" name="fecha_fin" class="form-control" value="<?php echo $row['fecha_fin']; ?>">
                    </div>




                    <div align="center">
                        <button type="submit" class="btn btn-success">Guardar</button>

                        <a class="btn btn-primary" href="prestamos.php">Volver</a>

                    </div>

                    <div>&nbsp;</div>

                </form>

            </div>
        </div>
    </div>
</div>

<?php

require_once('librerias/pie.php');
?>