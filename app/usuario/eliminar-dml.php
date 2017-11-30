<?php

ini_set("display_errors",1);
//incorporamos la clase cliente
include("../../clases/usuario.class.php");
//creamos el objeto de la clase
   $obj_usuario = new usuario();

   //capturamos la id del cliente
   $var_rut_usuario = $_GET["rut_usuario"];
   
   //ejecutamos la funcion eliminar 
   $var_resultado = $obj_usuario->eliminarUsuario($var_rut_usuario);
   if($var_resultado==1){
     echo "usuario eliminado";
   }else{
    echo "El usuario tiene una gestion asociada";
  

  }
   }    


?>
<html>
  <head>
    </head>
    <body>

</body>
  </html>