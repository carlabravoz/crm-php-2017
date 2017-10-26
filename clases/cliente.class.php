<?php
class cliente{

    function agregarCliente($cliente,$nombres,$apellidos,$email,$celular,$fono_fijo){
    date_default_timezone_set('America/Santiago');   
    $var_cliente                = $cliente;
    $var_nombres                = $nombres;
    $var_apellidos              = $apellidos;
    $var_email                  = $email;
    $var_celular                = $celular;
    $var_fono_fijo              = $fono_fijo;
    $var_fecha_actualizacion    = Date("Y-m-d H:i:s");
    //incorporamos la clase de conexion
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    //creamos query que nos permitira la insercion de datos 
    $insertar="INSERT INTO cliente(rut_cliente,nombres,apellidos,email,celular,fono_fijo,fecha_actualizacion)
    VALUES('$var_cliente','$var_nombres','$var_apellidos','$var_email','$var_celular','$var_fono_fijo','$var_fecha_actualizacion') ";
    
    if($objetoMYSQL->query($insertar)==TRUE){
    return 1;

    }else{
        return 0;
    }
    $objetoMYSQL->close();
}
     function obtenerClientes(){
        //incorporamos la clase de coneexion
        include("/var/www/html/crm/conexiones/mysql.inc.php");
        //creamos query que nos permitira obtener toso los datos de la tabla clientes
        $consultaSql    = "SELECT * FROM cliente";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                $i=0;
                while($fila = $resultado->fetch_assoc()){
                    $arreglo[$i]=array($fila['rut_cliente'],$fila['nombres'],$fila['apellidos'],$fila['email'],$fila['celular'],$fila['fono_fijo'],$fila['fecha_actualizacion']);
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

    function eliminarCliente($rut_cliente){
    $var_rut_cliente = $rut_cliente;
    //incorporamos la clase de conexion
   include("/var/www/html/crm/conexiones/mysql.inc.php");
   //creamos query que nos permitira la eliminacion del cliente mediante su id
    $eliminar  = "DELETE FROM cliente WHERE rut_cliente='$var_rut_cliente'";
    if($objetoMYSQL->query($eliminar)==TRUE){
    return 1;

    }else{
       return 0;
        // echo $objetoMYSQL->error;
    }
    $objetoMYSQL->close();
       }  
       
       function actualizarCliente ($rut_cliente,$nombres,$apellidos,$email,$celular,$fono_fijo){
           $var_rut_cliente           = $rut_cliente;
           $var_nombre_cliente        = $nombres;
           $var_apellidos_cliente     = $apellidos;
           $var_email                 = $email;
           $var_celular               = $celular;
           $var_fono_fijo             = $fono_fijo;
           //incorporamos la clase de conexion
      include("/var/www/html/crm/conexiones/mysql.inc.php");
      //creamos query para actualizar datos 
      $actualizar    = "UPDATE cliente SET nombres = '$var_nombre_cliente',apellidos='$var_apellidos_cliente',email='$var_email',celular='$var_celular',fono_fijo='$var_fono_fijo'
       WHERE rut_cliente='$var_rut_cliente'";
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
