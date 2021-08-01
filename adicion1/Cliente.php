<?php
$mensaje='';
if(!empty($_POST)){
	if(empty($_POST['txtid']) || empty($_POST['txtDireccion']) ){
		$mensaje='DEBE INGRESAR TODOS LOS DATOS';
	}
	else{
		if(is_numeric($_POST['txtid']) && strlen($_POST['txtid'])<=8){

			$con=mysqli_connect('localhost','root','','bdperfecta');
			$id=$_POST['txtid'];
			$nom=$_POST['txtNombre'];
			$ruc=$_POST['txtruc'];
			$dni=$_POST['txtDNI'];            
            $dire=$_POST['txtDireccion'];
                 
			$sql="INSERT INTO cliente (id,nombre,dni,ruc,direccion,) VALUES('$id,'$nom','$ruc','$dni','$dire')";
			mysqli_query($con,$sql);			
			$mensaje='datos guardados';
			
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
	<div id="contenedor">
<body>
		<form action="" method="post">
			<h3>Registro Clientes</h3>	
			<input type="text" name="txtid" placeholder="Ingrese">	
			 <input type="text" name="txtNombre" placeholder="Ingrese Nombre">	
			<input type="text" name="txtDNI" placeholder="Ingrese DNI"> 
			<input type="text" name="txtruc" placeholder="Ingrese RUC">          
            <input type="text" name="txtDireccion" placeholder="Ingrese Dirección">
            
          			<p class="alerta"> <?php if(!empty($mensaje)){ echo $mensaje;} ?></p>
			<input type="submit" name="btnGrabar" value="Grabar">
		</form>
	</div>
</body>
</html>