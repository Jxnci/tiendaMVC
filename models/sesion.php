<?php
require_once("Conectar.php");
if (isset($_POST["btnEnviar"])) {
    $usu = $_POST["txtUsu"];
    $pass = $_POST["txtPass"];

    $con=Conectar::Conexion();

    $sql = "SELECT u.usuario,u.clave,u.nombres,tp.descripcion FROM usuario u INNER JOIN tipousuario tp 
    ON tp.idtipousuario=u.tipoUsuario_idtipousuario WHERE usuario = '$usu' AND clave = '$pass';";
    
    $resultado = mysqli_query($con, $sql);
    $fila = mysqli_fetch_row($resultado);

    if ($usu == $fila[0] && $pass == $fila[1]) {
        session_start();
        $_SESSION["usuario"] = $fila[0];
        $_SESSION["nombres"] = $fila[2];
        $_SESSION["tipo"] = $fila[3];
        header("Location: ../views/principal.php?ventana=estad");
    } else {
        header("Location: ../");
    }
}
if (isset($_POST["btnCerrarSesion"])) {
    session_start();
    session_destroy();
    header("Location: ../");
}
?>