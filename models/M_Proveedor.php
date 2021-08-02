<?php

class ProveedorModel {
    private $db;
    private $usuarios;
    private $mensaje;
    public function __construct() {
        require_once("Conectar.php");
        $this->db = Conectar::Conexion();
        $this->usuarios = array();
        $this->mensaje = "";
    }

    public function getProveedor() {
        $sql = $this->db->query("SELECT * FROM proveedor");
        while ($fila = $sql->fetch_assoc()) {
            $this->proveedores[] = $fila;
        }
        return $this->proveedores;
        $this->db->close();
    }

    public function nueoProveedor($desc,$ruc,$dni) {
        $sql = "INSERT INTO proveedor (idproveedor,nombre,ruc,dni) VALUES (".(intval($this->AiProveedor())+1).",'".$desc."','".
        $ruc."','".$dni."')";
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "El proveedor se agregó correctamente";
        } else {
            $this->mensaje = "No se pudo agregar: " . $this->db->error;
        }
        $this->db->close();
    }

    function AiProveedor(){
        $sql = "SELECT idproveedor FROM proveedor ORDER BY idproveedor DESC LIMIT 1";
        $resultado = mysqli_query($this->db, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos[0];
        $this->db->close();
    }

    public function deleteProveedor($fila) {
        $sql = "DELETE FROM proveedor WHERE idproveedor=" . $fila;
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "El Proveedor se elimino correctamente";
        } else {
            $this->mensaje = "No se pudo eliminar: " . $this->db->error;
        }
        $this->db->close();
    }

    public function editarProveedor($fila) {
        // $sql = "SELECT * FROM tipousuario";
        // $resultado = mysqli_query($this->db, $sql);
        // $cant = mysqli_num_rows($resultado);
        // $cont = 0;
        // if ($cant > 0) {
        //     while ($datos = mysqli_fetch_array($resultado)) {
        //         echo '<option value=' . $cont . '">' . $datos[1] . '</option>';
        //         $cont++;
        //     }
        // }
    }
}
?>