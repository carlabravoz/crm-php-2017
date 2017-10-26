<?php
ini_set("display_errors",1);
include("../../clases/cliente.class.php");
$obj_cliente = new cliente();

//capturamos los valores del formulario
$var_rut_cliente    = $_POST["hdn_rut_cliente"];
$var_nombres        = $_POST["txt_nombres"];
$var_apellidos      = $_POST["txt_apellidos"];
$var_email          = $_POST["txt_email"];
$var_celular        = $_POST["txt_celular"];
$var_fono_fijo      = $_POST["txt_fono_fijo"];

//invocamos el método de actualizacion
$var_resultado = $obj_cliente->actualizarCliente($var_rut_cliente,$var_nombres,$var_apellidos,$var_email,$var_celular,$var_fono_fijo);
if($var_resultado==1){
header("Location:index.php");
}else{
echo "Se ha producido un problema al actualizar";
}
?>