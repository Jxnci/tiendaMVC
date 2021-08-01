<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="contenedor">
		<form action="" method="post">
			<h3>CATEGORIA</h3>			
			<input type="text" name="txtProducto" placeholder="Ingrese Producto">
			<input type="text" name="txtDescripcion" placeholder="Ingrese Descripcion ">
			<p class="alerta"> <?php if(!empty($mensaje)){ echo $mensaje;} ?></p>
			<input type="submit" name="btnGrabar" value="Grabar">
		</form>
	</div>
</body>
</html>