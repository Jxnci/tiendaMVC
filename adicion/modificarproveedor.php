<?php

if(!empty($_POST)){
	$con=mysqli_connect('localhost','root','','bd_Perfecta');
	$cod=$_POST['txtruc'];
	$des=$_POST['txtnombre'];
	$des=$_POST['txtdni'];
	$sql="UPDATE ruc SET nombre  ='$des' WHERE dni='$cod'";
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
			<h3>Modificacar Proveedor </h3>			
			<input type="text" name="txtRuc" value="<?php echo $_GET['cod']; ?>">
			<input type="text" name="txtNombre" value="<?php echo $_GET['des']; ?>">
			<input type="text" name="txtDni" value="<?php echo $_GET['des']; ?>">
			<p class="alerta"> <?php if(!empty($mensaje)){ echo $mensaje;} ?></p>
			<input type="submit" name="btnModificar" value="Modificar">
		</form>
	</div>
</body>
</html>