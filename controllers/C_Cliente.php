<?php
require_once("../models/M_Clientes.php");

$cli = new ClienteModel;
$matrizCliente = $cli->getCliente();
if (isset($_GET["opcion"])) {
    switch ($_GET["opcion"]) {
        case 'eliminar':
            $cli->deleteCliente($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=cliente");
            break;
        case 'nuevo':
            if (isset($_POST["btnAgregar"])) {
                $nom=$_POST['txtNombre'];
                $dire=$_POST['txtDireccion'];
                $ruc=$_POST['txtruc'];
                $dni=$_POST['txtDNI'];
                $cli->nuevoCliente($nom,$dire,$ruc,$dni);
                header("Location: ../views/principal.php?ventana=cliente");
            }
            break;
        case 'editar':
            $cli->editarCategoria($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=cliente");
            break;
        default:
            echo "No suceda nada :c";
            echo "Accion : " . $_GET["opcion"];
            break;
    }
}
// header("Location: principal.php");
require_once("../views/V_Cliente.php");
?>