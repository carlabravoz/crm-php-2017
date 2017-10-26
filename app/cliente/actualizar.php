<?php
ini_set("display_errors", 1);
//capturamos los datos desde la url
$var_rut_cliente    = $_GET["rut_cliente"];
$var_nombres        = $_GET["nombres"];
$var_apellidos      = $_GET["apellidos"];
$var_email          = $_GET["email"];
$var_celular        = $_GET["celular"];
$var_fono_fijo      = $_GET["fono_fijo"];

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

<form name="frm_actualizar" action="actualizar-dml.php" method="post" class="ui form">
<div class="ui grid centered">
<div class="ui segment">
<h3 class="ui block header">Actualizar Cliente</h3>
<table class="ui collapsing table" class="center aligned">
   <thead>
      <th>RUT CLIENTE</th>
        <th>NOMBRES</th>
          <th>APELLIDOS</th>
            <th>EMAIL</th>
              <th>CELULAR</th>
                <th>FONO FIJO</th>
   </thead>

<tbody>
<tr>
<!--llenamos las cajas de texto con los datos obtenidos de la tabla-->
<td><div class="ui disabled input"><input type="text" name="hdn_rut_cliente" value="<?php echo $var_rut_cliente;?>"></div></td>
<td><div class="field"><input type="text" name="txt_nombres" value="<?php echo $var_nombres;?>"></td>
<td><div class="field"><input type="text" name="txt_apellidos" value="<?php echo $var_apellidos;?>"></td>
<td><div class="field"><input type="text" name="txt_email" value="<?php echo $var_email;?>"></td>
<td><div class="field"><input type="text" name="txt_celular" value="<?php echo $var_celular;?>"></td>
<td><div class="field"><input type="text" name="txt_fono_fijo" value="<?php echo $var_fono_fijo;?>"></td>
</tr>

<tr>
      <td><button class="ui primary basic button"><a href="../crm.php">Atrás <i class="reply all icon"></i></button></td> 
<td><button class="ui primary basic button">Guardar Cambios</button><div class="ui error message"></div></td>
</tr>
</tbody>
</table>

</form>

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
</body>
</html>