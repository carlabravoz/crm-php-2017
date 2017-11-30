<?php
//activamos la sesion
session_start();
?>

<html>
<head>
<title>Agregar Tipo Gestion</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
</head>
<body>
    <?php include("../../plantillas/encabezado.inc.php");?>
    <div class="ui segment">
    <form name ="frm_agregar_tipo_gestion" action="agregar-dml.php" method="post" class="ui form">
    <div class="ui grid centered">
    <div class="ui segment">
       <h3 class="ui block header">AGREGAR TIPO GESTIÓN<i class="add circle icon"></i></h3> 
    <table >
        <thead>
        <th>Nombre tipo gestión</th>
             <td><div class="field"><input type="text" name="txt_nombre_tipo_gestion"></div></td>
         </tr>
        
        <tr>
           <td><button class="ui positive basic button">Guardar <i class="checkmark icon"></i></button><div class="ui error message"></td>
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