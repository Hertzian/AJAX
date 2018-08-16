<?php

$host = 'localhost';
$usr = 'root';
$pass = '';
$db = 'northwind';

$con = new mysqli($host, $usr, $pass, $db);

if($con->connect_error){
    
    echo 'Error con la conexión ' . $con->connect_error;
    
}

?>