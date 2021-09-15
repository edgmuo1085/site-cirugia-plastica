<?php
class Files
{    
    private $rutaArchivos;
    const LIMITE_POST = 2097152; //2MB
    const EXTENCIONES = array(
        "jpeg", 
        "jpg", 
        "png"        
    );

    public function __construct($nomCarpetaArchivos)
    {        
        $this->rutaArchivos = $nomCarpetaArchivos;
    }

    public function subir($file)
    {        
        $resultado = false; 

        //EXISTE ALGUN ARCHIVO?
        if(!empty($file['name']))
        { 
            //SEPARAR EXTENCION DEL NOMBRE
            $ext = explode('.', basename($file['name']));
            $extencionArchivo = end($ext);

            //PESO ADMITIDO
            if ($file["size"] < self::LIMITE_POST)
            {
                //LA EXTENCION ES ADMITIDA?
                if(in_array($extencionArchivo, self::EXTENCIONES))
                { 
                    //VERIFICO SI EXISTE LA CARPETA O SINO LA CREO
                    if(file_exists($this->rutaArchivos) || mkdir($this->rutaArchivos, 0777, true))
                    {
                        $origen = $file["tmp_name"];
                        $docGenerado = md5(uniqid()) . "." . $ext[count($ext) - 1];
                        $destino = $this->rutaArchivos . $docGenerado ;
                        
                        //COPIAR ARCHIVO DE TEMPORALES A LA CARPETA 
                        if(move_uploaded_file($origen, $destino))
                        {                                   
                            $resultado = $docGenerado;                                
                        }
                    }
                }
            }
        }
        return $resultado;
    }

    public function borrar($file)    
    {        
        chmod ($file, 0777);
        return unlink($file);
    }

}
