<?php

require_once("Conectar.php");
$base=Conectar::Conexion();

$tamanoPagina = 3;
if (isset($_GET["pagina"])) {
    if ($_GET["pagina"] == 1) {
        header("Location:index.php");
    } else {
        $pagina = $_GET["pagina"];
    }
} else {
    $pagina = 1;
}
$empezarDesde = ($pagina - 1) * $tamanoPagina;
$sqlTotal = "SELECT * FROM usuario";
$resultado = $base->prepare($sqlTotal);
$resultado->execute();
$numFilas = $resultado->num_rows();
$totalPaginas=ceil($numFilas/$tamanoPagina); 

?>

