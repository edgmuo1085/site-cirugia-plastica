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

    <?php
    require '../menu/index.php';
    echo $menu;
    ?>

    <main class="margen-top container-fluid px-0">

        <section class="servicios mt-5" id="servicios">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center">
                        <h1 class="mt-4">Usuarios</h1>
                        <span class="border-1"> </span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="table">
                            <thead class="table-dark align-middle">
                                <tr>
                                    <th scope="col" class="text-uppercase">#</th>
                                    <th scope="col" class="text-uppercase">Nombres</th>
                                    <th scope="col" class="text-uppercase">Usuario</th>
                                    <th scope="col" class="text-uppercase">Correo</th>
                                    <th scope="col" class="text-uppercase">Estado</th>
                                    <th scope="col" class="text-uppercase">Nivel</th>
                                    <th scope="col" class="text-uppercase">Creación</th>
                                    <th scope="col" class="text-uppercase">Modificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($users as $user) {
                                    echo '<tr>
                                    <td>
                                        <a href="#" onclick="edithRegisterUser(\'' . implode("._.", array_values($user)) . '\')" data-bs-toggle="modal" data-bs-target="#modalEditarUser"> <i class="fa fa-pencil" aria-hidden="true"></i> e</a>
                                        <a href="#" onclick="desactivarUser(' . $user['id'] . ', ' . $user['estado'] . ')"> <i class="fa fa-picture-o" aria-hidden="true"></i> </a>
                                    </td>
                                    <td>' . $user['nombres'] . '</td>
                                    <td>' . $user['usuario'] . '</td>
                                    <td>' . $user['correo'] . '</td>
                                    <td>' . ($user['estado'] == 1 ? 'Activo' : 'Inactivo') . '</td>
                                    <td>' . ($user['rol'] == 1 ? 'Estandar' : 'Administrador') . '</td>
                                    <td>' . $user['createdat'] . '</td>
                                    <td>' . $user['updatedat'] . '</td>
                                </tr>
                                ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <div class="modal fade" id="modalEditarUser" tabindex="-1" aria-labelledby="modalEditarUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarUserLabel">Usuarios</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-info">Todos los campos con (*) son obligatorios</div>
                        </div>
                    </div>
                    <form class="row g-3 needs-validation" novalidate method="POST" autocomplete="off">
                        <input id="id" name="id" hidden />
                        <input id="action" name="action" hidden />
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6 position-relative">
                                    <label for="nombres" class="form-label">Nombres (*)</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" required>
                                    <div class="valid-tooltip">
                                        Correcto!
                                    </div>
                                </div>

                                <div class="col-md-6 position-relative">
                                    <label for="user" class="form-label">Usuario (*)</label>
                                    <input type="text" class="form-control" id="user" name="user" required>
                                    <div class="valid-tooltip">
                                        Correcto!
                                    </div>
                                </div>
                            </div>
                            <span class="margin-form"></span>

                            <div class="row justify-content-center">
                                <div class="col-md-6 position-relative">
                                    <label for="passw" class="form-label">Contraseña</label>
                                    <input type="text" class="form-control" id="passw" name="passw">
                                    <div class="valid-tooltip">
                                        Correcto!
                                    </div>
                                </div>

                                <div class="col-md-6 position-relative">
                                    <label for="correo" class="form-label">Correo electrónico</label>
                                    <input type="text" class="form-control" id="correo" name="correo">
                                    <div class="valid-tooltip">
                                        Correcto!
                                    </div>
                                </div>
                            </div>
                            <span class="margin-form"></span>

                            <div class="row justify-content-center">
                                <div class="col-md-6 position-relative">
                                    <label for="estado" class="form-label">Estado (*)</label>
                                    <select class="form-select form-select-sm" id="estado" name="estado" aria-label=".form-select-sm estado" required>
                                        <option></option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                    <div class="valid-tooltip">
                                        Correcto!
                                    </div>
                                </div>

                                <div class="col-md-6 position-relative">
                                    <label for="rol" class="form-label">Rol</label>
                                    <select class="form-select form-select-sm" id="rol" name="rol" aria-label=".form-select-sm rol" required>
                                        <option></option>
                                        <option value="estandar">Estandar</option>
                                        <option value="admin">Administrador</option>
                                    </select>
                                    <div class="valid-tooltip">
                                        Correcto!
                                    </div>
                                </div>
                            </div>
                            <span class="margin-form"></span>

                        </div>

                        <div class="d-grid gap-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>






    <!-- MODALES -->
    <!-- Modal usuarios -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">USUARIOS</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">Todos los campos con (*) son obligatorios</div>
                    <form method="POST" id="form1" autocomplete="off">
                        <div class="row">
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="nombres">Nombres(*):</label>
                                <input type="text" class="form-control" maxlength="40" name="nombres" id="nombres" placeholder="Ingrese los nombres" autofocus required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="user">Usuario(*):</label>
                                <input type="text" class="form-control" maxlength="15" name="user" id="user" placeholder="Ingrese algun nombre de usuario" required>
                                <input id="id" name="id" hidden />
                                <input id="action" name="action" hidden />
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="passw">Contraseña(*):</label>
                                <input type="password" class="form-control" minlength="6" maxlength="40" name="passw" id="passw" placeholder="Ingrese la contraseña para el usuario" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="correo">Correo:</label>
                                <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese un correo">
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="estado">Activo:</label>
                                <select id="estado" name="estado" class="form-control">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <!-- LISTA QUEMADA POSIBLE IMPLEMENTACION ROLES -->
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="rol">Rol:</label>
                                <select id="rol" name="rol" class="form-control">
                                    <option value="e">Estandar</option>
                                    <option value="a">Administrador</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group pull-right btns">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- PERFIL -->
    <div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">PERFIL</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">Todos los campos con (*) son obligatorios</div>
                    <form method="POST" autocomplete="off">
                        <div class="row">
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="nombres">Nombres(*):</label>
                                <input value="<?php echo $_SESSION['nombres']; ?>" type="text" class="form-control" maxlength="40" name="nombresPerfil" placeholder="Ingrese los nombres" autofocus required>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="user">Usuario(*):</label>
                                <input value="<?php echo $_SESSION['usuario']; ?>" type="text" class="form-control" maxlength="15" name="userPerfil" placeholder="Ingrese algun nombre de usuario" required>
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="passw">Contraseña(*):</label>
                                <input type="password" class="form-control" minlength="6" maxlength="40" name="passwPerfil" placeholder="Ingrese la contraseña para el usuario" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 col-md-6">
                                <label for="correo">Correo:</label>
                                <input value="<?php echo $_SESSION['correo']; ?>" type="email" class="form-control" name="correoPerfil" placeholder="Ingrese un correo">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group pull-right btns">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/bb6fec3165.js"></script>
    <script src="../../../public/js/form.js"></script>
    <script src="../../../public/js/main-admin.js"></script>
</body>

</html>