<?php
session_start();

ini_set("display_errors",1);

//Capturamos datos del formulario recibidos mediante post
$var_cliente        =   $_POST["txt_rut_cliente"];  
$var_nombres        =   $_POST["txt_nombres"];
$var_apellidos      =   $_POST["txt_apellidos"];
$var_email          =   $_POST["txt_email"];
$var_celular        =   $_POST["txt_celular"];
$var_fono_fijo      =   $_POST["txt_fono_fijo"];

//incorporamos la clase Cliente
include("../../clases/cliente.class.php");
//creamos objeto de la clase
$obj_cliente = new cliente();
//invocamos el metodo agregar cliente
$var_resultado = $obj_cliente->agregarCliente($var_cliente,$var_nombres,$var_apellidos,$var_email,$var_celular,$var_fono_fijo);
if($var_resultado==1){
  Header("Location:index.php");
}else{
  Header("Location:agregar.php");
}


?>