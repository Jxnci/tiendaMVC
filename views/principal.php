<?php
session_start();
if (isset($_SESSION["usuario"])) {
} else {
    header("Location:../views/sesionCerrada.html");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylePrincipal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../icons/icons8_jewel.ico" type="image/x-icon">
    <title>Bisuteria Perfecta</title>
</head>

<body >
    <div class="contenedor">
        <div>
            <?php
            require("../views/asideMenu.php");
            ?>
        </div>
        <div class="principal">
            <div>
                <?php
                require("../controllers/C_principal.php");
                $controlVentana = new controlVentana;
                $controlVentana->mostrarTitulo($_GET["ventana"]);
                ?>
            </div>
            <div class="principal__items">
                <div class="ventanas">
                    <?php
                    $controlVentana->mostrarVentana($_GET["ventana"]);
                    ?>
                </div>
                <?php
                require_once("../views/asideDMenu.php");
                ?>
            </div>
        </div>
    </div>
    <div id="principal"></div>
</body>
<script src="https://kit.fontawesome.com/e731879585.js" crossorigin="anonymous"></script>
</html>
