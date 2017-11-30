<?php

class usuario{

function mostrarUsuario(){
    
        //incorporamos la clase de coneexion
        include("/var/www/html/crm/conexiones/mysql.inc.php");
        //creamos query que nos permitira obtener toso los datos de la tabla clientes
        $consultaSql    = "SELECT * FROM usuario ";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                $i=0;
                while($fila = $resultado->fetch_assoc()){
                    $arreglo[$i]=array($fila['rut_usuario'],$fila['nombres'],$fila['apellidos'],$fila['email'],$fila['clave']);
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
    function obtenerDatosUsuario($email){
        $var_email=$email;
        include("/var/www/html/crm/conexiones/mysql.inc.php");
        $consultaSql    = "select rut_usuario,nombres,apellidos from usuario where email='$var_email'";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                $i=0;
                while($fila = $resultado->fetch_assoc()){
                    $arreglo[$i]=array($fila['rut_usuario'],$fila['nombres'],$fila['apellidos']);
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

    function agregarUsuario($usuario,$nombres,$apellidos,$email,$clave){
    date_default_timezone_set('America/Santiago');   
    $var_rut_usuario              = $cliente;
    $var_nombres                = $nombres;
    $var_apellidos              = $apellidos;
    $var_email                  = $email;
    $var_clave                = $clave;
    $var_fecha_actualizacion    = Date("Y-m-d H:i:s");
    //incorporamos la clase de conexion
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    //creamos query que nos permitira la insercion de datos 
    $insertar="INSERT INTO usuario(rut_usuario,nombres,apellidos,email,clave,fecha_actualizacion)
    VALUES('$var_rut_usuario','$var_nombres','$var_apellidos','$var_email','$var_clave','$var_fecha_actualizacion') ";
    
    if($objetoMYSQL->query($insertar)==TRUE){
    return 1;

    }else{
        return 0;
    }
    $objetoMYSQL->close();
}

    function eliminarUsuario($rut_usuario){
    $var_rut_usuario = $rut_usuario;
    //incorporamos la clase de conexion
   include("/var/www/html/crm/conexiones/mysql.inc.php");
   //creamos query que nos permitira la eliminacion del cliente mediante su id
    $eliminar  = "DELETE FROM usuario WHERE rut_usuario='$var_rut_usuario'";
    if($objetoMYSQL->query($eliminar)==TRUE){
    return 1;

    }else{
       return 0;
        // echo $objetoMYSQL->error;
    }
    $objetoMYSQL->close();
       }  
       
       function actualizarUsuario ($rut_usuario,$nombres,$apellidos,$email,$clave){
           $var_rut_usuario           = $rut_usuario;
           $var_nombre_usuario        = $nombres;
           $var_apellidos_usuario     = $apellidos;
           $var_email                 = $email;
           $var_clave                 = $clave;
          
           //incorporamos la clase de conexion
      include("/var/www/html/crm/conexiones/mysql.inc.php");
      //creamos query para actualizar datos 
      $actualizar    = "UPDATE usuario SET nombres = '$var_nombre_usuario',apellidos='$var_apellidos_usuario',email='$var_email',clave='$var_clave'
       WHERE rut_usuario='$var_rut_usuario'";
    if($objetoMYSQL->query($actualizar)==TRUE){
        return 1;

    }else{
       // return 0;
      echo $objetoMYSQL->error;
    
    }
     $objetoMYSQL->close();
       }
}       

?>