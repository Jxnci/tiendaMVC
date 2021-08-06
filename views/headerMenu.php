<header>
    <nav>
        <div>
            <?php
            require_once("../controllers/C_principal.php");
            $controlVentana = new controlVentana;
            ?>
            <h1>Panel De control de <?=$controlVentana->mostrarTitulo($_GET["ventana"])?></h1>
        </div>
        
        <div>
            <h3><span> Usuario:</span> <?= $_SESSION["nombres"]; ?></h3>
            <h4><span> Tipo :</span> <?= $_SESSION["tipo"]; ?></h4>
        </div>
        <div class="botones">
            <a href="#" class="btnuser">Mi cuenta</a>
            <a href="#" class="btnhelp">Ayuda</a>
        </div>
        
    </nav>
</header>