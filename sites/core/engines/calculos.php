<?php

class Calculos
{

    public function updateUser($arrayOne, $id, $nombres, $user, $pass, $correo, $estado, $rol)
    {
        $array = array();
        $arrayUpdate = array();
        $con = 0;

        $array[0] = $id;
        $array[1] = $nombres;
        $array[2] = $user;
        $array[3] = $pass;
        $array[4] = $correo;
        $array[5] = $estado;
        $array[6] = $rol == 'estandar' ? '1' : '0' ;


        foreach ($arrayOne as $key => $value) {
            $arrayTwo[$con] = $value;
            $con++;
        }

        $cc = new Calculos();
        for ($i = 0; $i < 7; $i++) {
            $arrayUpdate[$i] = $cc->comparacion($arrayTwo[$i], $array[$i]);
        }

        return $arrayUpdate;
    }
    
    public function comparacion($param1, $param2)
    {
        if ($param2 == '') {
            return $param1;
        }
        
        if ($param2 === $param1) {
            return $param1;
        }
        
        if ($param2 !== $param1) {
            return $param2;
        }
    }
}
