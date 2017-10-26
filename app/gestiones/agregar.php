<html>
<head>
<title>Agregar gestion</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
</head>
<body>
<tr>
    
    <form name ="frm_agregar_gestion" action="agregar-dml.php" method="post" class="ui form">
   <div class="ui grid centered">
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
                <td><div class="field"><div class="ui large input"><input type="text" name="txt_rut_cliente"></div></td>
                <td><div class="field"><div class="ui large input"><input type="text" name="txt_tipo_gestion"></div></td>
                <td><div class="field"><div class="ui large input"><input type="text" name="txt_resultado_gestion"></div></td>
                <td><div class="field"><textarea name="txt_comentarios" rows="2"></textarea><td>
              </tr> 

              <tr>
                  <td><button class="ui primary basic button"><a href="../crm.php">Atrás <i class="reply all icon"></i></button></td> 
                <td><button class="ui positive basic button">Guardar <i class="checkmark icon"></i></button><div class="ui error message"></td>
              </tr>
            </tbody>

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
</body>
</html>