<?php
//verificamos el valor de la variable ses_validado
$_SESSION["ses_validado"];

if(!isset($_SESSION["ses_validado"])){

   header("Location:http://192.168.40.135/crm");
}
?>
<div class="ui horizontal segments">
<div class="ui segment">
<div id="cnt_encabezado"></div>
<td><img class="ui small image" src="/crm/img/inacap.jpg"></td>
</div>

<div class="ui segment">
        <div class="right aligned" id="ctn_nombre_usuario"><h3>Bienvenido </h3> <?php echo  $_SESSION["ses_nombres_usuario"] ?><?php echo $_SESSION["ses_apellidos_usuario"] ;?></div>
</div>

<div class="ui segment">        
    <div id="cnt_cerrar_sesion"> <a href="/crm/cerrar-sesion.php">cerrar sesión</a></div>
</div>
   
 </div>   


