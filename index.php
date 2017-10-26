<html>
<head>
<title>LOGIN</title>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css" >
<link rel="stylesheet" type="text/css" href="css/estilos.css">

 
</head>
<body>

<form class="ui form" name="login"action="login.php" method="post" >
    <div class="ui grid centered">
    <div class="ui segment">
 
    <h3 class="ui block header">Ingrese sus datos   <i class="user icon"></i></h3> 

    <tr>
    <td><div class="field"><label>EMAIL USUARIO</label></td>
    <td><div class="ui large input"><input  id="email" type="text" name="email" placeholder="Ingrese email"></div></td>
    </tr>

    <tr>
    <td><div class="field"><label>CONTRASEÑA</label></td>
    <td><div class="ui large input"><input id="contraseña" type="password" name="contraseña" placeholder="Ingrese contraseña"></div></td>
    </tr>


<tr><td><button class="ui blue submit button">Ingresar</button>
<div class="ui error message"></div></td></tr>
</div>



</form>
<script language="javascript">
$('.ui.form').form({
    fields:{
        usuario: {
            identifier: 'email',
            rules:[
            {
                type:'empty',
                prompt:'Ingrese su email'
            }
            ]
        },
        contraseña: {
            identifier: 'contraseña',
            rules: [
            {
                type : 'empty',
                prompt : 'Ingrese su contraseña'
            },
            ]
        }
    }
}

)
;
</script>
</body>
</html>