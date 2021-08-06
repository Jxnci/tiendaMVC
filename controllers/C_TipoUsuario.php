<?php
require_once("../models/M_Tipo.php");

$tipos = new TipoModel;
$matrizTipos = $tipos->getTipUsu();
if (isset($_GET["opcion"])) {
    switch ($_GET["opcion"]) {
        case 'eliminar':
            $tipos->deleteTipo($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=tipusu");
            break;
        case 'nuevo':
            if (isset($_POST["btnAgregar"])) {
                $des = $_POST["txtDesc"];
                $tipos->nuevoTipo($des);
                header("Location: ../views/principal.php?ventana=tipusu");
            }
            break;
        case 'editar':
            $tipos->editarTipo($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=tipusu");
            break;
        default:
            echo "No suceda nada :c";
            echo "Accion : ".$_GET["opcion"];
            break;
    }
}
require_once("../views/V_TipoUsuario.php");
?>