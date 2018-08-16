<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Usuario - Ajax</title>
    <link rel="stylesheet" type="text/css" href="estilosTabla.css">
</head>
<body>
   
    <form action="nuevoUsuario.php">
        Buscar Persona: <input type="text" placeholder="Ingresar Nombre" onkeyup="mostrarUsuario(this.value)">
        
        <div id="info"></div>
    
        <h3>Nueva Persona</h3>        
        Nombre: <input type="text" placeholder="Nombre">
        email: <input type="text" placeholder="email">
        <input type="submit">
    </form>
   
    
    

    <script type="text/javascript">

    function mostrarUsuario(usuarioSeleccionado){

        var xmlhttp=new XMLHttpRequest();

        if(usuarioSeleccionado.length == ""){

          document.getElementById('info').innerHTML = "";

        }else{

            xmlhttp.onreadystatechange=function(){

                if(this.readyState==4 && this.status==200){

                    document.getElementById('info').innerHTML = this.responseText;

                }

            }

            xmlhttp.open("GET", "filtroUsuario.php?nombre=" + usuarioSeleccionado, true);
            xmlhttp.send();

        }

    }
      
    </script>
</body>
</html>