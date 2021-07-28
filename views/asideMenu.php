<aside>
    <div>
        <img src="../icons/logo3.jpeg" alt="Logo Perfecta" width="210px;">
    </div>
    <div>
        <div>
            <h4>[imagen][Nombre] <br> [Tipo Usuario]</h4>
        </div>
        <ul>
            <li><a href="../views/principal.php?ventana=venta"><i class="fas fa-cart-arrow-down"></i> Ventas</a></li>
            <li><a href="../views/principal.php?ventana=usuario"><i class="fas fa-users-cog"></i> Usuarios</a></li>
            <li><a href="../views/principal.php?ventana=cliente"><i class="fas fa-users"></i> Clientes</a></li>
            <li><a href="../views/principal.php?ventana=producto"><i class="fas fa-ring"></i> Productos</a></li>
            <li><a href="../views/principal.php?ventana=provee"><i class="fas fa-people-carry"></i> proveedores</a></li>
            <li><a href="../views/principal.php?ventana=tipusu"><i class="fas fa-user-tie"></i> Tipo de Usuario</a></li>
            <li><a href="../views/principal.php?ventana=cate"><i class="fas fa-window-restore"></i> Categoria</a></li>
        </ul>
    </div>
    <div>
        <ul>
            <li><a href="../views/principal.php?ventana=permi"><i class="fas fa-user-shield"></i> Permisos</a></li>
            <li><a href="../views/principal.php?ventana=estad"><i class="fas fa-chart-pie"></i> Estadisticas</a></li>
        </ul>
    </div>
    <div>
        <ul>
            <li>
                <form action="../models/sesion.php" method="POST">
                    <input type="submit" value="Cerrar Sesión" name="btnCerrarSesion" class="btcerrars">
                </form>
            </li>
        </ul>
    </div>
</aside>