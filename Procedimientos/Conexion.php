<?php

function conectar($host,$user,$pass,$base)
{
	
	$con=mysqli_connect($host,$user,$pass) or die("No se Pudo establecer la Conexion");

    mysqli_select_db($con,$base);

	return $con;
}   
?>