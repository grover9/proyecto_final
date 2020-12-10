<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="container">
        <div class="col-lg-5 py-4 mx-auto border border-dark rounded">

            <h2 align="center">LOGIN</h2>

            <form action="librerias/login.php" method="post" autocomplete="off">

                <div class="form-group">
                    <label for="exampleInputEmail1">N° de Celular</label>
                    <input type="number" name="celular" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autofocus>
                    <small id="emailHelp" class="form-text text-muted">Ingrese su numero de celular para ingresar.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
                </div>

                <button type="submit" class="btn btn-primary  btn-lg btn-block  ">Ingresar</button>
                
            </form>

        </div>
    </div>


<?php
include_once('librerias/pie.php');
?>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>