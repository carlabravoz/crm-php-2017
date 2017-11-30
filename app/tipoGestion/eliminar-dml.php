

<?php

ini_set("display_errors",1);
//incorporamos la clase cliente
include("../../clases/tipoGestion.class.php");
//creamos el objeto de la clase
   $obj_tipo_gestion = new tipoGestion();

   //capturamos la id del cliente
   $var_id_tipo_gestion = $_GET["id_tipo_gestion"];
   
   //ejecutamos la funcion eliminar 
   $var_resultado = $obj_tipo_gestion->eliminarTipoGestion($var_id_tipo_gestion);
   if($var_resultado==1){
     echo "tipo de gestion eliminada";
   }else{
    echo "tipo de gestion asociada a gestion";
  

  }
   }    


?>