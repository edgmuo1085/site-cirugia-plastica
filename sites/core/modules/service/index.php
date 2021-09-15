<?php require 'validate.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../../public/img/favicon.png" type="image/x-icon">
    <title>.::CMS - Cirugia Plastica::.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/main.css">
</head>

<body>

    <header id="inicio">
        <nav class="navbar boxshadow navbar-expand-sm navbar-light header-bg fixed-top" aria-label="navbar">
            <div class="container">
                <a class="navbar-brand" href="#"> <img src="<?php echo DIR_IMAGENES; ?>img/firma.png" alt="firma" height="60"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsPage" aria-controls="navbarsPage" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-md-end" id="navbarsPage">
                    <ul class="navbar-nav mb-2 mb-sm-0 color-white">
                        <li class="nav-item"> <a class="nav-link text-uppercase" aria-current="page" href="#"><?php echo $_SESSION['nombres'] ?></a> </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PERFIL
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="../login/">CERRRAR SESIÓN</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="margen-top container-fluid px-0">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <?php
                        if ($_SESSION['rol'] == 0) {
                            echo '<li><a href="../Usuarios/"><i class="fa fa-users" aria-hidden="true"></i> Usuarios</a></li>';
                        }
                        ?>
                        <li><a href="../service/"><i class="fa fa-picture-o" aria-hidden="true"></i> Servicios</a></li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="page-header alert alert-info">Slider</h1>
                    <button type="button" class="btn btn-primary" id="btnNuevo">Nuevo</button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12">
                    <!-- CONTENIDO -->
                    <table class="table table-bordered table-responsive" id="table">
                        <thead>
                            <th></th>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Imagen</th>
                            <th>Activo</th>
                            <th>Fecha Registro</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($registros as $registro) {
                                echo '<tr>
                                        <td>
                                            <a href="#" onclick="editarReg(\'' . concatenar($registro) . '\')" data-toggle="tooltip" data-placement="right" title="Editar Registro"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
                                            <a href="#" onclick="editarImg(\'' . $registro['id'] . '\',\'' . DIR_IMAGENES . $registro['image'] . '\')" data-toggle="tooltip" data-placement="right" title="Editar Imagen"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            <a href="#" onclick="eliminarReg(' . $registro['id'] . ')" data-toggle="tooltip" data-placement="right" title="Eliminar"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                                        </td>
                                        <td>' . $registro['title'] . '</td>
                                        <td>' . $registro['description'] . '</td>
                                        <td class="text-center"><img class="cursorPointer" onclick="editarImg(\'' . $registro['id'] . '\',\'' . DIR_IMAGENES . $registro['image'] . '\')" width="100px" src="' . DIR_IMAGENES . $registro['image'] . '" alt="Imagen slider"></td>
                                        <td>' . $registro['category'] . '</td>
                                        <td>' . $registro['createdat'] . '</td>
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </main>
    <!-- /#wrapper -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/bb6fec3165.js"></script>
    <script src="../../../public/js/form.js"></script>
    <script src="../../../public/js/main.js"></script>
</body>

</html>