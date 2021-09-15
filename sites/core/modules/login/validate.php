<?php
session_start();
$_SESSION = array();
$params = session_get_cookie_params();
setcookie(
    session_name(),
    '',
    time() - 42000,
    $params["path"],
    $params["domain"],
    $params["secure"],
    $params["httponly"]
);
session_destroy();
$respuesta = "";

if (isset($_POST['user'], $_POST['passw']) && !empty($_POST['user']) && !empty($_POST['passw'])) {
    //VALIDAR USUARIO
    require '../../engines/user.php';
    $u = new Usuarios();

    if ($u->estado) {
        $user = $u->validarIngreso($_POST['user'], $_POST['passw']);
        
        if (!$user) {
            $respuesta = '<div class="text-center alert alert-danger">El usuario o contraseña son incorrectos</div>';
        } else {
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['usuario'] = $user['usuario'];
            $_SESSION['nombres'] = $user['nombres'];
            $_SESSION['rol'] = $user['rol'];
            $_SESSION['correo'] = $user['correo'];
            if ($user['rol'] == 0) {
                header("location: ../user/");
            } else {
                header("location: ../service/");
            }
        }
    } else {
        $respuesta = '<div class="text-center alert alert-danger">ERROR: Login_CONEX<br>Se produjo un error en la solicitud, contacte al administrador de la aplicacion</div>';
    }
}
