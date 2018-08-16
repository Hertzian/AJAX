<?php
 require "conexion.php";

$nom = $_POST['Nombre'];

$email = $_POST['email'];
    
$result = mysqli_query($con,"INSERT INTO usuarios ('null', '$nom', '$email');");

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