<?php
	// datos para la conexion a mysql
	$hostname_conec = "localhost";
	$database_conec = "BD_NORMAL";
	$username_conec = "root";
	$password_conec = "root";
	$link = mysql_connect($hostname_conec, $username_conec, $password_conec) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_conec,$link);
	mysql_query ("SET NAMES 'utf8'"); 	
?>