<?php
class Service
{
    private $con = null;
    public $estado = false;
    private $dirImagen;

    public function __construct($dirImagen)
    {
        require_once('config.php');
        $c = new Conexion();
        $this->con = $c->get();
        $this->dirImagen = $dirImagen;
        $this->estado = $this->con != null;
    }
    function __destruct()
    {
        unset($this->con);
    }
    public function crear($titulo, $descripcion, $imagen, $estado)
    {
        //SUBIR IMAGEN -> DELIMITADO PARA SOLO 1 IMAGEN POR REGISTRO
        require '../../modules/upload/file.php';
        //OBTENER AÑO Y MES PARA ORDENAR IMAGENES
        $carpeta = date("Y/n/");
        $img = new Files($imagen, $this->dirImagen . $carpeta);
        $response = $img->subirArchivos();

        //VERIFICAR RESULTADO DE SUBIDA
        if (isset($response['Generados'])) {
            //SE SUBIO CORRECTAMENTE
            //INSERTAR REGISTRO EN ENGINE PREDETERMINADO
            $nomImg = $carpeta . $response['Generados'][0];
            $query = "INSERT INTO slider VALUES (null,?,?,?,?,now())";
            $consulta = $this->con->prepare($query);
            $consulta->bindParam(1, $titulo);
            $consulta->bindParam(2, $descripcion);
            $consulta->bindParam(3, $nomImg);
            $consulta->bindParam(4, $estado);
            return $consulta->execute();
        } else {
            //NO SE SUBIO NADA, DEVOLVER INFORME
            return $response;
        }
    }
    public function editarImg($id, $imagen)
    {
        //OBTENER IMAGEN ANTERIOR
        $query = "SELECT imagen FROM slider WHERE id=?";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1, $id);
        $consulta->execute();
        $nomImg = $consulta->fetch(PDO::FETCH_ASSOC)['imagen'];

        //SUBIR IMG NUEVA Y ACTULIZAR REGISTRO.        
        require '../../Modulos/Upload/archivos.php';
        //OBTENER AÑO Y MES DEL REGISTRO
        $nomImgExp = explode('/', $nomImg);
        $carpeta = $nomImgExp[0] . '/' . $nomImgExp[1] . '/';
        $img = new Files($imagen, $this->dirImagen . $carpeta);
        $response = $img->subirArchivos();

        //VERIFICAR RESULTADO DE SUBIDA
        if (isset($response['Generados'])) {
            //BORRAR IMAGEN EN DISCO            
            $ruta = $this->dirImagen . $nomImg;
            if (file_exists($ruta)) {
                //BORRAR
                unlink($ruta);
            }
            //SE SUBIO CORRECTAMENTE
            $nomImg = $carpeta . $response['Generados'][0];
            //ACTUALIZAR REGISTRO EN ENGINE PREDETERMINADO
            $query = "UPDATE slider SET imagen=? WHERE id=?";
            $consulta = $this->con->prepare($query);
            $consulta->bindParam(1, $nomImg);
            $consulta->bindParam(2, $id);
            return $consulta->execute();
        } else {
            //NO SE SUBIO NADA, DEVOLVER INFORME
            return $response;
        }
    }
    public function editarRegistro($id, $titulo, $descripcion, $estado)
    {
        $query = "UPDATE slider SET titulo=?, descripcion=?, estado=? WHERE id=?";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1, $titulo);
        $consulta->bindParam(2, $descripcion);
        $consulta->bindParam(3, $estado);
        $consulta->bindParam(4, $id);
        return $consulta->execute();
    }
    public function eliminar($id)
    {
        //OBTENER IMAGEN ANTERIOR
        $query = "SELECT imagen FROM slider WHERE id=?";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1, $id);
        $consulta->execute();
        $nomImg = $consulta->fetch(PDO::FETCH_ASSOC)['imagen'];

        //BORRAR IMAGEN EN DISCO        
        $eliminado = true;
        $ruta = $this->dirImagen . $nomImg;
        if (file_exists($ruta)) {
            //BORRAR
            $eliminado = unlink($ruta);
        }

        //NO SE ENCONTRO LA IMG? | SE ELIMINO CORRECTAMENTE LA IMAGEN?
        if ($eliminado) {
            //ELIMINAR REGISTRO DE LA BD
            $query = "DELETE FROM slider WHERE id=?";
            $consulta = $this->con->prepare($query);
            $consulta->bindParam(1, $id);
            return $consulta->execute();
        } else {
            //EXISTIO UN PROBLEMA AL ELIMINAR
            return false;
        }
    }
    public function get($id)
    {
        $query = "SELECT * FROM slider WHERE id=?";
        $consulta = $this->con->prepare($query);
        $consulta->bindParam(1, $id);
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
    
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
