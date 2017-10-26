<?php
session_start();
ini_set("display_errors",1);

//Capturamos datos del formulario recibidos mediante post
$var_nombre_tipo_gestion   =   $_POST["txt_nombre_tipo_gestion"];  


//incorporamos la clase  tipo gestión
include("../../clases/tipoGestion.class.php");
//creamos objeto de la clase
$obj_tipo_gestion = new tipoGestion();
//invocamos el metodo agregar tipo gestion
$var_resultado = $obj_tipo_gestion->agregarTipoGestion($var_nombre_tipo_gestion);
if($var_resultado==1){
  Header("Location:index.php");
}else{
  Header("Location:agregar.php");
}


?>