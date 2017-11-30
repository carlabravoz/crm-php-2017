<?php
//activamos la sesion
session_start();
?>

<html>
<head>
<title>Agregar usuario</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
</head>
<body>
<?php include("../../plantillas/encabezado.inc.php");?>
    
    <div class="ui segment">
    <form name ="frm_agregar_usuario" action="agregar-dml.php" method="post" class="ui form">
        
    <div class="ui grid centered">
    <div class="ui segment">
         
        <h3 class="ui block header">AGREGAR USUARIO<i class="add circle icon"></i></h3> 
       
        <table class="collapsing table" class="center aligned">
            <thead>
                <th>RUT USUARIO</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>EMAIL</th>
                <th>CLAVE</th>
               
            <thead>  
            
            <tbody>
                <tr>
                 <td><div class="field"><div class="ui mini input"><input type="text" name="txt_rut_usuario"></div></td>
                 <td><div class="field"><div class="ui mini input"><input type="text" name="txt_nombres"></div></td>
                 <td><div class="field"><div class="ui mini input"><input type="text" name="txt_apellidos"></div></td>
                 <td><div class="field"><div class="ui mini input"><input type="text" name="txt_email"></div></td>
                 <td><div class="field"><div class="ui mini input"><input type="text" name="txt_clave"></div></td>


                 <tr>
                <td><button class="ui primary basic button"><a href="../crm.php">Atrás <i class="reply all icon"></i></button></td> 
                 <td><button class="ui positive basic button">Guardar <i class="checkmark icon"></i></button><div class="ui error message"></td>
                </tr>
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
        txt_rut_cliente: {
            identifier: 'txt_rut_cliente',
            rules:[
            {
                type:'empty',
                prompt:'Ingrese rut valido'
            }
            ]
        },
        txt_nombres: {
            identifier: 'txt_nombres',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese nombre'
            }
            ]
            },
            txt_apellidos: {
            identifier: 'txt_apellidos',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese un apellido al menos'
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
}
)
;

</script>
<footer>
<?php include("../../plantillas/pie-pagina.inc.php");?>
</footer>
</body>
</html>