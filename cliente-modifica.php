<?php
require_once('librerias/cab.php');
?>

<?php
require_once("librerias/conexionBD.php");
$id = $_REQUEST['id'];
$sql = "SELECT * FROM clientes WHERE id_cli = $id";
$query = $con->query($sql);
$row = $query->fetch_array();
?>



<div class="text-center">
    <div class="container ">


        <div class="col-lg-5 py-4 mx-auto">

            <div>
                <h1>Modificar Datos del Cliente</h1>





                <form class="text-left" name="modificar" action="cliente-modifica-procesa.php?id=<?= $row['id_cli']; ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                    
                        <div class="form-group"> <label for="form16">Nombres</label>
                            <input type="text" class="form-control" name="nombres" value="<?php echo $row['nombre']; ?>" required autofocus> </div>

                        <div class="form-group"> <label for="form17">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>"> </div>

                        <div class="form-group"> <label for="form17">Carnet de Identidad</label>
                            <input type="text" class="form-control" name="carnet" value="<?php echo $row['ci']; ?>"> </div>

                        <div class="form-group"> <label for="form17">Nro. de Celular</label>
                            <input type="text" class="form-control" name="celular" value="<?php echo $row['celular']; ?>"> </div>


                        <div class="form-group"> <label for="form18">Direccion</label>
                            <input type="text" class="form-control" name="dir" value="<?= $row['direccion'];?>" required> </div>





                        <div align="center">
                            <button type="submit" class="btn btn-success">Guardar</button>

                            <a class="btn btn-primary" href="clientes.php">Volver</a>

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