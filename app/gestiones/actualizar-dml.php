<?php
ini_set("display_errors",1);
//incoporamos la clase gestion
include("../../clases/gestion.class.php");
//creamos objeto de la clase gestion
$obj_gestion = new gestion();
//capturamos datos mediante post y los almacenamos en variables
$var_id_gestion          = $_POST["txt_id_gestion"];
$var_rut_usuario         = $_POST["txt_rut_usuario"];
$var_rut_cliente         = $_POST["txt_rut_cliente"];
$var_tipo_gestion        = $_POST["txt_tipo_gestion"];
$var_resultado_gestion   = $_POST["txt_resultado_gestion"];
$var_comentarios         = $_POST["txt_comentarios"];

//ejecutamos la funcion de actualizacion pasandole los datos capturados
$var_resultado = $obj_gestion->actualizarGestion($var_id_gestion,$var_rut_usuario,$var_rut_cliente,$var_tipo_gestion,$var_resultado_gestion,$var_comentarios);
if($var_resultado==1){
header("Location:index.php");
}else{
echo "Se ha producido un problema al actualizar";
}
?>