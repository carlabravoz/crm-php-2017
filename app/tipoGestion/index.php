<?php
ini_set("display_errors",1);
//activamos la sesion
session_start();
include("../../clases/tipoGestion.class.php");

$obj_tipo_gestion = new tipoGestion();
$arrayTipoGestion=$obj_tipo_gestion->obtenerTipoGestion();
$arrayCantidadTipoGestion=count($arrayTipoGestion);


?>

<html>
    <head>
     
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../semantic/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
    </head>

    <body>
         <?php include("../../plantillas/encabezado.inc.php");?>
    <div class="ui segment">
    <form class="ui form " name="frm_listado">
     <div class="ui segment">
     <h3 class="ui block header">LISTADO TIPO GESTIONES <i class="list layout icon"></i></h3> 
     <img class="ui avatar image" src="../../img/gestiones.jpg">
        <span><?php echo "Se han encontrado $arrayCantidadTipoGestion tipo de gestiones"; ?></span>
        
       <table class="ui celled table">
       <thead>
       <tr>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID Tipo Gestión</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre Tipo Gestión</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha de Registro</font></font></th>
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opciones</font></font></th>
       </tr>
       <thead>
       <?php
        $i=0;
        while($i<$arrayCantidadTipoGestion){

        
        ?>
        <tr>
        <td> <?php echo $arrayTipoGestion[$i][0];?></td>
        <td> <?php echo $arrayTipoGestion[$i][1];?></td>
        <td> <?php echo $arrayTipoGestion[$i][2];?></td>

       <td><button class="ui negative basic button"><a href="eliminar-dml.php?id_tipo_gestion=<?php echo $arrayTipoGestion[$i][0]?>">eliminar</a></button>
       <td><button class="ui primary basic button"><a href="actualizar.php?id_tipo_gestion=<?php echo $arrayTipoGestion[$i][0]?>&nombre=<?php echo $arrayTipoGestion[$i][1];?> ">actualizar</a></button>
       
        <?php
        $i++;
        };?>
        <tr>
         <tr>
        <!--botton para redireccionar al formulario para agregar cliente-->
          <td><button class="ui primary basic button"><a href="../crm.php">Atrás <i class="reply all icon"></i></button></td> 
        <td><button class="ui primary basic button"><a href="agregar.php">Agregar tipo gestión </a><i class="add user icon"></i></td>
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
