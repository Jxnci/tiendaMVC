<?php
$mensaje='';
if(!empty($_POST)){
	if(empty($_POST['txtIdus']) || empty($_POST['txtDescripcion'])){
		$mensaje='DEBE INGRESAR TODOS LOS DATOS';
	}
	else{
		if(is_numeric($_POST['txtIdus']) && strlen($_POST['txtIdus'])<=2){

			$con=mysqli_connect('localhost','root','','bdPerfecta');
			$cod=$_POST['txtIdus'];
			$des=$_POST['txtDescripcion'];

			$sql="INSERT INTO tipousuario(idtipousuario,descripcion) VALUES('$cod','$des')";
			mysqli_query($con,$sql);	
					

			
		}
		else{
			$mensaje="DATOS NO GUARDADOS";
		}



	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="#">
</head>
<body>
	<div id="contenedor">
		<form action="" method="post">
			<h3>Mantenimiento Tipo usuario</h3>			
			<input type="text" name="txtCodigo" placeholder="Ingrese Codigo">
			<input type="text" name="txtDescripcion" placeholder="Ingrese Descripcion">
			<p class="alerta"> <?php if(!empty($mensaje)){ echo $mensaje;} ?></p>
			<input type="submit" name="btnGrabar" value="Grabar">
		</form>
	</div>
</body>
</html>