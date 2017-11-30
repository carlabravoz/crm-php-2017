<?php
ini_set("display_errors", 1);
session_start();
//capturamos datos mediante metodo GET
$var_id_gestion          = $_GET["id_gestion"];
$var_rut_usuario         = $_GET["rut_usuario"];
$var_rut_cliente         = $_GET["rut_cliente"];
$var_tipo_gestion        = $_GET["tipo_gestion"];
$var_resultado_gestion   = $_GET["resultado_gestion"];
$var_comentarios         = $_GET["comentarios"];

?>

<html>
<head>
<title>actualizar</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
<link rel="stylesheet" type="text/css" href="../../css/estilos.css">

</head>

<body>
    <?php include("../../plantillas/encabezado.inc.php");?>
<!--<div class="ui disabled input">-->
    <div class="ui segment">
<form name="frm_actualizar" action="actualizar-dml.php" method="post" class="ui form">
<div class="ui grid centered">
<div class="ui segment">
<h3 class="ui block header">ACTUALIZAR GESTION<i class="list layout icon"></i></h3>  
<table class="ui collapsing table" class="center aligned">
    <thead>
        <th>ID Gestión</th>
          <th>Rut Usuario</th>
            <th>Rut Cliente</th>
              <th>Tipo Gestión</th>
                <th>Resultado Gestión</th>
                  <th>Comentarios Gestión</th>
    </thead>

    <tbody>
<tr>
<!--llenamos las cajas de texto con los datos obtenidos de la tabla-->
<td><div class="ui disabled input"><input type="text" name="txt_id_gestion" value="<?php echo $var_id_gestion;?>"></div></td>
<td><div class="ui disabled input"><input type="text" name="txt_rut_usuario" value="<?php echo $var_rut_usuario;?>"></div></td>
<td><div class="ui disabled input"><input type="text" name="txt_rut_cliente" value="<?php echo $var_rut_cliente;?>"></div></td>
<td><div class="field"><input type="text" name="txt_tipo_gestion" value="<?php echo $var_tipo_gestion;?>"></td>
<td><div class="field"><input type="text" name="txt_resultado_gestion" value="<?php echo $var_resultado_gestion;?>"></td>
<td><div class="field"><input type="text" name="txt_comentarios" value="<?php echo $var_comentarios;?>"></td>
</tr>

<tr>
    <td><button class="ui primary basic button"><a href="../crm.php">Atrás <i class="reply all icon"></i></button></td> 
<td><button class="ui right floated button">Guardar Cambios</button><div class="ui error message"></div></td>
</tr>

</tbody>
</table>
</form>
</div>
</div>
</div>
<footer>
   <?php include("../../plantillas/pie-pagina.inc.php");?>
        </footer>
        
<script language="javascript">
$('.ui.form')
.form({
    on: 'blur',
    fields:{
        txt_tipo_gestion: {
            identifier: 'txt_tipo_gestion',
            rules:[
            {
                type:'empty',
                prompt:'Ingrese tipo gestión'
            }
            ]
        },
        txt_resultado_gestion: {
            identifier: 'txt_resultado_gestion',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese resultado gestión'
            }
            ]
            },
            txt_comentarios: {
            identifier: 'txt_comentarios',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese algun comentario'
            }
            ]
        },
    }
})
;

</script>
</body>

</html>