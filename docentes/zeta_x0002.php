<?php
include('../conexion/conexion.php');
include('header.php');

$calif=$_POST['calificacion'];
$asist=$_POST['asistencia'];
$alumcurp=$_POST['alumcurp'];
$doccurp=$_POST['doccurp'];
$fecha;
//***********************comienza la logica para asignar las variables*******************
//***************************************************************************************

if ($semid<>"" && $planid<>""&& $alumcurp<>"" && $grupoid<>""){
	$myper="call Procedure_CD0002('$semid','$planid','$alumcurp','$grupoid');";
	mysql_query($myper) or die('error. '.mysql_error());
	//header('Location: materias.php');
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='grupos.php';
	</script>";  
    }
	
//*******************************
$NEW_DATO=$_POST['califdato'];
$NEW_ALUM_CURP=$_POST['califcurp'];
$NEW_ASIG_ID=$_POST['califmat'];
		
	
if($NEW_DATO<>"" && $NEW_ALUM_CURP<>"" && $NEW_ASIG_ID<>"")
	{
	calificar($NEW_DATO,$NEW_ALUM_CURP,$NEW_ASIG_ID,$Nombre);
	}

function calificar($q,$w,$e,$cp){
$NEW_CALIF1=$_POST['parcial1'];
$NEW_CALIF2=$_POST['parcial2'];
$NEW_CALIF3=$_POST['parcial3'];
$NEW_CALIF4=$_POST['parcial4'];
$NEW_CALIF5=$_POST['parcial5'];
$NEW_CALIF6=$_POST['parcial6'];
$NEW_ASIST1=$_POST['asistencia1'];
$NEW_ASIST2=$_POST['asistencia2'];
$NEW_ASIST3=$_POST['asistencia3'];
$NEW_ASIST4=$_POST['asistencia4'];
$NEW_ASIST5=$_POST['asistencia5'];
$NEW_ASIST6=$_POST['asistencia6'];
$CALIF_EXTRA1=$_POST['extra1'];
$CALIF_EXTRA2=$_POST['extra2'];
$CALIF_EXTRA3=$_POST['extra3'];
$CALIF_EXTR_FECHAA1=$_POST['extrafecha1'];
$CALIF_EXTR_FECHAA2=$_POST['extrafecha2'];
$CALIF_EXTR_FECHAA3=$_POST['extrafecha3'];
$CALIF_EXAMEN_FINAL=$_POST['cfinal'];
$NEW_EER=$_POST['eer'];
$NEW_GLOBAL;
$NEW_ASIST_FINAL;

$con=conexion();
$sql="select*from materias where asig_id=".$e;
$res=mysql_query($sql,$con);

      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
			 $unidad=$row['ASIG_UNIDAD'];
			 }
$promedio1=($NEW_CALIF1+$NEW_CALIF2+$NEW_CALIF3+$NEW_CALIF4+$NEW_CALIF5+$NEW_CALIF6+$CALIF_EXAMEN_FINAL)/($unidad+1);
$promedio2=($NEW_ASIST1+$NEW_ASIST2+$NEW_ASIST3+$NEW_ASIST4+$NEW_ASIST5+$NEW_ASIST6)/$unidad;

$myper="call Procedure_CP0002('$q','$w','$e','$NEW_CALIF1','$NEW_CALIF2','$NEW_CALIF3','$NEW_CALIF4','$NEW_CALIF5','$NEW_CALIF6','$NEW_ASIST1','$NEW_ASIST2','$NEW_ASIST3','$NEW_ASIST4','$NEW_ASIST5','$NEW_ASIST6','$CALIF_EXTRA1','$CALIF_EXTRA2','$CALIF_EXTRA3','$CALIF_EXTR_FECHAA1','$CALIF_EXTR_FECHAA2','$CALIF_EXTR_FECHAA3','$promedio1','$promedio2','$CALIF_EXAMEN_FINAL','$unidad');";
mysql_query($myper) or die('<script>alert("Hay Un Problema Al Asignar Calificaciones");window.location.href="calificacion-alumno.php";</script>');			 
$danza=$_POST['danza'];	
$coro=$_POST['coro'];	
$orquesta=$_POST['orquesta'];	
$ingles=$_POST['ingles'];

	$matforaneas="call Procedure_MF0001('$danza','$coro','$orquesta','$ingles','$w','$q')";	
mysql_query($matforaneas) or die('<script>alert("Hay Un Problema Al Calificar Materias Foraneas");window.location.href="calificacion-alumno.php";</script>'.mysql_error());

$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
		$myregistro="call Procedure_R0000(1,'$cp','Captura de Calificacion',concat('Se Capturaron las Calificaciones del Alumno ',' ','$w',' del salon ','$q'),'".date('d-m-y H:i:s')."');";
	mysql_query($myregistro) or die("<script>alert('El Registro a sido Guardado');	window.location.href='calificacion-alumno.php';</script>");
			 }
$alumno=$_POST['alumno'];
$salon=$_POST['salon'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$semestre=$_POST['semestre'];

			 echo"<script>alert('El Registro a sido Guardado');window.location.href='calificacion-alumno.php?alumno=$alumno&salon=$salon&numero=$numero&paterno=$paterno&materno=$materno&nombre=$nombre&semestre=$semestre';</script>";
	}			
	include('../footer.php');
?>

