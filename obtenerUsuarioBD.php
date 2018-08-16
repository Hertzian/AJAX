<?php
 require "conexion.php";

 $idCliente = (int)$_GET['nombre'];
 
 $result = mysqli_query($con,"SELECT * FROM usuarios WHERE idCliente=$idCliente");

 $usuariosBD = "<table>";

 $usuariosBD .= "<tr><th>Nombre</th><th>Correo</th></tr>";
 
 while($fila = mysqli_fetch_assoc($result)){
     
    $usuariosBD .= "<tr>";
    
    $usuariosBD .= "<td>".$fila['Nombre']."</td>";
    
    $usuariosBD .= "<td>".$fila['email']."</td>";
    
    $usuariosBD .= "</tr>";
     
}

$usuariosBD .= "</table>";
 
echo $usuariosBD;

mysqli_close($con);

?>