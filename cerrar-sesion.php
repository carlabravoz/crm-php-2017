<?php

session_start();
//eliminamos la variable sesion
unset($_SESSION["ses_validado"]);
//mensaje para el usuario
echo "se ha cerrado la sesion";
?>