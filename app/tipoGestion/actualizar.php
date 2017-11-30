<?php
ini_set("display_errors", 1);
//activamos la sesion
session_start();

//capturamos los datos desde la url
$var_id_tipo_gestion    = $_GET["id_tipo_gestion"];
$var_nombre             = $_GET["nombre"];
?>


<html>
<head>
<title>Actualizar</title>
  <script src="../../js/jquery-3.2.1.min.js"></script>
  <script src="../../semantic/semantic.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
  <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
</head>

<body> 
<?php include("../../plantillas/encabezado.inc.php");?>
<div class="ui segment">
<form name="frm_actualizar" action="actualizar-dml.php" method="post" class="ui form">
<div class="ui grid centered">
<div class="ui segment">
<h3 class="ui block header">Actualizar Tipo Gestion</h3>
<table class="ui collapsing table" class="center aligned">
 <thead>
      <th>ID TIPO GESTIÓN</th>
        <th>NOMBRE</th>
 </thead>       
 <tbody>
<tr>
<!--llenamos las cajas de texto con los datos obtenidos de la tabla-->
<td><div class="ui disabled input"><input type="text" name="txt_id_tipo_gestion" value="<?php echo $var_id_tipo_gestion;?>"></div></td>
<td><div class="field"><input type="text" name="txt_nombre" value="<?php echo $var_nombre;?>"></td>
</tr>

<tr>
      <td><button class="ui primary basic button"><a href="../crm.php">Atrás <i class="reply all icon"></i></button></td> 
      <td><button class="ui primary basic button">Guardar Cambios</button><div class="ui error message"></div></td>
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
</body>

</html>