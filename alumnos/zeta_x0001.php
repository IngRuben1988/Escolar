<?php include('validaacceso.php');?>
<?php include('../conexion/conexion.php');

$fechahora=new DateTime();
$fechahora->setTimezone(new DateTimeZone('America/Mexico_City'));	
$fechahora->format("Y-m-d H:i:s");

$SERVICIO=$_POST['servicios'];

	if($SERVICIO<>"")
	{
		$servicios ="call Procedure_SER0001('$CURP','','$SERVICIO','1','".$fechahora->format("Y-m-d H:i:s")."');";
	 	mysql_query($servicios) or die('error. '.mysql_error());	
			
$myregistro="call Procedure_R0000(1,'$Nombre','Solicitud de Servicios',concat('$Nombre',' Soicito ','$SERVICIO ','Servicio Activo en Espera de Recibir Ficha de Pago'),'".$fechahora->format("Y-m-d H:i:s")."');";
mysql_query($myregistro) or die('error. '.mysql_error());
			echo" <script>
			alert('El Registro a sido Guardado');
			window.location.href='buscar-servicio.php?alumno=".$CURP."&servicio=".$SERVICIO."';
			</script>";
	}else
	
	
	{
echo '<script>alert("Hay Un Problema Al Ingresar su Peticion");window.location.href="index.php";</script>';
		}
		
		
		

?>


