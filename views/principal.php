<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylePrincipal.css">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <div>
            <?php
            require("../views/asideMenu.php");
            ?>
        </div>

        <div class="principal">
            <div >
                <?php
                require("../views/headerMenu.php");
                ?>
            </div>
            <div class="principal__items">
                <?php
                require("../controllers/C_Usuarios.php");
                require("../views/asideDMenu.php");
                ?>
            </div>
        </div>

    </div>
</body>

</html>