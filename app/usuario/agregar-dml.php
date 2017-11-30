<?php
session_start();

ini_set("display_errors",1);

//Capturamos datos del formulario recibidos mediante post
$var_cliente        =   $_POST["txt_rut_usuario"];  
$var_nombres        =   $_POST["txt_nombres"];
$var_apellidos      =   $_POST["txt_apellidos"];
$var_email          =   $_POST["txt_email"];
$var_clave        =   $_POST["txt_clave"];


//incorporamos la clase Cliente
include("../../clases/usuario.class.php");
//creamos objeto de la clase
$obj_usuario = new usuario();
//invocamos el metodo agregar cliente
$var_resultado = $obj_usuario->agregarUsuario($var_usuario,$var_nombres,$var_apellidos,$var_email,$var_clave);
if($var_resultado==1){
  Header("Location:index.php");
}else{
  Header("Location:agregar.php");
}


?>