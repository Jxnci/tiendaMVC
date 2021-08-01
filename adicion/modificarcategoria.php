<?php

if(!empty($_POST)){
	$con=mysqli_connect('localhost','root','','bd_Perfecta');
	$cod=$_POST['txtproducto'];
	$des=$_POST['txtDescripcion'];
	$sql="UPDATE Producto SET descripcion='$des' WHERE categoria='$cod'";
	mysqli_query($con,$sql);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="contenedor">
		<form action="" method="post">
			<h3>Modificacar Categoria </h3>			
			<input type="text" name="txtProducto" value="<?php echo $_GET['cod']; ?>">
			<input type="text" name="txtDescripcion" value="<?php echo $_GET['des']; ?>">
			<p class="alerta"> <?php if(!empty($mensaje)){ echo $mensaje;} ?></p>
			<input type="submit" name="btnModificar" value="Modificar">
		</form>
	</div>
</body>
</html>