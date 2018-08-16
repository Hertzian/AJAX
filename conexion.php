<?php

$host = 'localhost';
$usr = 'root';
$pass = '';
$db = 'clientes';

$con = mysqli_connect($host, $usr, $pass, $db);

if(mysqli_connect_errno()){
    
    echo 'Error con la conexión ' . mysqli_connect_error();
    
}

?>