<main>
    <?php
    // require("../models/paginacion.php");
    ?>
    <div class="formIngresoDatos">
        <form action="../controllers/C_Usuarios.php?opcion=nuevo" method="post">
            <input type="text" name="txtUsu" id="" placeholder="Usuario" require>
            <input type="password" name="txtCla" id="" placeholder="Clave" require>
            <input type="text" name="txtDir" id="" placeholder="Dirección" require><br>
            <input type="text" name="txtTel" id="" placeholder="Teléfono" require>
            <input type="text" name="txtNom" id="" placeholder="Nombres" require>
            <select name="txtTipUsu" id="">
                <?php
                // $um = new UsuarioModel;
                // $um->cmbTipoUsuario();
                ?>
            </select>
            <a href='insertar.php'><input type='submit' value='Agregar'></a>
        </form>
    </div>
    <div class="datos">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>clave</th>
                    <th>Dirección</th>
                    <th>telefono</th>
                    <th class="ancho">Nombres</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // foreach ($matrizUsuario as $user) {
                //     echo "<tr>";
                //     echo "<td>" . $user["idusuario"] . "</td>";
                //     echo "<td>" . $user["usuario"] . "</td>";
                //     echo "<td>" . $user["clave"] . "</td>";
                //     echo "<td>" . $user["direccion"] . "</td>";
                //     echo "<td>" . $user["telefono"] . "</td>";
                //     echo "<td>" . $user["nombres"] . "</td>";
                //     echo "<td>" . $user["tipoUsuario_idtipousuario"] . "</td>";
                //     echo "<td><a href='' class='bteditar'>Editar</a>";
                //     echo "<a href='../controllers/C_Usuarios.php?opcion=eliminar&fila=" . $user["idusuario"] .
                //      "' class='bteliminar'>Eliminar</a>";
                //     echo "</td>";
                    // for ($i = 1; $i < $totalPaginas; $i++) {
                    //     echo "<a href='?pagina=" . $i . "'>" . $i . "</a>";
                    // }
                // }
                ?>
            </tbody>
        </table>
    </div>
</main>