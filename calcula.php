<?php

$num1 = $_GET['numero1'];
$num2 = $_GET['numero2'];

$respuesta = '';

if(!ctype_digit($num1) || !ctype_digit($num2)){//ctype_digit(), para ver si el parametro es digito
    
    $respuesta .= 'Ingresa solo numeros';
    
}else{
    
    $respuesta .= '<table>';
    
    $respuesta .= '<tr><td>' . $num1 . ' + ' . $num2 . ' = ' . ($num1 + $num2) . '</td></tr>';
    
    $respuesta .= '<tr><td>' . $num1 . ' - ' . $num2 . ' = ' . ($num1 - $num2) . '</td></tr>';
    
    $respuesta .= '<tr><td>' . $num1 . ' * ' . $num2 . ' = ' . ($num1 * $num2) . '</td></tr>';
    
    if($num2 != 0){
        
        $respuesta .= '<tr><td>' . $num1 . ' / ' . $num2 . ' = ' . ($num1 / $num2) . '</td></tr>';;
        
    }else{
        
        $respuesta .= '<tr><td>' . $num1 . ' / ' . $num2 . ' = ' . 'no es posible división por cero</td></tr>';
    }
    
    $respuesta .= '</table>';
    
}

echo '<h3>Resultado: </h3>' . $respuesta;

?>