<?php

require'conexion.php';

$nombre = $_GET['nombre'];

if(!empty($nombre)){
    
    $persona = mysqli_real_escape_string($con, $nombre);
    
    $resultadoBD = mysqli_query($con, "SELECT *FROM usuarios WHERE Nombre LIKE '" . $persona . "%'");
    
    while($fila = mysqli_fetch_assoc($resultadoBD)){
        
        echo '<div class="miClase">' . $fila['Nombre'] . '</div>';
        
    }
    
}

?>