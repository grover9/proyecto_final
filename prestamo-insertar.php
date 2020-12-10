<?php
include_once('librerias/cab.php');
?>
<?php
require_once('librerias/conexionBD.php');
$id_emp = $_SESSION['id_emp'];
$sql = "SELECT * FROM clientes WHERE clientes.id_emp = $id_emp";
$result =  $con->query($sql);
$roles = array();
while ($fila =  $result->fetch_array()) {
    $roles[] = $fila;
}
?>


<div class="container">

    <div class="col-lg-5 py-4 mx-auto">
        <h1 class="text-center">Nuevo Prestamo</h1>
        <form action="prestamo-insertar-procesa.php" method="post" autocomplete="off">

            <div class="form-group">

                <label for="">ID de Asesor</label>
                <input type="number" name="id_emp" class="form-control" value="<?php echo $_SESSION['id_emp']; ?>" readonly>

            </div>

            <hr>
            <div class="form-group">

                <label for=""> Datos del Cliente</label>
                <select name="id_cli" class="form-control" required autofocus>

                    <option value="">-- Seleccione --</option>

                    <?php foreach ($roles as $item) : ?>
                        <option value="<?= $item['id_cli'] ?>"><?= $item['nombre']; ?> <?= $item['apellidos'] ?> | CI.: <?= $item['ci']; ?></option>
                    <?php endforeach ?>

                </select>
            </div>
            <hr>
            <div class="form-group">

                <label for="">Monto del Prestamo</label>
                <input id="a" type="number" name="monto" class="form-control" required autofocus>
            </div>
            <div class="form-group">

                <label for="">Nro. de Meses a pagar</label>
                <input id="b" type="number" name="t_pago" class="form-control" onChange="AddMes()" required autofocus>
                
            </div>
            <div class="form-group">
                <label for="">Couta Mensual en Bs.</label>
                <input id="r" type="number" name="cuota" class="form-control" readonly>

                <div class="py-2" align="center">
                    <input class="btn btn-warning btn-sm" type="button" value="Calcular" onclick="division()" />
                </div>
            </div>
            <div class="form-group">
                <label for="">Fecha de Prestamo</label>

                
                <input  type="text"  id="MyDate" name="fecha_ini" class="form-control" value="" >
                
            </div>

            <div class="form-group">
                <label for="">Fecha de Conclusion de Prestamo</label>

                
                <input type="text" id="MyDate3" name="fecha_fin" class="form-control" >
            </div>






            <div align="center">
                <button type="submit" class="btn btn-success">Guardar</button>

                <a class="btn btn-primary" href="prestamos.php">Volver</a>
            </div>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
    function division() {
        var numero1 = Number($("#a").val());
        var numero2 = Number($("#b").val());
        var sumar = numero1 / numero2;
        var resultado = $("#r").val(sumar);
    }
</script>




<script>
    var obj = document.getElementById('MyDate');
    var obj2 = document.getElementById('b');
    var obj3 = document.getElementById('MyDate3');
    obj.value = setFormato(new Date());

    function AddMes() {
        var fecha = new Date(obj.value);
        
        fecha.setMonth(fecha.getMonth() + +(obj2.value));
        obj3.value = setFormato(fecha);
    }

    function setFormato(fecha) {
        var day = ("0" + fecha.getDate()).slice(-2);
        var month = ("0" + (fecha.getMonth() + 1)).slice(-2);
        var date = (month) + "-" + (day) + "-" + fecha.getFullYear();
        return date;
    }
</script>

<?php
include_once('librerias/pie.php');
?>