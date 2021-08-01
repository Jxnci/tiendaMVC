<?php


		$con=mysqli_connect('localhost','root','','bdPerfecta');
		
		$sql="SELECT * FROM tipousuario";
		$resultado=mysqli_query($con,$sql);
		$cant=mysqli_num_rows($resultado);


		echo '<table border="1">';
			echo '<tr>';  
			echo '<th>ID</th>';
			echo '<th>DESCRIPCION</th>';
			echo '<th>ACCIONES</th>';
			echo '</tr>';

		if($cant>0){

			while($datos=mysqli_fetch_array($resultado)){
				echo '<tr>';
				echo '<td>'.$datos[0].'</td>';
				echo '<td>'.$datos[1].'</td>';
				echo '<td>
				<a href="modificartipoUsuario.php?id='.$datos[0].' &des='.$datos[1].'">Modificar</a> | <a href="eliminar.php?cod='.$datos[0].'">Eliminar</a></td>';
				echo '</tr>';
			}
			
		}
		else{
			$mensaje="CONSULTA INCORRECTO";
		}

		echo '</table>';


?>