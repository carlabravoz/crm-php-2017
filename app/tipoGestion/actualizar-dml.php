<?php
ini_set("display_errors",1);
include("../../clases/tipoGestion.class.php");
$obj_tipo_gestion = new tipoGestion();

//capturamos los valores del formulario
$var_id_tipo_gestion   = $_POST["txt_id_tipo_gestion"];
$var_nombre           = $_POST["txt_nombre"];

//invocamos el método de actualizacion
$var_resultado = $obj_tipo_gestion->actualizarTipoGestion($var_id_tipo_gestion,$var_nombre);
if($var_resultado==1){
header("Location:index.php");
}else{
echo "Se ha producido un problema al actualizar";
}
?>