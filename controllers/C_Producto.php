<?php
require_once("../models/M_Producto.php");

$prod = new ProductoModel;
$matrizProducto = $prod->getProducto();
if (isset($_GET["opcion"])) {
    switch ($_GET["opcion"]) {
        case 'eliminar':
            $prod->deleteProducto($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=producto");
            break;
        case 'nuevo':
            if (isset($_POST["btnAgregar"])) {
                $de=$_POST['txtDesc'];
                $pv=$_POST['txtPreVen'];
                $pc=$_POST['txtPreCon'];
                $sk=$_POST['txtStok'];
                $cC=$_POST['cmbCat'];
                $cP=$_POST['cmbPro'];
                $prod->nuevoProducto($de,$pv,$pc,$sk,$cC,$cP);
                header("Location: ../views/principal.php?ventana=producto");
            }
            break;
        case 'editar':
            $prod->editarProducto($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=producto");
            break;
        default:
            echo "No suceda nada :c";
            echo "Accion : " . $_GET["opcion"];
            break;
    }
}
require_once("../views/V_Producto.php");
?>