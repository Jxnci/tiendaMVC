<?php
require_once("../models/M_estadisticas.php");
$est = new EstadisticaModel;
?>
<main>
    <div class="estasGeneral">
        <div class="estasGeneral__item">
            <img src="../icons/icons8_sell_stock_100px_1.png" alt="imgagen estadistica">
            <div class="eg__detalle">
                <span><?= $est->cantidadVentas(); ?></span>
                <h5>Cantidad de Ventas</h5>
            </div>
        </div>
        <div class="estasGeneral__item">
            <img src="../icons/icons8_group_100px.png" alt="imgagen estadistica">
            <div class="eg__detalle">
                <span><?= $est->cantidadClientes(); ?></span>
                <h5>Cantidad de Clientes</h5>
            </div>
        </div>
        <div class="estasGeneral__item">
            <img src="../icons/icons8_earrings_100px.png" alt="imgagen estadistica">
            <div class="eg__detalle">
                <span><?= $est->cantidadProductos(); ?></span>
                <h5>Cantidad de Productos</h5>
            </div>
        </div>
    </div>

    <div class="estasSecundaria">
        <div class="estasSecundaria__item">
            <h4>Total Venta</h4>
            <span>S/.<?= $est->gananciaTotal(); ?></span>
        </div>
        <div class="estasSecundaria__item">
            <h4>Cantidad de Clientes</h4>
            <span><?= $est->cantidadClientes(); ?></span>
        </div>
        <div class="estasSecundaria__item">
            <h4>Total Venta</h4>
            <span>S/.<?= $est->gananciaTotal(); ?></span>
        </div>
    </div>
    <div class="estVentas_Cont">
        <div class="estVentas">
            <h3>Estadística de Ventas</h3><span></span>
            <div><span>[Descripción]</span></div>
            <div><span>[Detalles]</span></div>
            <div><span>[Descripción]</span></div>
            <div><span>[Detalles]</span></div>
            <div><span>[Descripción]</span></div>
            <div><span>[Detalles]</span></div>
            <div><span>[Descripción]</span></div>
            <div><span>[Detalles]</span></div>
        </div>
        <div class="ReportesStyle">
            <h3>Reportes</h3>
            <div>
                <form action="?ventana=estad&pop=aa" method="post">
                    <h4>Ingrese La fecha</h4>
                    <span>De : </span><input type="date" name="fecha1" id=""><br>
                    <span>Hasta : </span><input type="date" name="fecha2" id=""><br>
                    <a href="JavaScript:abrir()"><input type="submit" name="btnReportar" value="Reportar"></a>
                </form>
            </div>
            <div class="proVendido">
                <h4>Producto mas vendido </h4>
                <a href="JavaScript:abrir()">Reportar</a>
            </div>
            <div class="proVendido">
                <h4>Usario HIstorico</h4>
                <a href="JavaScript:abrirUsu()">Reportar</a>
            </div>
        </div>
    </div>

    <div class="Reporte" id="porFechas">
        <div><a href="JavaScript:cerrar()"><i class="fas fa-times-circle">Cerrar</i></a></div>
        <div>
            <h2 style="color: #fff;">Reporte por Fechas</h2>
            <div>
                <div id="verDatos">
                    <?php
                    if (isset($_GET["pop"])) {
                        if (isset($_POST["btnReportar"])) {
                    ?>
                            <script>
                                document.getElementById("porFechas").style.display = "block";
                                document.getElementById("principal").style.display = "block";
                            </script>
                    <?php
                            $fe1 = $_POST['fecha1'];
                            $fe2 = $_POST['fecha2'];
                            $datos = $est->getconsultaporFecha($fe1, $fe2);
                            echo "<table>";
                            echo "<th>ID</th>";
                            echo "<th>Fecha</th>";
                            echo "<th>Total</th>";
                            echo "<th>Producto</th>";
                            echo "<th>Usuario</th>";
                            echo "<tbody>";
                            foreach ($datos as $dato) {
                                echo "<tr><td>" . $dato["idventa"] . "</td>";
                                echo "<td>" . $dato["fecha"] . "</td>";
                                echo "<td>" . $dato["total"] . "</td>";
                                echo "<td>" . $dato["nombre"] . "</td>";
                                echo "<td>" . $dato["usuario"] . "</td></tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                        }
                        if ($_GET["pop"] == "abrir") {
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="Reporte" id="masVendido">
        <div><a href="JavaScript:cerrar()"><i class="fas fa-times-circle">Cerrar</i></a></div>
        <div>
            <h2 style="color: #fff;">Producto mas Vendido</h2>
            <div id="verDatos">
                <?php
                    $masVendido = $est->masVendido();
                    echo "<table>";
                    echo "<th>Producto</th>";
                    echo "<th>Cantidad</th>";
                    echo "<tbody>";
                    foreach ($masVendido as $mv) {
                        echo "<tr><td>" . $mv["nombre"] . "</td>";
                        echo "<td>" . $mv["COUNT(*)"] . "</td></tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                ?>
            </div>
        </div>
    </div>
    <div class="Reporte" id="UsuarioVendido">
        <div><a href="JavaScript:cerrar()"><i class="fas fa-times-circle">Cerrar</i></a></div>
        <div>
            <h2 style="color: #fff;">Usuario que vendio mas Historicamente</h2>
            <div id="verDatos">
                <?php
                    $usuVen = $est->usuarioasVendido();
                    echo "<table>";
                    echo "<th>Usuario</th>";
                    echo "<th>Cantidad</th>";
                    echo "<tbody>";
                    foreach ($usuVen as $uv) {
                        echo "<tr><td>" . $uv["usuario"] . "</td>";
                        echo "<td>" . $uv["COUNT(*)"] . "</td></tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                ?>
            </div>
        </div>
    </div>

    <script>
        function abrir(){
            document.getElementById("masVendido").style.display = "block";
            document.getElementById("principal").style.display = "block";
        }
        function cerrar() {
            document.getElementById("UsuarioVendido").style.display = "none";
            document.getElementById("masVendido").style.display = "none";
            document.getElementById("porFechas").style.display = "none";
            document.getElementById("principal").style.display = "none";
        }
        function abrirUsu(){
            document.getElementById("UsuarioVendido").style.display = "block";
            document.getElementById("principal").style.display = "block";
        }
    </script>
</main>