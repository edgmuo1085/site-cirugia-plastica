<?php
class Conexion
{
    /* const HOST = "localhost";
    const PORT = "3306";
    const USER = "u696847781_site";
    const PASSWORD = "#qZ1n4#5";
    const DATABASE = "u696847781_site"; */

    const HOST = "localhost";
    const PORT = "3306";
    const USER = "root";
    const PASSWORD = "el900.";
    const DATABASE = "cirugia_plastica";


    public function get()
    {
        try {
            return new PDO('mysql:dbname=' . self::DATABASE . ';host=' . self::HOST . ';port=' . self::PORT, self::USER, self::PASSWORD);
        } catch (PDOException $e) {
            return null;
        }
    }
}
