<?php
// require_once("../models/M_Usuarios.php");

// $usuarios = new UsuarioModel;
// $matrizUsuario = $usuarios->getUsuario();

class controlVentana{

    public function mostrarVentana($ventana){
        if (isset($ventana)) {
            switch ($ventana) {
                case 'venta':
                    require("V_Ventas.php");
                    break;
                case 'usuario':
                    require("V_Usuarios.php");
                    break;
                case 'cliente':
                    require("V_Cliente.php");
                    break;
                case 'producto':
                    require("V_Producto.php");
                    break;
                case 'provee':
                    require("V_Proveedore.php");
                    break;
                case 'tipusu':
                    require("V_TipoUsuario.php");
                    break;
                case 'cate':
                    require("V_Categoria.php");
                    break;
                case 'permi':
                    require("V_Permisos.php");
                    break;
                case 'estad':
                    require("estadisticas.php");
                    break;
                default:
                    echo "No suceda nada :c";
                    echo "Accion : " . $_GET["opcion"];
                    break;
            }
        }else{
            // require_once("../views/principal.php");
            // require("../views/estadisticas.php");
        }
    }

    public function mostrarTitulo(){
        
    }
    

}


// header("Location: ../views/principal.php");
// require_once("../views/V_Usuarios.php");
?>
