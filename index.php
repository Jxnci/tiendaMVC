<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Perfecta</title>
</head>

<body>
    <div class="form-login">
        <header>Bisuteria Perfecta</header>
        <form method="post" action="views/principal.php">
            <div class="input-login">
                <input type="text" name="txtUsuario" placeholder="Ingrese Usuario" required="true">
                <input type="password" name="txtPass" placeholder="Ingrese Contraseña" minlength="5">
                <div>
                    <a href="http://">
                        <h4>Regístrate</h4>
                    </a>
                </div><br>
            </div>
            <button name="btnAcceso">Acceder</button>
        </form>
    </div>
    <div class="logo-login">
        <figure>
            <img src="icons/logo1.jpeg" alt="Perfecta">
        </figure>
    </div>
</body>

</html>