<?php
class Slider
{

    private $con = null;
    public $estado = false;

    public function __construct()
    {
        require_once('conection.php');
        $c = new Conexion();
        $this->con = $c->get();
        $this->estado = $this->con != null;
    }
    function __destruct()
    {
        unset($this->con);
    }
   /*  public function crear($numero, $nombre, $telefono)
    {
        $query = "INSERT INTO directorio VALUES (null,?,?,?)";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1, $numero);
        $consulta->bindParam(2, $nombre);
        $consulta->bindParam(3, $telefono);
        return $consulta->execute();
    }
    public function editar($id, $numero, $nombre, $telefono)
    {
        $query = "UPDATE directorio SET numero=?, nombre=?, telefonos=? WHERE id=?";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1, $numero);
        $consulta->bindParam(2, $nombre);
        $consulta->bindParam(3, $telefono);
        $consulta->bindParam(4, $id);
        return $consulta->execute();
    }
    public function eliminar($id)
    {
        $query = "DELETE FROM directorio WHERE id=?";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1, $id);
        return $consulta->execute();
    } */
    public function getAll()
    {
        $query = "SELECT * FROM service ORDER BY category ASC";
        $consulta = $this->con->query($query);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getCategory()
    {
        $query = "SELECT DISTINCT(category), description FROM service ORDER BY category ASC";
        $consulta = $this->con->query($query);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
