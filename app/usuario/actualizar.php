<?php
//mostramos los errores
ini_set("display_errors", 1);
//activamos la sesion
session_start();
//capturamos los datos desde la url
$var_rut_usuario    = $_GET["rut_usuario"];
$var_nombres        = $_GET["nombres"];
$var_apellidos      = $_GET["apellidos"];
$var_email          = $_GET["email"];
$var_clave        = $_GET["clave"];


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
<h3 class="ui block header">Actualizar Usuario</h3>
<table class="ui collapsing table" class="center aligned">
   <thead>
      <th>RUT USUARIO</th>
        <th>NOMBRES</th>
          <th>APELLIDOS</th>
            <th>EMAIL</th>
              <th>CLAVE</th>
               
   </thead>

<tbody>
<tr>
<!--llenamos las cajas de texto con los datos obtenidos de la tabla-->
<td><div class="ui disabled input"><input type="text" name="hdn_rut_usuario" value="<?php echo $var_rut_usuario;?>"></div></td>
<td><div class="field"><input type="text" name="txt_nombres" value="<?php echo $var_nombres;?>"></td>
<td><div class="field"><input type="text" name="txt_apellidos" value="<?php echo $var_apellidos;?>"></td>
<td><div class="field"><input type="text" name="txt_email" value="<?php echo $var_email;?>"></td>
<td><div class="field"><input type="text" name="txt_clave" value="<?php echo $var_clave;?>"></td>
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


<!-- validamos las cajas de texto para que no esten vacias median un script-->
<script language="javascript">
$('.ui.form')
.form({
    on: 'blur',
    fields:{
        txt_nombres: {
            identifier: 'txt_nombres',
            rules:[
            {
                type:'empty',
                prompt:'introduce nombre'
            }
            ]
        },
        txt_apellidos: {
            identifier: 'txt_apellidos',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese al menos un apellido'
            
            }
            ]
        },
            txt_email: {
            identifier: 'txt_email',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese email'
            }
            ]
            },
            txt_celular: {
            identifier: 'txt_celular',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese celular'
                }
            ]
            
        },
        txt_fono_fijo: {
            identifier: 'txt_fono_fijo',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese fono fijo'
                }
            ]
            
        }
    }
})
;

</script>
<footer>
<?php include("../../plantillas/pie-pagina.inc.php");?>
</footer>
</body>
</html>