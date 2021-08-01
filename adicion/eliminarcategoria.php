<?php
	$con=mysqli_connect('localhost','root','','bd_Perfecta');
	$cod=$_GET['cod'];
	
	$sql="DELETE FROM tipo_categoria WHERE categoria='$cod'";
	mysqli_query($con,$sql);
	header('Location: mostrarcategoria.php');
?>