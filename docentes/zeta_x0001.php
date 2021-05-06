<?php
include('../conexion/conexion.php');




	if($planessem<>"" && $planesmat<>"" && $planesid<>"")
	{
		$mycurricula ="call Procedure_PEC0001('$planessem','$planesmat','$planesid');";
	 	mysql_query($myhoradocente) or die('error. '.mysql_error());
			echo" <script>
			alert('El Registro a sido Guardado');
			</script>";
	}else
	
	
	{
		include('../header.php');
		echo'<br/><center><label class="submenu">ERROR ZETA_000X ACCESO RESTRINGIDO</label><br><img src="../img/error.fw.png"></center>';
		include('../footer.php');
		}
		
		
		

?>


