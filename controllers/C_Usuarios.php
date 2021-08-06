<?php
require_once("../models/M_Usuarios.php");

$usuarios = new UsuarioModel;
$matrizUsuario = $usuarios->getUsuario();
if (isset($_GET["opcion"])) {
    switch ($_GET["opcion"]) {
        case 'eliminar':
            $usuarios->deleteUsuario($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=usuario");
            break;
        case 'nuevo':
            if (isset($_POST["btnAgregar"])) {
                $usu = $_POST["txtUsu"];
                $cla = $_POST["txtCla"];
                $dir = $_POST["txtDir"];
                $tel = $_POST["txtTel"];
                $nom = $_POST["txtNom"];
                $tipusu = $_POST["txtTipUsu"];
                $usuarios->nuevoUsuario($usu,$cla,$dir,$tel,$nom,$tipusu);
                header("Location: ../views/principal.php?ventana=usuario");
            }
            break;
        case 'editar':
            $usuarios->editarUsuario($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=usuario");
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