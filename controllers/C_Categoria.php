<?php
require_once("../models/M_Categoria.php");

$cat = new CategoriaModel;

$matrizCategoria = $cat->getCategoria();

if (isset($_GET["opcion"])) {
    switch ($_GET["opcion"]) {
        case 'eliminar':
            $cat->deleteCategoria($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=cate");
            break;
        case 'nuevo':
            if (isset($_POST["btnAgregar"])) {
                $descripcion = $_POST["txtDesc"];
                $cat->nuevaCategoria($descripcion);
                header("Location: ../views/principal.php?ventana=cate");
            }
            break;
        case 'editar':
            $cat->editarCategoria($_GET["fila"]);
            header("Location: ../views/principal.php?ventana=cate");
            break;
        default:
            echo "No suceda nada :c";
            echo "Accion : " . $_GET["opcion"];
            break;
    }
}
// header("Location: principal.php");
require_once("../views/V_Categoria.php");
?>