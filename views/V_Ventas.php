<main>
    <?php
    // require("../models/paginacion.php");
    require_once("../models/M_Venta.php");
    $vm = new VentaModel;
    ?>
    <div class="formIngresoDatos">
        <form action="../controllers/C_Venta.php?opcion=nuevo" method="post">
            <input type="date" name="fecha" id="" require>
            <input type="text" name="Total" id="" placeholder="Total" require>
            <select name="cmbPro" id="">
                <?php
                $vm->llenarCombo("producto");
                ?>
            </select>
            <select name="cmbusu" id="">
                <?php
                $vm->llenarCombo("usuario");
                ?>
            </select>
            <a href=''><input type='submit' value='Agregar' name="btnAgregar"></a>
        </form>
    </div>
    <div class="datos">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Producto</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../controllers/C_Venta.php");
                foreach ($matrizVenta as $venta) {
                    echo "<tr>";
                    echo "<td>" . $venta["idventa"] . "</td>";
                    echo "<td>" . $venta["fecha"] . "</td>";
                    echo "<td>" . $venta["total"] . "</td>";
                    echo "<td>" . $venta["producto_idproducto"] . "</td>";
                    echo "<td>" . $venta["usuario_idusuario"] . "</td>";
                    echo "<td><a href='' class='bteditar'>Editar</a>";
                    echo "<a href='../controllers/C_Venta.php?opcion=eliminar&fila=" . $venta["idventa"] .
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