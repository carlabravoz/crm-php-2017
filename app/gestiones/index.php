
<?php
session_start();
ini_set("display_errors",1);
//incorporamos la clase gestion
include("../../clases/gestion.class.php");
//creamos el objeto de la clase gestion
$obj_gestion = new gestion();
//obtenemos y almacenamos los datos de las gestiones en un variable
$arrayGestiones=$obj_gestion->obtenerGestiones();
//obtenemos la cantidad de gestiones
$arrayCantidadGestiones=count($arrayGestiones);

?>


<html>
    <head>
        <title>Listado de Gestiones</title>
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../semantic/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
     <!--   <link rel="stylesheet" type="text/css" href="../../css/estilos.css" > -->
    </head>
        <body>
        <?php include("../../plantillas/encabezado.inc.php");?>
       
        <hr>
        <div class="ui segment">
        <form class="ui form " name="frm_listado" >
        <div class="ui segment">
        <h3 class="ui block header">LISTA DE GESTIONES<i class=></i></h3> 
        <img class="ui avatar image" src="../../img/gestiones.jpg">
        <span><?php echo "se han encontrado $arrayCantidadGestiones gestiones realizadas";?></span>

       <table  class="ui celled table">
       <thead>
       <tr>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID Gestión</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rut Usuario</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rut Cliente</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tipo Gestion</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Resultado Gestión</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comentarios</font></font></th>
         <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opciones</font></font></th>
        
        </tr>
       <thead>
        
        <?php
             //inicializamos en 0 la variable que recorrera el arreglo
        $i=0;
        while($i<$arrayCantidadGestiones){

        
        ?>
        <tr>
        <td> <?php echo $arrayGestiones[$i][0];?></td>
        <td> <?php echo $arrayGestiones[$i][1];?></td>
        <td> <?php echo $arrayGestiones[$i][2];?></td>
        <td> <?php echo $arrayGestiones[$i][3];?></td>
        <td> <?php echo $arrayGestiones[$i][4];?></td>
        <td> <?php echo $arrayGestiones[$i][5];?></td>
       
       

        <!--enviamos variable por url-->
        <td><button class="ui negative basic button"><a href="eliminar-dml.php?id_gestion=<?php echo $arrayGestiones[$i][0]?>">eliminar</a><i class="remove icon"></i></button>
        <button class="ui primary basic button"><a  href="actualizar.php?id_gestion=<?php echo $arrayGestiones[$i][0] ;?>&rut_usuario=<?php echo $arrayGestiones[$i][1]  ;?>&rut_cliente=<?php echo $arrayGestiones[$i][2]  ;?>&tipo_gestion=<?php echo $arrayGestiones[$i][3]  ;?>&resultado_gestion=<?php echo $arrayGestiones[$i][4]  ;?>&comentarios=<?php echo $arrayGestiones[$i][5]  ;?>">Actualizar <i class="refresh icon"></i></a></button></td>
        
        
        <?php
        $i++;
        };?>

        </tr>


        <tr>
         <!--botton para redireccionar al formulario para agregar gestion-->
           <td><button class="ui primary basic button"><a href="../crm.php">Atrás <i class="reply all icon"></i></button></td> 
            <td><button class="ui primary basic button"><a href="agregar.php">Agregar gestion </a><i class="upload icon"></i></td>
        </tr>
        
    
        </table> 
        </form> 
        </div>
        </div>
        </div>
        <footer>
   <?php include("../../plantillas/pie-pagina.inc.php");?>
        </footer>
        </body>
        </html>