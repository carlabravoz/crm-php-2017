<?php
ini_set("display_errors",1);
//incorporamos la clase gestion
include("../../clases/gestion.class.php");
//creamos el objeto de la clase
   $obj_gestion = new gestion();
   //obtenemos id de gestion po metodo Get
   $var_id_gestion = $_GET["id_gestion"];
  //ejecutamos la funcion de eliminacion
   $var_resultado = $obj_gestion->eliminarGestion($var_id_gestion);
   if($var_resultado==1){
     echo "gestion  eliminada";
   }else{
    echo "no se puede eliminar gestión";
  
   }

    


?>