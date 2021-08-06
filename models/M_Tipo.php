<?php

class TipoModel {
    private $db;
    private $usuarios;
    private $mensaje;
    public function __construct() {
        require_once("Conectar.php");
        $this->db = Conectar::Conexion();
        $this->usuarios = array();
        $this->mensaje = "";
    }

    public function getTipUsu() {
        $sql = $this->db->query("SELECT * FROM tipousuario");
        while ($fila = $sql->fetch_assoc()) {
            $this->tipUsu[] = $fila;
        }
        return $this->tipUsu;
    }

    public function nuevoTipo($desc) {
        $sql = "INSERT INTO tipousuario (idtipousuario,descripcion) VALUES (".(intval($this->AiTipo())+1).",'".$desc."')";
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "La categoria se agrego correctamente";
        } else {
            $this->mensaje = "No se pudo agregar: " . $this->db->error;
        }
        $this->db->close();
    }

    function AiTipo(){
        $sql = "SELECT idtipousuario FROM tipousuario ORDER BY idtipousuario DESC LIMIT 1";
        $resultado = mysqli_query($this->db, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos[0];
    }

    public function deleteTipo($fila) {
        $sql = "DELETE FROM tipousuario WHERE idtipousuario=" . $fila;
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "El tipo de usuario se eliminó correctamente";
        } else {
            $this->mensaje = "No se pudo eliminar: " . $this->db->error;
        }
        $this->db->close();
    }

    public function editarTipo($fila) {
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