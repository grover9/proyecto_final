<?php
session_start();
if (!isset($_SESSION['id_emp'])) {

    print "<script>alert(\"Acceso Denegado \");window.location='index.php';</script>";
}
$cargo = $_SESSION['cargo'];
$nombre = $_SESSION['nombre'];
?>
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



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Prestamos</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link btn btn-success btn-sm" href="#">
                        <?php echo $cargo; ?>: <?php echo $nombre; ?> </a>
                </li>
                <?php
                if ($cargo == 'administrador') {
                ?>

                    <li class="nav-item active">
                        <a class="nav-link" href="inicio.php">Inicio </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="empleados.php">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="roles.php">Roles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prestamos.php">Prestamos </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link btn btn-danger btn-sm" href="librerias/logout.php">Cerrar Sesion</a>
                    </li>

                    <?php
                } else {
                    if ($cargo == 'empleado') {
                    ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="inicio.php">Inicio </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clientes.php">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="prestamos.php">Prestamos </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link btn btn-danger btn-sm" href="librerias/logout.php">Cerrar Sesion</a>
                        </li>

                <?php
                    }
                }
                ?>

            </ul>
        </div>
    </nav>

    <!-- Begin page content -->
    <main role="main">
