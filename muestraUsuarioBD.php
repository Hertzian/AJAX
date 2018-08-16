<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Usuario - Ajax</title>
    <link rel="stylesheet" type="text/css" href="estilosTabla.css">
</head>
<body>
    <?php
    include('listaClientes.php');
    ?>
    <div id="info"></div>

    <script type="text/javascript">

    function mostrarUsuario(usuarioSeleccionado){

        var xmlhttp=new XMLHttpRequest();

        if(usuarioSeleccionado==""){

          document.getElementById('info').innerHTML="";

        }else{

            xmlhttp.onreadystatechange=function(){

                if(this.readyState==4 && this.status==200){

                    document.getElementById('info').innerHTML=this.responseText;

                }

            }

            xmlhttp.open("GET", "obtenerUsuarioBD.php?cliente=" + usuarioSeleccionado, true);
            xmlhttp.send();

        }

    }
      
    </script>
</body>
</html>