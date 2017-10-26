

<?php

ini_set("display_errors",1);
//incorporamos la clase cliente
include("../../clases/cliente.class.php");
//creamos el objeto de la clase
   $obj_cliente = new cliente();

   //capturamos la id del cliente
   $var_rut_cliente = $_GET["rut_cliente"];
   
   //ejecutamos la funcion eliminar 
   $var_resultado = $obj_cliente->eliminarCliente($var_rut_cliente);
   if($var_resultado==1){
     echo "cliente eliminado";
   }else{
    echo "El cliente tiene una gestion asociada";
  

  }
   }    


?>
<html>
  <head>
    </head>
    <body>

</body>
  </html>