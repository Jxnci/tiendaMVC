
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="icons/icons8_jewel.ico" type="image/x-icon">
    <title>Bisuteria Perfecta</title>
</head>

<body>
    <div class="form-login">
        <header>Bisuteria Perfecta</header>
        <form method="post" action="models/sesion.php">
            <div class="input-login">
                <input type="text" name="txtUsu" placeholder="Ingrese Usuario" required>
                <input type="password" name="txtPass" placeholder="Ingrese Contraseña" require>
                <div>
                    <a href="http://">
                        <h4>Regístrate</h4>
                    </a>
                </div><br>
            </div>
            <button name="btnEnviar">Acceder</button>
        </form>
    </div>
    <div class="logo-login">
        <figure>
            <img src="icons/logo1.jpeg" alt="Perfecta">
        </figure>
    </div>
</body>

</html>