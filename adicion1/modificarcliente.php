<?php

if (!empty($_POST)) {
	$con = mysqli_connect('localhost', 'root', '', 'bdPerfecta');
	$id = $_POST['txtId'];
	$nom = $_POST['txtNombre'];
	$dni = $_POST['txtDNI'];
	$ruc = $_POST['txtRuc'];
	$dir = $_POST['txtDirec'];
	
	$sql = "UPDATE cliente SET id = '$id', nombre='$nom'dni = '$dni', ruc='$ruc' , direccion='$dir'WHERE cliente.dni='$dni'";
	mysqli_query($con, $sql);
    }
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>

<body>
	<div id="contenedor">
		<form action="" method="post">
			<h3>Modificar Datos del cliente</h3>
			<input type="text" name="txtId" value="<?php echo $_GET['id']; ?>">
			<input type="text" name="txtNombre" value="<?php echo $_GET['nom']; ?>">
			<input type="text" name="txtDNI" value="<?php echo $_GET['dni']; ?>">
			<input type="text" name="txtRuc" value="<?php echo $_GET['ruc']; ?>">
			<input type="text" name="txtDirec" value="<?php echo $_GET['dir']; ?>">
			
			<p class="alerta"> <?php if (!empty($mensaje)) {
									echo $mensaje;
								} ?></p>
			<input type="submit" name="btnModificar" value="Modificar">
		</form>
	</div>
</body>

</html>