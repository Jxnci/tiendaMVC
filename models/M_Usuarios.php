<?php

class UsuarioModel {
    private $db;
    private $usuarios;
    public function __construct() {
        require_once("Conectar.php");
        $this->db = Conectar::Conexion();
        $this->usuarios = array();
    }

    public function getUsuario() {
        $sql = $this->db->query("SELECT * FROM usuario");
        while ($fila = $sql->fetch_assoc()) {
            $this->usuarios[] = $fila;
        }
        return $this->usuarios;
    }

    public function deleteUsuario($fila) {
        $fila=$_GET["fila"];
        echo $fila;
        $sql = $this->db->query("DELETE * FROM usuario WHERE = " . $fila);
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
