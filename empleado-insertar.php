<?php
include_once('librerias/cab.php');
?>



<div class="container">

    <div class="col-lg-5 py-4 mx-auto">
        <h1 class="text-center">Nuevo Empleado</h1>
        <form action="empleado-insertar-procesa.php" method="post" autocomplete="off">
            <div class="form-group">

                <label for="">Nombres</label>
                <input type="text" name="nombres" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="">Apellidos</label>
                <input type="text" name="apellidos" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Carnet de Identidad</label>
                <input type="number" name="carnet" class="form-control">
            </div>
            <div class="form-group">
                <label for=""> N° Celular</label>
                <input type="number" name="celular" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Contraseña</label>
                <input type="password" name="pass" class="form-control" required>
            </div>

            <div align="center">
                <button type="submit" class="btn btn-success">Guardar</button>

                <a class="btn btn-primary" href="empleados.php">Volver</a>
            </div>
        </form>
    </div>
</div>





<?php
include_once('librerias/pie.php');
?>