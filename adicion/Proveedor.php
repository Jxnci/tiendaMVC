<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="contenedor">
		<form action="" method="post">
			<h3>PROVEEDOR</h3>			
			<input type="text" name="txtRuc" placeholder="Ingrese Ruc">
			<input type="text" name="txtNombre" placeholder="Ingrese Nombre ">
			<input type="text" name="txtDNI" placeholder="Ingrese DNI ">
			<p class="alerta"> <?php if(!empty($mensaje)){ echo $mensaje;} ?></p>
			<input type="submit" name="btnGrabar" value="Grabar">
		</form>
	</div>
</body>
</html>