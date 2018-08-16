<?php

header("Content-Type:application/json; charset=UTF-8");

//convierte json en objeto de php
$obj = json_decode($_POST['x']);//decodifica objeto json

require "conexion2.php";

$consulta = "SELECT CompanyName FROM " . $obj->table . " LIMIT " . $obj->limit;

$result = $con->query($consulta);

$salida = array();

$salida = $result->fetch_all(MYSQLI_ASSOC);

$myJSON = json_encode($salida);

echo $myJSON;

?>