
<?php
session_start();
?>

<html>
<head>
<title>Opciones</title>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../semantic/semantic.min.css" >
</head>
<body>

<div class="ui segment">
<h3 class="ui block header">Selecione Opcion  <i class="options icon"></i></h3> 
<img class="ui avatar image" src="../img/user.jpg">
<span><?php echo "Bienvenido ".$_SESSION["ses_nombres_usuario"]." ".$_SESSION["ses_apellidos_usuario"];
 ?></span>

<div class="ui horizontal segments">
  <div class="ui segment">
    <div class="ui vertical menu">
  <div class="item">
    <div class="header">Clientes</div>
    <div class="menu">
      <a class="item" href="cliente/agregar.php">Agregar <i class="add user icon"></i></a>
      <a class="item" href="cliente/index.php">Listado <i class="list layout icon"></i></a>
      
    </div>
  </div>
  <div class="item">
    <div class="header">Gestiones</div>
    <div class="menu">
     <a class="item" href="gestiones/agregar.php">Agregar <i class="add circle icon"></i></a>
      <a class="item" href="gestiones/index.php">Listado <i class="list layout icon"></i></a>
      
    </div>
  </div>
  <div class="item">
    <div class="header">Tipo Gestion</div>
    <div class="menu">
      <a class="item" href="tipoGestion/agregar.php">Agregar <i class="add circle icon"></i></a>
      <a class="item" href="tipoGestion/index.php">Listado <i class="list layout icon"></i></a>
     
    </div>
  </div>
  
  <div class="item">
    <div class="header">Usuarios</div>
    <div class="menu">
      <a class="item" href="usuario/agregar.php">Agregar <i class="add circle icon"></i></a>
      <a class="item" href="usuario/index.php">Listado <i class="list layout icon"></i></a>
     
    </div>
  </div>
</div>
  </div>
  <div class="ui segment">
  <div class="ui grid centered">
    <img class="disabled fluid ui image" src="../img/nube.jpg">
  </div>
 </div>
</body>

</html>    
