<?php
require_once("../models/M_Estadisticas.php");

$esta = new EstadisticaModel;
if (isset($_GET["opcion"])) {
    switch ($_GET["opcion"]) {
        case 'porFecha':
            if(isset($_POST["btnReportar"])){
                $fe1=$_POST['fecha1'];
                $fe2=$_POST['fecha2'];
                $esta->getconsultaporFecha($fe1,$fe2);
            }
            // header("Location: ../views/principal.php?ventana=estad");
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
// require_once("../views/V_Producto.php");
?>