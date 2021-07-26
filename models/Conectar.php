<?php
class Conectar {
    private $con;
    public static function Conexion() {
        try {
            $con = new mysqli("localhost", "root", "", "bd_perfecta");
        } catch (Exception $e) {
            die("La conexion no tuvo exito : ".$e->getMessage());
            echo "Linea del error".$e->getLine();
        }
        return $con;
    }
}
?>
