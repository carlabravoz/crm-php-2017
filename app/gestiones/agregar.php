<?php
ini_set("display_errors", 1);
//activamos la sesion
session_start();
//incluimos clase tipo gestion
include("../../clases/tipoGestion.class.php");
//incluimos clase resultado gestion
include("../../clases/resultadoGestion.class.php");
//incluimos clase cliente
include("../../clases/cliente.class.php");
//creamos objeto de la clase tipo gestion
$obj_tipo_gestion =  new tipoGestion();
//creamos objeto de la clase resultado gestion
$obj_resultado_gestion =  new resultadoGestion();
//creamos objeto de la clase cliente


//mediante el objeto invocamos un metodo para obtener todos los tipos de gestion
$arrayTipoGestion = $obj_tipo_gestion->obtenerTipoGestion();
count($arrayTipoGestion);
$cantidadTipoGestion = count($arrayTipoGestion);
//mediante el objeto invocamos un metodo para obtener todos los tipos de gestion
$arrayResultadoGestion = $obj_resultado_gestion->obtenerResultadoGestion();
count($arrayResultadoGestion);
$cantidadResultadoGestion = count($arrayResultadoGestion);
?>
<html>
<head>
<title>Agregar gestion</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<script src="../../js/load_content.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
</head>
<body>
<?php include("../../plantillas/encabezado.inc.php");?>
<tr>
    
<div class="ui segment">
    <div class="ui grid centered">
     <form name ="frm_agregar_gestion" action="agregar-dml.php" method="post" class="ui form">
  
     <div class="ui segment">
     <h3 class="ui block header">AGREGAR GESTION<i class="add circle icon"></i></h3>
   <table>
            <thead>
                <th>RUT CLIENTE</th>
                <th>TIPO GESTIÓN</th>
                <th>RESULTADO</th>
                <th>COMENTARIOS</th>
            </thead>    
      
            <tbody>
              <tr>
               <td>
               <div class="field"><div class="ui mini input"><input id="txt_rut_cliente" type="text" name="txt_rut_cliente" onblur="buscarNombre();"> <div id="cnt_nombre_cliente"></div></div>
                </td>

                <td>
                <select name="sel_tipo_gestion">
                <?php
                $i=0;
                while($i < $cantidadTipoGestion){
                ?>

                <option value="<?php echo $arrayTipoGestion [$i][0];?>"><?php echo utf8_encode($arrayTipoGestion [$i][1]);?></option>
                <?php
                $i++;
                }?>
                </select>
                </td>

                <td>
                 <select name="sel_resultado_gestion">
                <?php
                $i=0;
                while($i < $cantidadResultadoGestion){
                ?>

                <option value="<?php echo $arrayResultadoGestion [$i][0];?>"><?php echo utf8_encode($arrayResultadoGestion [$i][1]);?></option>
                <?php
                $i++;
                }?>
                </select>

                </td>
               <td><div class="field"><textarea name="txt_comentarios" rows="2"></textarea><td></div>
              </tr> 

              <tr>
                  <td><button class="ui primary basic button"><a href="../crm.php">Atrás <i class="reply all icon"></i></button></td> 
                <td><button class="ui positive basic button">Guardar <i class="checkmark icon"></i></button><div class="ui error message"></td>
              </tr>
            </tbody>
            </table>
                
    </div>
    </div>
</div>
   
    </form> 
   
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
                prompt:'introduce rut del usuario'
            }
            ]
        },
        txt_tipo_gestion: {
            identifier: 'txt_tipo_gestion',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese tipo de gestión'
            
            }
            ]
        },
            txt_resultado_gestion: {
            identifier: 'txt_resultado_gestion',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese tipo resultado de gestión'
            }
            ]
            },
            txt_comentarios: {
            identifier: 'txt_comentarios',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese algún comentario'
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
