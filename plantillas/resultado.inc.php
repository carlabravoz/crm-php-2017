<?php

switch($var_operacion){
    case 0:
    $var_titulo = "gestion registrada correctamente";
    $var_mensaje = "la gestion ha sido ingresada en la base de datos";
    $var_url_imagen = '../img/ok.png';
    $var_destino = 'gestiones/index.php';
    $var_hipervinculo = "ir a gestiones";

    break;
    case 1:
    $var_titulo = "error al ingresar gestion";
    $var_mensaje = "se ha producido un error al registrar la gestion";
    $var_url_imagen = '../img/error.png';
    $var_destino = 'gestiones/index.php';

    break;
    default: echo "no hay operacion";
}
?>