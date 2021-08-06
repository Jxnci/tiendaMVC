<?php

class CategoriaModel {
    
    private $db;
    private $usuarios;
    private $mensaje;

    public function __construct() {
        require_once("Conectar.php");
        $this->db = Conectar::Conexion();
        $this->usuarios = array();
        $this->mensaje = "";
    }

    public function getCategoria() {
        $sql = $this->db->query("SELECT * FROM categoria");
        while ($fila = $sql->fetch_assoc()) {
            $this->categorias[] = $fila;
        }
        return $this->categorias;
    }

    public function nuevaCategoria($desc) {
        $sql = "INSERT INTO categoria (idtipoproducto,descripcion) VALUES (".(intval($this->AiCategoria())+1).",'".$desc."')";
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "La categoria se agrego correctamente";
        } else {
            $this->mensaje = "No se pudo agregar: " . $this->db->error;
        }
        $this->db->close();
    }

    function AiCategoria(){
        $sql = "SELECT idtipoproducto FROM categoria ORDER BY idtipoproducto DESC LIMIT 1";
        $resultado = mysqli_query($this->db, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos[0];
    }

    public function deleteCategoria($fila) {
        $sql = "DELETE FROM categoria WHERE idtipoproducto=" . $fila;
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "La Categoria se elimino correctamente";
        } else {
            $this->mensaje = "No se pudo eliminar: " . $this->db->error;
        }
        $this->db->close();
    }

    public function editarCategoria($fila) {
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
}
?>