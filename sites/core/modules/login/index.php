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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 login">
                <h1 class="d-block text-center">CMS</h1>
                <span class="login-icon">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </span>

                <?php echo $respuesta; ?>
                <form class="row g-3 needs-validation" novalidate method="POST">

                    <div class="col-md-12 position-relative">
                        <label for="user" class="form-label">Nombre de usuario</label>
                        <input type="text" class="form-control" id="user" name="user" required>
                        <div class="valid-tooltip">
                            Correcto!
                        </div>
                    </div>
                    <div class="margin-form"></div>
                    <div class="col-md-12 position-relative">
                        <label for="passw" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="passw" name="passw" required>
                        <div class="valid-tooltip">
                            Correcto!
                        </div>
                    </div>
                    <div class="margin-form"></div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/bb6fec3165.js"></script>
    <script src="../../../public/js/form.js"></script>
</body>

</html>