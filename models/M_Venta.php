<?php

class VentaModel {
    private $db;
    private $ventas;
    private $mensaje;
    public function __construct() {
        require_once("Conectar.php");
        $this->db = Conectar::Conexion();
        $this->ventas = array();
        $this->mensaje = "";
    }

    public function getVenta() {
        $sql = $this->db->query("SELECT * FROM venta");
        while ($fila = $sql->fetch_assoc()) {
            $this->ventas[] = $fila;
        }
        return $this->ventas;
    }

    public function nuevoVenta($fec,$tot,$cp,$cu) {
        $sql = "INSERT INTO venta (idventa,fecha,total,producto_idproducto,usuario_idusuario) VALUES
        (".(intval($this->AiVenta())+1).",$fec,'".$tot."','".($cp+1)."','".($cu+1)."')";
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "La venta se agrego correctamente";
        } else {
            $this->mensaje = "No se pudo agregar: " . $this->db->error;
        }
        $this->db->close();
    }

    function AiVenta(){
        $sql = "SELECT idventa FROM venta ORDER BY idventa DESC LIMIT 1";
        $resultado = mysqli_query($this->db, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos[0];
    }

    public function deleteVenta($fila) {
        $sql = "DELETE FROM venta WHERE idventa=" . $fila;
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "El cliente se eliminó correctamente";
        } else {
            $this->mensaje = "No se pudo eliminar: " . $this->db->error;
        }
        $this->db->close();
    }

    public function editarVenta($fila) {
        $sql = "SELECT * FROM tipousuario";
        $resultado = mysqli_query($this->db, $sql);
        $cant = mysqli_num_rows($resultado);
        $cont = 0;
        if ($cant > 0) {
            while ($datos = mysqli_fetch_array($resultado)) {
                echo '<option value=' . $cont . '">' . $datos[1] . '</option>';
                $cont++;
            }
        }
    }
    public function llenarCombo($tip) {
        $sql = "SELECT * FROM $tip";
        $resultado = mysqli_query($this->db, $sql);
        $cant = mysqli_num_rows($resultado);
        $cont = 0;
        if ($cant > 0) {
            while ($datos = mysqli_fetch_array($resultado)) {
                echo '<option value=' . $cont . '">' . $datos[1] . '</option>';
                $cont++;
            }
        }
    }
}
?>