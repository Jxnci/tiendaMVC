<?php
$con = mysqli_connect('localhost', 'root', '', 'bdPerfecta');

$sql = "SELECT * FROM cliente";
$resultado = mysqli_query($con, $sql);
$cant = mysqli_num_rows($resultado);

echo '<table border="1">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>NOMBRE</th>';
echo '<th>DNI</th>';
echo '<th>RUC</th>';
echo '<th>DIRECCIÓN</th>';
echo '<th>ACCIONES</th>';
echo '</tr>';

if ($cant > 0) {

	while ($datos = mysqli_fetch_array($resultado)) {
		echo '<tr>';
		echo '<td>' . $datos[0] . '</td>';
		echo '<td>' . $datos[1] . '</td>';
		echo '<td>' . $datos[2] . '</td>';
		echo '<td>' . $datos[3] . '</td>';
		echo '<td>' . $datos[4] . '</td>';
		echo '<td>' . $datos[5] . '</td>';
    	echo '<td>
		<a href="modificarcliente.php?	dni='.$datos[0].' &nom='.$datos[1].' &dire='.$datos[2].' &tel='.$datos[3].'">Modificar</a> | <a href="eliminarCliente.php?cod=' . $datos[0] . '">Eliminar</a></td>';
		echo '</tr>';
	}
} else {
	$mensaje = "CONSULTA INCORRECTA";
}

echo '</table>';