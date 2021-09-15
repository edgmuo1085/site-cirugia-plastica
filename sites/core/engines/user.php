<?php
class Usuarios
{

    private $con = null;
    public $estado = false;

    public function __construct()
    {
        require_once('config.php');
        $c = new Conexion();
        $this->con = $c->get();
        $this->estado = $this->con != null;
    }
    function __destruct()
    {
        unset($this->con);
    }
    public function validarIngreso($user, $password)
    {
        $query = "SELECT id,usuario,nombres,rol,correo FROM usuarios WHERE usuario = ? AND clave = sha1(?) AND estado = 1";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1, $user);
        $consulta->bindParam(2, $password);
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
    public function editar($id, $usuario, $nombres, $clave, $correo, $estado, $rol)
    {
        $query = "UPDATE usuarios SET usuario=?, nombres=?, clave=sha1(?), correo=?, estado=?,rol=? WHERE id=?";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1, $usuario);
        $consulta->bindParam(2, $nombres);
        $consulta->bindParam(3, $clave);
        $consulta->bindParam(4, $correo);
        $consulta->bindParam(5, $estado);
        $consulta->bindParam(6, $rol);
        $consulta->bindParam(7, $id);
        return $consulta->execute();
    }
    /* public function crear($usuario,$nombres,$clave,$correo,$estado,$rol){        
        $query = "INSERT INTO usuarios VALUES (null,?,?,?,sha1(?),?,?,?,now())";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1,$nombres);
        $consulta->bindParam(3,$usuario);
        $consulta->bindParam(4,$clave);        
        $consulta->bindParam(5,$correo);        
        $consulta->bindParam(6,$estado);        
        $consulta->bindParam(7,$rol);        
        return $consulta->execute();
    }
    
    public function eliminar($id){
        $query = "DELETE FROM usuarios WHERE id=?";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1,$id);        
        return $consulta->execute();
    } */
    public function getUsuario($id)
    {
        $query = "SELECT * FROM usuarios WHERE id=?";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1, $id);
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
    public function getUsuarios($excepto = 1)
    {
        $query = "SELECT * FROM usuarios WHERE id<>1 AND id<>? ORDER BY id DESC";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1, $excepto);
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
