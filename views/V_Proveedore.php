<?php require_once("../models/M_Proveedor.php"); ?>
<main>
    <?php
    // require("../models/paginacion.php");
    ?>
    <div class="formIngresoDatos">
        <form action="../controllers/C_Proveedor.php?opcion=nuevo" method="post">
            <input type="text" name="txtDesc" id="" placeholder="Descripción" require>
            <input type="text" name="txtRuc" id="" placeholder="RUC" require>
            <input type="text" name="txtDni" id="" placeholder="DNI" require>
            <a href=''><input type='submit' value='Agregar' name="btnAgregar"></a>
        </form>
    </div>
    <div class="datos">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th>RUC</th>
                    <th>DNI</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../controllers/C_Proveedor.php");
                foreach ($matrizProveedor as $pro) {
                    echo "<tr>";
                    echo "<td>" . $pro["idproveedor"] . "</td>";
                    echo "<td>" . $pro["nombre"] . "</td>";
                    echo "<td>" . $pro["ruc"] . "</td>";
                    echo "<td>" . $pro["dni"] . "</td>";
                    echo "<td><a href='#' class='bteditar'>Editar</a>";
                    echo "<a href='../controllers/C_Proveedor.php?opcion=eliminar&fila=" . $pro["idproveedor"] .
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