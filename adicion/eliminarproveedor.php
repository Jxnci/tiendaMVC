<?php
	$con=mysqli_connect('localhost','root','','bd_Perfecta');
	$cod=$_GET['cod'];
	
	$sql="DELETE FROM proveedor WHERE proveedor='$cod'";
	mysqli_query($con,$sql);
	header('Location: mostrarcategoria.php');
?>