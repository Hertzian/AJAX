<?php
 
require 'conexion.php';

$sql = "SELECT idCliente,Nombre FROM usuarios";

$result = mysqli_query($con,$sql);

echo "<select onchange='mostrarUsuario(this.value)'>";

while($row = mysqli_fetch_assoc($result)){
    
    echo "<option value='" . $row["idCliente"] . "'>" . $row["Nombre"] . "</option>";

}

echo "</select>";

?>