<?php

class ProductoModel {
    private $db;
    private $productos;
    private $mensaje;
    public function __construct() {
        require_once("Conectar.php");
        $this->db = Conectar::Conexion();
        $this->productos = array();
        $this->mensaje = "";
    }

    public function getProducto() {
        $sql = $this->db->query("SELECT * FROM producto");
        while ($fila = $sql->fetch_assoc()) {
            $this->productos[] = $fila;
        }
        return $this->productos;
    }

    public function nuevoProducto($de,$pv,$pc,$sk,$cC,$cP) {
        $sql = "INSERT INTO producto (idproducto,nombre,precio_venta,precio_compra,stock,categoria_idtipoproducto,proveedor_idproveedor)
        VALUES(".(intval($this->AiProducto())+1).",'".$de."','".$pv."','".$pc."','".$sk."','".($cC+1)."','".($cP+1)."')";
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "El Producto se agrego correctamente";
        } else {
            $this->mensaje = "No se pudo agregar: " . $this->db->error;
        }
        $this->db->close();
    }

    function AiProducto(){
        $sql = "SELECT idproducto FROM producto ORDER BY idproducto DESC LIMIT 1";
        $resultado = mysqli_query($this->db, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos[0];
    }

    public function deleteProducto($fila) {
        $sql = "DELETE FROM producto WHERE idproducto=" . $fila;
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "El Producto se eliminó correctamente";
        } else {
            $this->mensaje = "No se pudo eliminar: " . $this->db->error;
        }
        $this->db->close();
    }

    public function editarProducto($fila) {
        $sql = "SELECT * FROM producto";
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