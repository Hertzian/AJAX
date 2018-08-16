<?php

$obj = new \stdClass();

$obj->nombre = "Eduardo";
$obj->apellido = "Aguilar";
$obj->edad = 35;
$obj->ciudad = "Guadalajara";

$myJSON = json_encode($obj);

echo $myJSON;





?>
