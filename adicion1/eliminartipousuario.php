<?php
	$con=mysqli_connect('localhost','root','','bdPerfecta);
	$cod=$_GET['cod'];
	
	$sql="DELETE FROM tipousuario WHERE codigo='$cod'";
	mysqli_query($con,$sql);
	header('Location: mostrartipoUsuario.php');
?>