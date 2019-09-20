<?php

$host="localhost";
$user="root";
$pass="";
$base="productos";
include("conexion.php");
$con=conectar($host,$user,$pass,$base);

	$var1=$_POST['id_presentacion'];
	$var2=$_POST['nombre'];
	$var3=$_POST['presentacion'];
	$sql="insert into tipo_producto (id_producto,nom_producto, presentacion) values('$var1','$var2','$var3')";

	
	$query=mysqli_query($con,$sql);
	
	echo "<Script type='text/javascript'>
	alert('Se ha Realizado la Adicion Correctamente');
	window.location='../Procedimientos';
	</Script>";
	

?>