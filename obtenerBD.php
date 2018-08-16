<?php

require 'conexion.php';

$result = mysqli_query($con, 'SELECT * FROM usuarios');

$usuariosBD = '<table>';

$usuariosBD .= '<tr><th>Nombre</th><th>Correo</th></tr>';

while($fila = mysqli_fetch_assoc($result)){
    
    $usuariosBD .= '<tr>';
    
    $usuariosBD .= '<td>' . $fila['Nombre'] . '</td>';
    
    $usuariosBD .= '<td>' . $fila['email'] . '</td>';
    
    $usuariosBD .= '</tr>';
        
}

$usuariosBD .= '</table>';

echo $usuariosBD;

mysqli_close($con);

?>