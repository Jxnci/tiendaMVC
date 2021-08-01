<main>
    <?php
    // require("../models/paginacion.php");
    ?>
    <div class="formIngresoDatos">
        <form action="../controllers/C_Cliente.php?opcion=nuevo" method="post">
            <input type="text" name="txtNombre" id="" placeholder="Nombres" require>
            <input type="text" name="txtDireccion" id="" placeholder="Dirección" require><br>
            <input type="text" name="txtruc" id="" placeholder="RUC" require>
            <input type="text" name="txtDNI" id="" placeholder="DNI" require>
            <a href=''><input type='submit' value='Agregar' name="btnAgregar"></a>
        </form>
    </div>
    <div class="datos">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Dirección</th>
                    <th>RUC</th>
                    <th>DNI</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../controllers/C_Cliente.php");
                foreach ($matrizCliente as $cliente) {
                    echo "<tr>";
                    echo "<td>" . $cliente["idcliente"] . "</td>";
                    echo "<td>" . $cliente["nombres"] . "</td>";
                    echo "<td>" . $cliente["direccion"] . "</td>";
                    echo "<td>" . $cliente["ruc"] . "</td>";
                    echo "<td>" . $cliente["dni"] . "</td>";
                    echo "<td><a href='' class='bteditar'>Editar</a>";
                    echo "<a href='../controllers/C_Cliente.php?opcion=eliminar&fila=" . $cliente["idcliente"] .
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