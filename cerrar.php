<?php
/* 
 * Cierra la sesión como usuario validado
 */
@session_start(); //inicia sesion (la @ evita los mensajes de error si la session ya está iniciada)
unset($_SESSION['usuarioactual']); //eliminamos la variable con los datos de usuario;
session_write_close(); //nos asegurmos que se guarda y cierra la sesion
header('Location: index.php'); //saltamos a login.php

?>
