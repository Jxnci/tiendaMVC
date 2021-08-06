<?php

class EstadisticaModel {
    private $db;
    public function __construct() {
        require_once("Conectar.php");
        $this->db = Conectar::Conexion();
        $this->fec1 = "";
        $this->fec2 = "";
        $this->datos=array();
    }

    function cantidadVentas(){
        $sql = "SELECT COUNT(idventa) FROM venta";
        $resultado = mysqli_query($this->db, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos[0];
        $this->db->close();
    }

    function cantidadClientes(){
        $sql = "SELECT COUNT(idcliente) FROM cliente";
        $resultado = mysqli_query($this->db, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos[0];
        $this->db->close();
    }

    function cantidadProductos(){
        $sql = "SELECT COUNT(idproducto) FROM producto";
        $resultado = mysqli_query($this->db, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos[0];
        $this->db->close();
    }
    function gananciaTotal(){
        $sql = "SELECT SUM(total) FROM venta";
        $resultado = mysqli_query($this->db, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos[0];
        $this->db->close();
    }
    
    function reporte($fecha){
        $sql = "SELECT SUM(total) FROM venta";
        $resultado = mysqli_query($this->db, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos[0];
        $this->db->close();
    }
    function getconsultaporFecha($fe1,$fe2){
        $sql = $this->db->query("SELECT v.idventa,v.fecha,v.total,p.nombre,u.usuario FROM venta v 
        INNER JOIN producto p ON p.idproducto=v.producto_idproducto
        INNER JOIN usuario u ON u.idusuario=v.usuario_idusuario
        WHERE fecha BETWEEN '$fe1' AND '$fe2'");
        while ($fila = $sql->fetch_assoc()) {
            $this->ventas[] = $fila;
        }
        return $this->ventas;
        $this->db->close();
    }
    function masVendido(){
        $sql = $this->db->query("SELECT p.nombre,COUNT(*) FROM venta INNER JOIN producto p ON venta.producto_idproducto=p.idproducto 
        GROUP BY producto_idproducto DESC ORDER BY COUNT(*) DESC");
        while ($fila = $sql->fetch_assoc()) {
            $this->producto[] = $fila;
        }
        return $this->producto;
        $this->db->close();
    }

    function usuarioasVendido(){
        $sql = $this->db->query("SELECT u.usuario,COUNT(*) FROM venta INNER JOIN usuario u ON u.idusuario=venta.usuario_idusuario
         GROUP BY usuario_idusuario DESC ORDER BY COUNT(*) DESC;");
        while ($fila = $sql->fetch_assoc()) {
            $this->usuario[] = $fila;
        }
        return $this->usuario;
        $this->db->close();
    }


}
?>