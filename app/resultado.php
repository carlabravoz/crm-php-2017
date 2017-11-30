 <?php include("../plantillas/encabezado.inc.php");?>
<?php
ini_set("display_error",1);
//capturamos la operacion
$var_operacion = $_GET["op"];
//incluimos el archivo resultado.inc.php
include("../plantillas/resultado.inc.php");
?>
<!-- mostramos el titulo -->
<h1><?php echo $var_titulo?></h1><br>
<a  href="<?php echo $var_destino ?>"><img src="<?php echo $var_url_imagen ?>"></img></a>
<h4><?php echo $var_mensaje?></h4>
<!-- -->
<a href="<?php echo $var_destino ?> "><?php echo $var_hipervinculo?></a>

