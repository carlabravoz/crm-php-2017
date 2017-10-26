<?php
ini_set("display_errors",1);
//incluimos la clase cliente
include("../../clases/cliente.class.php");
//creamos el objeto de la clase
$obj_cliente = new cliente();
//obtenemos y almacenamos los datos de clientes en un variable
$arrayCliente=$obj_cliente->obtenerClientes();
//obtenemos la cantidad de clientes
$arrayCantidadClientes=count($arrayCliente);

?>


<html>
    <head>
        <title>Listado de Clientes</title>
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../semantic/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
        <link rel="stylesheet" type="text/css" href="css/estilos.css" >
    </head>
        <body>

        <form class="ui form " name="frm_listado">
        
        <div class="ui segment">
        <h3 class="ui block header">LISTA DE CLIENTES<i class="list layout icon"></i></h3>  
        
        <img class="ui avatar image" src="../../img/usuarioRegistrado.jpg">
        <span><?php echo "Se han encontrado $arrayCantidadClientes clientes registrados"; ?></span>
        
       <table  style="margin: 0 auto;" class="ui celled table">
       <thead>
       <tr>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rut Cliente</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombres</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellidos</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Celular</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fono Fijo</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha Actualizacón</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opciones</font></font></th>
        
        </tr>
       <thead>
        
        <?php
        //inicializamos en 0 la variable que recorrera el arreglo
        $i=0;
        while($i<$arrayCantidadClientes){

        ?>
        <tr>
        <td> <?php echo $arrayCliente[$i][0];?></td>
        <td> <?php echo $arrayCliente[$i][1];?></td>
        <td> <?php echo $arrayCliente[$i][2];?></td>
        <td> <?php echo $arrayCliente[$i][3];?></td>
        <td> <?php echo $arrayCliente[$i][4];?></td>
        <td> <?php echo $arrayCliente[$i][5];?></td>
        <td> <?php echo $arrayCliente[$i][6];?></td>

        <!--enviamos variables por url-->
       <td><button class="ui negative basic button"><a href="eliminar-dml.php?rut_cliente=<?php echo $arrayCliente[$i][0]?>">eliminar </a><i class="remove icon"></i></button>
       <button class="ui primary basic button"><a href="actualizar.php?rut_cliente=<?php echo $arrayCliente[$i][0]?>&nombres=<?php echo $arrayCliente[$i][1]?>&apellidos=<?php echo $arrayCliente[$i][2]?>&email=<?php echo $arrayCliente[$i][3]?>&celular=<?php echo $arrayCliente[$i][4]?>&fono_fijo=<?php echo $arrayCliente[$i][5];?>">actualizar </a><i class="refresh icon"></i></button></td>
       
        <?php
        $i++;
        };?>

        </tr>  

        <tr>
        <!--botton para redireccionar al formulario para agregar cliente-->
          <td><button class="ui primary basic button"><a href="../crm.php">Atrás <i class="reply all icon"></i></button></td> 
        <td><button class="ui primary basic button"><a href="agregar.php">Agregar Cliente </a><i class="add user icon"></i></td>
        </tr>    
    </table>

           

        </body>

</html>