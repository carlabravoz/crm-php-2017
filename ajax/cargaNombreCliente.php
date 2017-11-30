<?php
//mostrar errores
ini_set("display_errors", 1);
//incluimos clase cliente
include("../clases/cliente.class.php");
//creamos objeto de la clase
$obj_cliente =  new cliente();
//invocamos en metodo obtener cliente
//obtener por url
$var_rut = $_GET["p_rut"];
$arrayCliente = $obj_cliente->obtenerClientes($var_rut);
$var_cantidad =count($arrayCliente);
echo count($arrayCliente);
//contamos resultado
if($var_cantidad==1){
    $var_nombre_completo = $arrayCliente[0][1]."".$arrayCliente[0][2];

}else{
    $var_nombre_completo ="no se encontro informacion ingresada";
}
?>

<b><?php echo $var_nombre_completo; ?></b>