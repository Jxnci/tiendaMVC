<?php

class ClienteModel {
    private $db;
    private $clientes;
    private $mensaje;
    public function __construct() {
        require_once("Conectar.php");
        $this->db = Conectar::Conexion();
        $this->clientes = array();
        $this->mensaje = "";
    }

    public function getCliente() {
        $sql = $this->db->query("SELECT * FROM cliente");
        while ($fila = $sql->fetch_assoc()) {
            $this->clientes[] = $fila;
        }
        return $this->clientes;
    }

    public function nuevoCliente($nom,$dire,$ruc,$dni) {
        $sql = "INSERT INTO cliente (idcliente,nombres,direccion,ruc,dni) VALUES (".(intval($this->AiCliente())+1).",'"
        .$nom."','".$dire."','".$ruc."','".$dni."')";
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "El Cleiente se agrego correctamente";
        } else {
            $this->mensaje = "No se pudo agregar: " . $this->db->error;
        }
        $this->db->close();
    }

    function AiCliente(){
        $sql = "SELECT idcliente FROM cliente ORDER BY idcliente DESC LIMIT 1";
        $resultado = mysqli_query($this->db, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos[0];
    }

    public function deleteCliente($fila) {
        $sql = "DELETE FROM cliente WHERE idcliente=" . $fila;
        if ($this->db->query($sql) === TRUE) {
            $this->mensaje = "El cliente se eliminó correctamente";
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