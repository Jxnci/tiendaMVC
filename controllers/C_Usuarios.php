<?php
require_once("../models/M_Usuarios.php");

$usuarios = new UsuarioModel;
$matrizUsuario = $usuarios->getUsuario();
if (isset($_GET["opcion"])) {
    switch ($_GET["opcion"]) {
        case 'eliminar':
            $usuarios->deleteUsuario($_GET["fila"]);
            break;
        case 'nuevo':
            echo "Se creo un nuevo usuario";
            $usuarios->nuevoUsuario();
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