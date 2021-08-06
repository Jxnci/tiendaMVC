<main>
    <?php
    // require("../models/paginacion.php");
    require_once("../models/M_Producto.php");
    $um = new ProductoModel;
    ?>
    <div class="formIngresoDatos">
        <form action="../controllers/C_Producto.php?opcion=nuevo" method="post">
            <input type="text" name="txtDesc" id="" placeholder="Descripción" require>
            <input type="text" name="txtPreVen" id="" placeholder="Precio de Venta" require>
            <input type="text" name="txtPreCon" id="" placeholder="Precio de Compra" require>
            <input type="text" name="txtStok" id="" placeholder="Stock" require>
            <select name="cmbCat" id="">
                <?php
                $um->llenarCombo("categoria");
                ?>
            </select>
            <select name="cmbPro" id="">
                <?php
                $um->llenarCombo("proveedor");
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
                    <th>Nombre</th>
                    <th>Precio Venta</th>
                    <th>Precio Compra</th>
                    <th>Stock</th>
                    <th>Categoria</th>
                    <th>Proveedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../controllers/C_Producto.php");
                foreach ($matrizProducto as $prod) {
                    echo "<tr>";
                    echo "<td>" . $prod["idproducto"] . "</td>";
                    echo "<td>" . $prod["nombre"] . "</td>";
                    echo "<td>" . $prod["precio_venta"] . "</td>";
                    echo "<td>" . $prod["precio_compra"] . "</td>";
                    echo "<td>" . $prod["stock"] . "</td>";
                    echo "<td>" . $prod["categoria_idtipoproducto"] . "</td>";
                    echo "<td>" . $prod["proveedor_idproveedor"] . "</td>";
                    echo "<td><a href='' class='bteditar'>Editar</a>";
                    echo "<a href='../controllers/C_Producto.php?opcion=eliminar&fila=" . $prod["idproducto"] .
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