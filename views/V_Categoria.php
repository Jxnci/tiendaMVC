 
<?php require_once("../models/M_Categoria.php"); ?>

<main>
    <?php
    // require("../models/paginacion.php");
    ?>
    <div class="formIngresoDatos">
        <form action="../controllers/C_Categoria.php?opcion=nuevo" method="post">
            <input type="text" name="txtDesc" id="" placeholder="Decripción" require>
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
                require_once("../controllers/C_Categoria.php");
                foreach ($matrizCategoria as $user) {
                    echo "<tr>";
                    echo "<td>" . $user["idtipoproducto"] . "</td>";
                    echo "<td>" . $user["descripcion"] . "</td>";
                    echo "<td><a href='' class='bteditar'>Editar</a>";
                    echo "<a href='../controllers/C_Categoria.php?opcion=eliminar&fila=" . $user["idtipoproducto"] .
                     "&?desc=".$user["descripcion"]."' class='bteliminar'>Eliminar</a>";
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