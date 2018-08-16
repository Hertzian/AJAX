<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL-AJAX</title>
    <link rel="stylesheet" type="text/css" href="estilosTabla.css">
</head>
<body>
    <button id="btnMuestra" onclick="mostrarUsuarios()">Mostrar Usuarios</button><br><br>
        
    <div id="info">Los Clientes se mostrarán aquí:</div>
        
    <script type="text/javascript">
        
        function mostrarUsuarios(){
            
            var elAjax;
            
            if(window.XMLHttpRequest){
                
                elAjax = new XMLHttpRequest();
                
            }else{
                
                elAjax = new ActiveXObject('Microsoft.XMLHTTP');
                
            }
            
            elAjax.onreadystatechange = function(){
                
                if(this.readyState == 4 && this.status == 200){
                    
                    document.getElementById('info').innerHTML = this.responseText;
                    
                    document.getElementById('btnMuestra').style.display = 'none';
                }
                
            }//fin funcion anonima
            
            elAjax.open("GET", "obtenerBD.php", true);
            elAjax.send();
            
        }//fin funcion        
            
    </script>
</body>
</html>