<?php
require_once("../models/M_Usuarios.php");

$usuarios = new UsuarioModel;
$matrizUsuario = $usuarios->getUsuario();
if ($_GET) {
    $opcion = $_GET["opcion"];
    switch ($opcion) {
        case 'eliminar':
            $usuarios->deleteUsuario($_GET["fila"]);
            break;

        default:
            # code...
            break;
    }
}

require_once("../views/V_Usuarios.php");
?>s