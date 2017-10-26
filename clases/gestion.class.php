<?php
class gestion{

    function agregarGestion($usuario,$cliente,$tipo_gestion,$resultado_gestion,$comentarios){
    date_default_timezone_set('America/Santiago');    
    //almacenamos datos en variables para poder ejecutar la funcion
    $var_usuario            =   $usuario;
    $var_cliente            =   $cliente;
    $var_tipo_gestion       =   $tipo_gestion;
    $var_resultado_gestion  =   $resultado_gestion;
    $var_comentarios        =   $comentarios;
    $var_fecha_actualizacion=   Date("Y-m-d H:i:s");

    //incluimos la clase de conexion
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    //creamos query para la insercion de datos 
    $insertar="INSERT INTO gestion(rut_usuario,rut_cliente,id_tipo_gestion,id_resultado_gestion,comentarios,fecha_actualizacion)
    VALUES('$var_usuario','$var_cliente','$var_tipo_gestion','$var_resultado_gestion','$var_comentarios','$var_fecha_actualizacion') ";
    
    if($objetoMYSQL->query($insertar)==TRUE){
    return 1;

    }else{
        return 0;
    }
    $objetoMYSQL->close();
       }

    function obtenerGestiones(){
    //incluimos la clase de conexion
     include("/var/www/html/crm/conexiones/mysql.inc.php");
    //creamos query para obtener todos los datos de la tabla gestion
    $consultaSql    = "SELECT * FROM gestion";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                $i=0;
                while($fila = $resultado->fetch_assoc()){
                    $arreglo[$i]=array($fila['id_gestion'],$fila['rut_usuario'],$fila['rut_cliente'],$fila['id_tipo_gestion'],$fila['id_resultado_gestion'],$fila['comentarios'],$fila['fecha_actualizacion']);
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
    function eliminarGestion($id_gestion){
    $var_id_gestion = $id_gestion;
    //incluimos la clase de conexion
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    //creamos query para la eliminacion de gestion mediante su id
    $eliminar  = "DELETE FROM gestion WHERE id_gestion='$var_id_gestion'";

           if($objetoMYSQL->query($eliminar)==TRUE){
              return 1;

            }else{
              return 0;
              echo $objetoMYSQL->error;
    }
    $objetoMYSQL->close();
       }  
         
        function actualizarGestion($id_gestion,$rut_usuario,$rut_cliente,$tipo_gestion,$resultado_gestion,$comentarios){
            $var_id_gestion             =$id_gestion;
            $var_resultado_gestion      =$resultado_gestion;
            $var_tipo_gestion           =$tipo_gestion;
            $var_comentarios            =$comentarios;
            //incorporamos la clase de conexion
            include("/var/www/html/crm/conexiones/mysql.inc.php");
            //creamos query para la actualizacion de la gestion
            $actualizar    = "UPDATE gestion set id_resultado_gestion ='$var_resultado_gestion'
            ,id_tipo_gestion='$var_tipo_gestion',comentarios ='$var_comentarios' WHERE id_gestion='$var_id_gestion'";  
            if($objetoMYSQL->query($actualizar)==TRUE){
                return 1;
            
                }else{
                   echo $objetoMYSQL->error; //return 0;
                  
                
                }
        }
}


?>