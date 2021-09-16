<?php
session_start();
if (!isset($_SESSION['id'], $_SESSION['correo'], $_SESSION['nombres'], $_SESSION['usuario'], $_SESSION['rol'])) {
    header("location: ../login");
} else {
    //RUTA DE IMAGENES    
    define("DIR_IMAGENES", '../../../public/img/servicios/');
    require '../../engines/service.php';

    $s = new Service('');

    if (!$s->estado) die("SIN ACCESO A LA BASE DE DATOS");

    if (isset($_POST['action']) && !empty($_POST['action'])) {
        switch ($_POST['action']) {
            case 'crear':
                if (
                    isset($_POST['titulo'], $_POST['descripcion'], $_FILES['imagen'], $_POST['estado']) && !empty($_FILES['imagen']) &&
                    ($_POST['estado'] == 0 || $_POST['estado'] == 1)
                ) {
                    //INICIAR INSERCION
                    //$s->crear($_POST['titulo'],$_POST['descripcion'],$_FILES,$_POST['estado']);
                }
                break;
            case 'editarReg':
                if (isset($_POST['category'], $_POST['description'], $_POST['title'], $_POST['id']) && !empty($_POST['id'])) {
                    $s->editarRegistro($_POST['id'], $_POST['title'], $_POST['description'], $_POST['category']);
                }
                break;
            case 'consultar':
                if (isset($_POST['id']) && !empty($_POST['id'])) {
                    echo 'consultar';
                    $s->getOne($_POST['id']);
                }
                break;
            case 'eliminar':
                if (isset($_POST['id']) && !empty($_POST['id'])) {
                    //$s->eliminar($_POST['id']);                        
                }
                break;
        }
        header("location: ./");
    }

    if (isset($_POST['action2']) && $_POST['action2'] == 'editarImg') {
        if (isset($_POST['id2'], $_FILES['imagen2']) && !empty($_POST['id2']) && !empty($_FILES['imagen2'])) {
            //$s->editarImg($_POST['id2'],$_FILES);
            header("location: ./");
        }
    }

    if (isset($_POST['nombresPerfil'], $_POST['apellidosPerfil'], $_POST['userPerfil'], $_POST['passwPerfil'], $_POST['correoPerfil']) && !(empty($_POST['nombresPerfil']) || empty($_POST['userPerfil']) || empty($_POST['passwPerfil']))) {
        require '../../engines/user.php';
        $u = new Usuarios();
        if (!$u->estado) die("SIN ACCESO A LA BASE DE DATOS");
        if ($u->editar($_SESSION['id'], $_POST['userPerfil'], $_POST['nombresPerfil'], $_POST['apellidosPerfil'], $_POST['passwPerfil'], $_POST['correoPerfil'], 1, $_SESSION['rol'])) {
            $_SESSION['usuario'] = $_POST['userPerfil'];
            $_SESSION['nombres'] = $_POST['nombresPerfil'];
            $_SESSION['correo'] = $_POST['correoPerfil'];
        }
    }

    function concatenar($registro)
    {
        return $registro['id'] . '&amp;' . $registro['title'] . '&amp;' . str_replace("\r\n", '\n', $registro['description']);
    }

    $registros = $s->getAll();
}
