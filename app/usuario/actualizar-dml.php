<?php
ini_set("display_errors",1);
include("../../clases/usuario.class.php");
$obj_usuario = new usuario();

//capturamos los valores del formulario
$var_rut_usuario    = $_POST["hdn_rut_usuario"];
$var_nombres        = $_POST["txt_nombres"];
$var_apellidos      = $_POST["txt_apellidos"];
$var_email          = $_POST["txt_email"];
$var_clave        = $_POST["txt_clave"];


//invocamos el método de actualizacion
$var_resultado = $obj_usuario->actualizarUsuario($var_rut_usuario,$var_nombres,$var_apellidos,$var_email,$var_clave);
if($var_resultado==1){
header("Location:index.php");
}else{
echo "Se ha producido un problema al actualizar";
}
?>