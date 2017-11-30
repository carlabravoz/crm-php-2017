<?php
ini_set("display_errors",1);
//activamos la sesion
session_start();
//incluimos la clase cliente
include("../../clases/usuario.class.php");
//creamos el objeto de la clase
$obj_usuario = new usuario();
//obtenemos y almacenamos los datos de clientes en un variable
//$arrayCliente=$obj_cliente->obtenerClientes();
$arrayUsuario=$obj_usuario->mostrarUsuario();
//obtenemos la cantidad de clientes
$arrayCantidadUsuario=count($arrayUsuario);

?>


<html>
    <head>
        <title>Listado de Usuarios</title>
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../semantic/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
        <link rel="stylesheet" type="text/css" href="css/estilos.css" >
    </head>
        <body>
         <?php include("../../plantillas/encabezado.inc.php");?>
         <div class="ui segment">
        <form class="ui form " name="frm_listado">
        
        <div class="ui segment">
        <h3 class="ui block header">LISTA DE USUARIOS<i class="list layout icon"></i></h3>  
        
        <img class="ui avatar image" src="../../img/usuarioRegistrado.jpg">
        <span><?php echo "Se han encontrado $arrayCantidadUsuario usuarios registrados"; ?></span>
        
       <table  style="margin: 0 auto;" class="ui celled table">
       <thead>
       <tr>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rut usuario</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombres</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellidos</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clave</font></font></th>     
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opciones</font></font></th>
        
        </tr>
       <thead>
        
        <?php
        //inicializamos en 0 la variable que recorrera el arreglo
        $i=0;
        while($i<$arrayCantidadUsuario){

        ?>
        <tr>
        <td> <?php echo $arrayUsuario[$i][0];?></td>
        <td> <?php echo $arrayUsuario[$i][1];?></td>
        <td> <?php echo $arrayUsuario[$i][2];?></td>
        <td> <?php echo $arrayUsuario[$i][3];?></td>
        <td> <?php echo $arrayUsuario[$i][4];?></td>
        

        <!--enviamos variables por url-->
       <td><button class="ui negative basic button"><a href="eliminar-dml.php?rut_usuario=<?php echo $arrayUsuario[$i][0]?>">eliminar </a><i class="remove icon"></i></button>
       <button class="ui primary basic button"><a href="actualizar.php?rut_usuario=<?php echo $arrayUsuario[$i][0]?>&nombres=<?php echo $arrayUsuario[$i][1]?>&apellidos=<?php echo $arrayUsuario[$i][2]?>&email=<?php echo $arrayUsuario[$i][3]?>&clave=<?php echo $arrayUsuario[$i][4];?>">actualizar </a><i class="refresh icon"></i></button></td>
       
        <?php
        $i++;
        };?>

        </tr>  

        <tr>
        <!--botton para redireccionar al formulario para agregar cliente-->
          <td><button class="ui primary basic button"><a href="../crm.php">Atrás <i class="reply all icon"></i></button></td> 
        <td><button class="ui primary basic button"><a href="agregar.php">Agregar usuario </a><i class="add user icon"></i></td>
        </tr>    
    </table>
        </div>
        </div>
         </div> 
           
<footer>
<?php include("../../plantillas/pie-pagina.inc.php");?>
</footer>
        </body>

</html>