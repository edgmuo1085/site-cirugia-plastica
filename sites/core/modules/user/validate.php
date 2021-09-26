<?php
session_start();

if (!isset($_SESSION['id'], $_SESSION['correo'], $_SESSION['nombres'], $_SESSION['usuario'], $_SESSION['rol']) || $_SESSION['rol'] == 1) {
    header("location: ../login");
} else {
    require '../../engines/user.php';
    require '../../engines/calculos.php';
    $u = new Usuarios();
    $cal = new Calculos();
    $arrayUser = array();

    if (!$u->estado) {
        die("SIN ACCESO A LA BASE DE DATOS");
    }

    //INICIAR INSERCION         
    $rol = $_POST['rol'] == 'estandar' ? 1 : 0;

    if (isset($_POST['action']) && !empty($_POST['action'])) {

        if ($_POST['action'] == 'editar') {
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $arrayUser = $cal->updateUser($u->getUsuarioPass($_POST['id']), $_POST['id'], $_POST['nombres'], $_POST['user'], $_POST['passw'], $_POST['correo'], $_POST['estado'], $_POST['rol']);

                $u->editar($arrayUser[0], $arrayUser[1], $arrayUser[2], $arrayUser[3], $arrayUser[4], $arrayUser[5], $arrayUser[6]);
                header("location: ./");
            }
        }

        if (
            isset($_POST['nombres'], $_POST['user'], $_POST['passw'], $_POST['correo'], $_POST['estado']) &&
            !empty($_POST['nombres']) && !empty($_POST['user']) && !empty($_POST['passw']) &&
            ($_POST['estado'] == 0 || $_POST['estado'] == 1) && ($_POST['rol'] == 'estandar' || $_POST['rol'] == 'admin')
        ) {
            if ($_POST['action'] == 'crear') {
                $u->crear($_POST['user'], $_POST['nombres'], $_POST['passw'], $_POST['correo'], $_POST['estado'], $rol);
                header('location: ./');
            }
        }
    }

    if (isset($_POST['action']) && $_POST['action'] == 'desactivar') {
        if (isset($_POST['id']) && !empty($_POST['id']) &&isset($_POST['estado']) && !empty($_POST['estado'])) {
            $u->desactivar($_POST['id'], $_POST['estado']);
            header("location: ./");
        }
    }

    if (isset($_POST['nombresPerfil'], $_POST['userPerfil'], $_POST['passwPerfil'], $_POST['correoPerfil']) && !(empty($_POST['nombresPerfil'])  || empty($_POST['userPerfil']) || empty($_POST['passwPerfil']))) {
        if ($u->editar($_SESSION['id'], $_POST['userPerfil'], $_POST['nombresPerfil'], $_POST['passwPerfil'], $_POST['correoPerfil'], 1, $_SESSION['rol'])) {
            $_SESSION['usuario'] = $_POST['userPerfil'];
            $_SESSION['nombres'] = $_POST['nombresPerfil'];
            $_SESSION['correo'] = $_POST['correoPerfil'];
        }
    }

    $users = $u->getUsuarios($_SESSION['id']);
}
