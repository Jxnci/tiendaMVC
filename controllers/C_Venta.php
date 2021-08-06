<?php
require_once("../models/M_Venta.php");

$ven = new VentaModel;
$matrizVenta = $ven->getVenta();
if (isset($_GET["opcion"])) {
    switch ($_GET["opcion"]) {
        case 'eliminar':
            $ven->deleteVenta($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=venta");
            break;
        case 'nuevo':
            if (isset($_POST["btnAgregar"])) {
                $fec=$_POST['fecha'];
                $tot=$_POST['Total'];
                $cp=$_POST['cmbPro'];
                $cu=$_POST['cmbusu'];
                $ven->nuevoVenta($fec,$tot,$cp,$cu);
                header("Location: ../views/principal.php?ventana=venta");
            }
            break;
        case 'editar':
            $ven->editarVenta($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=venta");
            break;
        default:
            echo "No suceda nada :c";
            echo "Accion : " . $_GET["opcion"];
            break;
    }
}
require_once("../views/V_Ventas.php");
?>