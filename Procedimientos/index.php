<?php
include("conexion.php");
$host="localhost";
$user="root";
$pass="";
$base="productos";
$con=conectar($host,$user,$pass,$base);

	$sql="select * from tipo_producto";
    $res=mysqli_query($con,$sql);
    $query=mysqli_query($con,$sql);
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel=StyleSheet href="Estilos.estilos.css">
        <title>Inicio</title>
    </head>
    <body>   
        <tr>
            <th>  ID PROD  </th>
            <th>  NOMBRE    </th>
            <th>  PRESENTACION   </th>
            <th> <a href="../Adicionar.html"><button type="button">NUEVO</button></a></th>
        </tr>

    <?php
    $i=0;
    while($req=mysqli_fetch_assoc($res))
        {
        
    ?>
  
            <table>
                <thead>
                    <tr>
                        <th>  -------------- </th>
                        <th>  --------------  </th>
                        <th>  --------------  </th>
                    </tr>    
                
                </thead>
                <tbody>
                    <tr>
                    <td><?php echo $req['id_producto'];?></td>
                    <td><?php echo $req['nom_producto'];?></td>
                    <td> <?php echo $req['presentacion'];?></td>
                    <td><a href="eliminar.php"><button type="button">EDITAR</button></a></td>
                    <td><a href="../Eliminar.html"><button type="button">ELIMINAR</button></td>
                    </tr>
                </tbody>
            </table>    
         <?php 
			}
            ?>
            
    </body>
    </html>