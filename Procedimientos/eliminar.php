<?php
include("conexion.php");
$host="localhost";
$user="root";
$pass="";
$base="productos";
$con=conectar($host,$user,$pass,$base);

$var1=$_POST['id_presentacion'];
	
	
	$sql="delete from tipo_producto where id_producto='$var1'";
    $res=mysqli_query($con,$sql);
    
    $query=mysqli_query($con,$sql);
	
	echo "<Script type='text/javascript'>
	alert('Se ha Realizado la Adicion Correctamente');
	window.location='../Procedimientos';
	</Script>";

?>