<?php 

include('../conexion/conexion.php');



$actualizar=base64_decode($_GET['SKYNET']);
$ides= base64_decode($_GET['MATRIX']);

if($actualizar="Registro" && $ides<>""){
	$myper="call Procedure_R0003('$ides');";
	mysql_query($myper) or die('error. '.mysql_error());

	echo" <script>
	alert('El Registro a sido Eliminado');
	window.location.href='registros.php';
	</script>";  
	
	}
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