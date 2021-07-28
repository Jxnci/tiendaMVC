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
                    echo "Se mostro la ventana de cliente";
                    break;
                case 'producto':
                    echo "Se creo un nuevo producto";
                    break;
                case 'provee':
                    echo "Se mostro la ventana de provee";
                    break;
                case 'tipusu':
                    echo "Se creo un nuevo tipusu";
                    break;
                case 'cate':
                    echo "Se creo un nuevo cate";
                    break;
                case 'permi':
                    echo "Se creo un nuevo permi";
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
    

}


// header("Location: ../views/principal.php");
// require_once("../views/V_Usuarios.php");
