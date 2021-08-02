<?php
require_once("../models/M_TipoUsuario.php");

$usuarios = new UsuarioModel;
$matrizUsuario = $usuarios->getUsuario();
if (isset($_GET["opcion"])) {
    switch ($_GET["opcion"]) {
        case 'eliminar':
            $usuarios->deleteUsuario($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=tipusu");
            break;
        case 'nuevo':
            if (isset($_POST["btnAgregar"])) {
                $des = $_POST["txtDesc"];
                $pro->nuevoUsuario($descripcion,$ruc,$dni);
                header("Location: ../views/principal.php?ventana=tipusu");
            }
            break;
        case 'editar':
            $pro->editarUsuario($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=tipusu");
            break;
        default:
            echo "No suceda nada :c";
            echo "Accion : ".$_GET["opcion"];
            break;
    }
}
// header("Location: principal.php");
require_once("../views/V_Usuarios.php");
?>