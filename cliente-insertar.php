<?php
include_once('librerias/cab.php');
?>




<div class="container">

    <div class="col-lg-5 py-4 mx-auto">
        <h1 class="text-center">Nuevo Cliente</h1>

        <form action="cliente-insertar-procesa.php" method="post" autocomplete="off">

            <div class="form-group">

                <label for="">ID de Asesor</label>
                <input type="number" name="id_emp" class="form-control" value="<?php echo $_SESSION['id_emp']; ?>" disabled>

            </div>
            <hr>
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
                <label for="">Direccion</label>
                <input type="text" name="dir" class="form-control" required>
            </div>



            <div align="center">
                <button type="submit" class="btn btn-success">Guardar</button>

                <a class="btn btn-primary" href="clientes.php">Volver</a>
            </div>
        </form>
    </div>
</div>





<?php
include_once('librerias/pie.php');
?>