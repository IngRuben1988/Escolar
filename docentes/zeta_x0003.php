<?php 

include('../conexion/conexion.php');

$matricula=$_POST['matricula'];
$usuario=$_POST['usuario'];

//*************logica para eliminar alumnos **********************

 $myalumno="call procedure_X0003('$matricula');";
 mysql_query($myalumno)or die ('error.'.mysql_error());

 //************logica para eliminar Profesores********************

$mydocente="call procedure_D0003('$matricula');";
mysql_query($mydocente)or die ('error.'.mysql_error());

//*************logica para eliminar administrativos***************

$myadministrativo="call procedure_A0003('$matricula');";
mysql_query($myadministrativo)or die ('error.'.mysql_error());

?>