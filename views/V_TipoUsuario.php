<?php require_once("../models/M_Tipo.php"); ?>
<main>
    <?php
    // require("../models/paginacion.php");
    ?>
    <div class="formIngresoDatos">
        <form action="../controllers/C_TipoUsuario.php?opcion=nuevo" method="post">
            <input type="text" name="txtDesc" id="" placeholder="Descripción" require>
            <a href=''><input type='submit' value='Agregar' name="btnAgregar"></a>
        </form>
    </div>
    <div class="datos">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../controllers/C_TipoUsuario.php");
                foreach ($matrizTipos as $tipo) {
                    echo "<tr>";
                    echo "<td>" . $tipo["idtipousuario"] . "</td>";
                    echo "<td>" . $tipo["descripcion"] . "</td>";
                    echo "<td><a href='' class='bteditar'>Editar</a>";
                    echo "<a href='../controllers/C_TipoUsuario.php?opcion=eliminar&fila=" . $tipo["idtipousuario"] .
                     "' class='bteliminar'>Eliminar</a>";
                    echo "</td>";
                    // for ($i = 1; $i < $totalPaginas; $i++) {
                    //     echo "<a href='?pagina=" . $i . "'>" . $i . "</a>";
                    // }
                }
                ?>
            </tbody>
        </table>
    </div>
</main>