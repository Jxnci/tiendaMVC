<?php


		$con=mysqli_connect('localhost','root','','bd_perfecta');
		
		$sql="SELECT * FROM tipo_categoria";
		$resultado=mysqli_query($con,$sql);
		$cant=mysqli_num_rows($resultado);


		echo '<table border="1">';
			echo '<tr>';  
			echo '<th>CATEGORIA</th>';
			echo '<th>PRODUCTO</th>';
			echo '<th>DESCRIPCION</th>';
			echo '</tr>';

		if($cant>0){

			while($datos=mysqli_fetch_array($resultado)){
				echo '<tr>';
				echo '<td>'.$datos[0].'</td>';
				echo '<td>'.$datos[1].'</td>';
				echo '<td>'.$datos[2].'</td>';

				echo '<td>
				<a href="modificartipocategoria.php?cod='.$datos[0].' & des='.$datos[1].'">Modificar</a> | <a href="eliminar.php?cod='.$datos[0].'">Eliminar</a></td>';
				echo '</tr>';
			}
			
		}
		else{
			$mensaje="CONSULTA INCORRECTO";
		}

		echo '</table>';


?>