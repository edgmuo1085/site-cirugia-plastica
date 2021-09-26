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
                        <h1 class="mt-4">Servicios</h1>
                        <span class="border-1"> </span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="table">
                            <thead class="table-dark align-middle">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">TÍTULO</th>
                                    <th scope="col">DESCRIPCIÓN</th>
                                    <th scope="col">IMAGEN</th>
                                    <th scope="col">CATEGORÍA</th>
                                    <th scope="col">CREADO</th>
                                    <th scope="col">ÚLTIMA MODIFICACIÓN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($registros as $registro) {
                                    echo '<tr>
                                    <td>
                                        <a href="#" onclick="edithRegisterService(\'' . implode("._.", array_values($registro)) . '\')" data-bs-toggle="modal" data-bs-target="#modalEditar"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>
                                        <a href="#" onclick="editarRegisterImagen(\'' . $registro['id'] . '\',\'' . DIR_IMAGENES . $registro['image'] . '\')"> <i class="fa fa-picture-o" aria-hidden="true"></i> </a>
                                    </td>
                                    <td>' . $registro['title'] . '</td>
                                    <td>' . $registro['description'] . '</td>
                                    <td class="text-center"><img class="cursorPointer" onclick="editarImg(\'' . $registro['id'] . '\',\'' . DIR_IMAGENES . $registro['image'] . '\')" width="100px" src="' . DIR_IMAGENES . $registro['image'] . '" alt="Imagen slider"></td>
                                    <td>' . $registro['category'] . '</td>
                                    <td>' . $registro['createdat'] . '</td>
                                    <td>' . $registro['updatedat'] . '</td>
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

    <div>
        <!-- Modal -->
        <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditarLabel">Servicios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form class="row g-3 needs-validation" novalidate method="POST" autocomplete="off" enctype="multipart/form-data">
                            <input id="id" name="id" hidden />
                            <input id="action" name="action" hidden />
                            <div class="col-md-12 position-relative">
                                <label for="title" class="form-label">Título</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                                <div class="valid-tooltip">
                                    Correcto!
                                </div>
                            </div>
                            <div class="margin-form"></div>
                            <div class="col-md-12 position-relative">
                                <label for="description" class="form-label">Descripción</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                <div class="valid-tooltip">
                                    Correcto!
                                </div>
                            </div>

                            <div class="margin-form"></div>
                            <div class="col-md-12 position-relative">
                                <label for="category" class="form-label">Categoría</label>
                                <select class="form-select form-select-sm" id="category" name="category" aria-label=".form-select-sm example" required>
                                    <option selected></option>
                                    <?php

                                    $sl = new Service('');
                                    $category = null;
                                    $categories = $sl->getAllCategory();
                                    foreach ($categories as $category) {
                                        echo $category['category'];
                                        echo "<option value=" . $category['category'] . ">" . $category['category'] . "</option>";
                                    }

                                    ?>
                                </select>
                                <div class="valid-tooltip">
                                    Correcto!
                                </div>
                            </div>

                            <div class="margin-form"></div>
                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>



                        <!--  <form method="POST" id="form1" autocomplete="off" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="title">title:</label>
                                    <input type="text" class="form-control" maxlength="200" name="title" id="title" placeholder="Ingrese el title" autofocus>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label for="descripcion">Descripcion:</label>
                                    <textarea class="form-control" maxlength="255" name="descripcion" id="descripcion" rows="3" placeholder="Ingrese una descripcion"></textarea>
                                    <input id="id" name="id" hidden />
                                    <input id="action" name="action" hidden />
                                </div>
                            </div>
                            <div class="row">
                                <div id="dvImg" class="form-group col-xs-12">
                                    <label for="imagen">Imagen(*) (958x460px):</label>
                                    <input type="file" class="form-control" name="imagen[]" id="imagen" accept="image/*" required>
                                    <div id="vistaPrevUp" class="text-center" hidden>
                                        <img class="img-responsive img-thumbnail" width="400px" id="imgUp" src="" alt="Vista Previa">
                                        <div id="mjesImgUp"></div>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label for="estado">Activo:</label>
                                    <select id="estado" name="estado" class="form-control">
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
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
                        </form> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
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