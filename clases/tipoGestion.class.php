<?php

class tipoGestion{
    function agregarTipoGestion($tipo_gestion){
     date_default_timezone_set('America/Santiago');  
     $var_nombre_tipo_gestion = $tipo_gestion;
     $var_fecha_actualizacion    = Date("Y-m-d H:i:s");   

     include("/var/www/html/crm/conexiones/mysql.inc.php");

     $insertar="INSERT INTO tipo_gestion(nombre_tipo_gestion,fecha_actualizacion)
    VALUES('$var_nombre_tipo_gestion','$var_fecha_actualizacion') ";
     if($objetoMYSQL->query($insertar)==TRUE){
    return 1;

    }else{
        return 0;
    }
    $objetoMYSQL->close();
}
function obtenerTipoGestion(){
        
        include("/var/www/html/crm/conexiones/mysql.inc.php");
        $consultaSql    = "SELECT * FROM tipo_gestion";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                $i=0;
                while($fila = $resultado->fetch_assoc()){
                    $arreglo[$i]=array($fila['id_tipo_gestion'],$fila['nombre_tipo_gestion'],$fila['fecha_actualizacion']);
                    $i++;
                }
                return $arreglo;
            }else{
                echo"No se encontrarón datos.";
            }
        }else{
            echo"No fué posible ejecutar la consulta".$objetoMYSQL->error;
        }
        $objetoMYSQL->close();
    }
}
?>