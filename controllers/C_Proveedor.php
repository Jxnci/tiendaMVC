<?php
require_once("../models/M_Proveedor.php");

$pro = new ProveedorModel;
$matrizProveedor = $pro->getProveedor();
if (isset($_GET["opcion"])) {
    switch ($_GET["opcion"]) {
        case 'eliminar':
            $pro->deleteProveedor($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=provee");
            break;
        case 'nuevo':
            if (isset($_POST["btnAgregar"])) {
                $descripcion = $_POST["txtDesc"];
                $ruc = $_POST["txtRuc"];
                $dni = $_POST["txtDni"];
                $pro->nueoProveedor($descripcion,$ruc,$dni);
                header("Location: ../views/principal.php?ventana=provee");
            }
            break;
        case 'editar':
            $pro->editarProveedor($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=provee");
            break;
        default:
            echo "No suceda nada :c";
            echo "Accion : " . $_GET["opcion"];
            break;
    }
}
require_once("../views/V_Proveedore.php");
?>