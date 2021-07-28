<?php

class UsuarioModel {
    private $db;
    private $usuarios;
    private $mensaje;
    public function __construct() {
        require_once("Conectar.php");
        $this->db = Conectar::Conexion();
        $this->usuarios = array();
        $this->mensaje = "";
    }

    public function getUsuario() {
        $sql = $this->db->query("SELECT * FROM usuario");
        while ($fila = $sql->fetch_assoc()) {
            $this->usuarios[] = $fila;
        }
        return $this->usuarios;
    }

    public function nuevoUsuario() {
        $sql = "INSERT INTO usuario (usuario,clave,direccion,telefono,nombres,tipoUsuario_idtipousuario)
         VALUES ('','','','','','')";
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "El usuario se agrego correctamente";
        } else {
            $this->mensaje = "No se pudo agregar: " . $this->db->error;
        }
        $this->db->close();
        header("Location: ../views/principal.php");
    }

    public function deleteUsuario($fila) {
        $sql = "DELETE FROM usuario WHERE idusuario=" . $fila;
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "El usuario se elimino correctamente";
        } else {
            $this->mensaje = "No se pudo eliminar: " . $this->db->error;
        }
        $this->db->close();
        header("Location: ../views/principal.php");
    }

    public function cmbTipoUsuario() {
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