<html lang="es">
<head>
<!--[if IE]>
este contenido solo se muestra en IE
<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>SAEN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.css">
    <link href="css/Hoja_formaulario.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/Escudo_Normal_Preescolar.ico">


</head>

<body>
<?php include('validaacceso.php');include('../conexion/conexion.php');include('../conexion/conexion2.php');

$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");

$gruponombre=$_POST['gruponombre'];
$periodogrupo=$_POST['periodogrupo'];

//************************variables para datos de Periodos*******************************
$periodoplan=$_POST['periodoplan'];
$periodoini=$_POST['periodoini'];
$periodofin=$_POST['periodofin'];

//************************variables para datos de Grupos*******************************

$semid=$_POST['semid'];
$planid=$_POST['planid']; 
$alumcurp=$_POST['alumcurp'];
$grupoid=$_POST['grupoid'];
//************************variables para datos de Horarios*******************************
$horhorario=$_POST['horhora1'];
$horhorario2=$_POST['horhora2'];
$horciclo=$_POST['horciclo'];
$hormaterias=$_POST['hormateria'];
$hormaestros=$_POST['hordocente'];
$hordias=$_POST['hordia'];
$horclave=$_POST['grupos'];

//*****************variables para datos de Planes de Estudios Completos******************
$planesid=$_POST['planes'];
$planessem=$_POST['planessemestre'];
$planesmat=$_POST['planesmateria'];




//*****************variables para datos de salones ******************
$plan=$_POST['plang'];
$grupoid=$_POST['gruposg'];
$semid=$_POST['grupossemestreg'];
$periodoid=$_POST['gruposciclosg'];

$consecutivo=$_POST['cantidadg'];



//***********************comienza la logica para almacenar a las personas****************
//***************************************************************************************
$alumcurp=$_POST['alumcurp']; $alumnombre=$_POST['alumnombre']; $alumpaterno=$_POST['alumpaterno']; $alummaterno=$_POST['alummaterno'];


if ($alumcurp<>"" && $alumnombre<>"" && $alumpaterno<>"" && $alummaterno<>""){
	alumnos($alumcurp,$alumnombre,$alumpaterno,$alummaterno,$Nombre);
	}
function alumnos($q,$w,$e,$r,$cp){

$alummatricula=$_POST['alummatricula']; $alumturno=$_POST['alumturno']; $alumestatus=1; $alumrfc=$_POST['alumrfc'];
$alumife=$_POST['alumife']; $alumimss=$_POST['alumimss']; $alumcorreo=$_POST['alumcorreo']; $alumtelefono=$_POST['alumtelefono'];
$alumsexo=$_POST['alumsexo']; $alumnacimiento=$_POST['alumnacimiento']; $alumcolonia=$_POST['alumcolonia']; $alumcalle=$_POST['alumcalle'];
$alumnumero=$_POST['alumnumero']; $alumcp=$_POST['alumcp']; $alumciudad=$_POST['alumciudad']; $alummunicipio=$_POST['alummunicipio'];
$alumestado=$_POST['alumestado']; $alumnacionalidad=$_POST['alumnacionalidad']; $alumingreso=$_POST['alumingreso'];
$alumfoto=$_POST['alumfoto']; $alumgeneracion=$_POST['alumgeneracion']; $alumlugar=$_POST['alumlugar']; $alumbachiller=$_POST['alumbachiller'];
$alumpromedio=$_POST['alumpromedio']; $alumtnombre=$_POST['tutornombre']; $alumtpaterno=$_POST['tutorpaterno']; 
$alumtmaterno=$_POST['tutormaterno']; $alumtocupacion=$_POST['tutorocupacion']; $alumtdomicilio=$_POST['tutordomicilio'];
$alumttelefono=$_POST['tutortelefono']; $alumtcelular=$_POST['tutorcelular']; $alumtestudio=$_POST['tutorestudios']; $alumsalon=$_POST['alumsalon'];$alumacta=$_POST['alumacta']|0; $alumsecundaria=$_POST['alumsecundaria']|0; $alumhbachiller=$_POST['alumhbachiller']|0; 
$alumfotos=$_POST['alumfotos']|0; $alummedico=$_POST['alummedico']|0; $alumhcurp=$_POST['alumhcurp']|0; $alumpago=$_POST['alumpago']|0;
$alumper=$_POST['alumper']; $alumplan=$_POST['alumplan'];$alumbeca=$_POST['alumbeca'];
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");

		$myalumno ="call Procedure_X0001 (
		'$q',
		'$alummatricula',
		'$alumturno',
		'$alumestatus',
		'$w',
		'$e',
		'$r',
		'$alumrfc',
		'$alumife',
		'$alumimss',
		'$alumcorreo',
		'$alumtelefono',
		'$alumsexo',
		'$alumnacimiento',
		'$alumcolonia',
		'$alumcalle',
		'$alumnumero',
		'$alumcp',
		'$alumciudad',
		'$alummunicipio',
		'$alumestado',
		'$alumnacionalidad',
		'$alumingreso',
		'$alumfoto',
		'$alumgeneracion',
		'$alumlugar',
		'$alumbachiller',
		'$alumpromedio',
		'$alumtnombre',
		'$alumtpaterno',
		'$alumtmaterno',
		'$alumtocupacion',
		'$alumtdomicilio',
		'$alumttelefono',
		'$alumtcelular',
		'$alumtestudio',
		0,
		'$alumacta',
        '$alumsecundaria',
		'alumhbachiller',
        '$alumfotos',
        '$alummedico',
        '$alumhcurp',
        '$alumpago',
		'$alumper',
        '$alumplan',
		'$alumbeca')";
		mysql_query($myalumno) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="alumno.php";</script>'.mysql_error());
	
$myregistro="call Procedure_R0000(1,'$cp','Inscripcion',concat('Se ingreso al alumno con la matricula ',' ','$alummatricula'),'".$fechahora->format("Y-m-d H:i:s")."');";
mysql_query($myregistro) or die('error. '.mysql_error());
		
		echo" <script>
		alert('El Registro a sido Guardado');
		window.location.href='alumno.php';
		</script>";

}
$doccurp=$_POST['doccurp']; $docnombre=$_POST['docnombre']; $docpaterno=$_POST['docpaterno']; $docmaterno=$_POST['docmaterno'];
if ($doccurp<>"" && $docnombre<>"" && $docpaterno<>"" && $docmaterno<>""){
	docentes($doccurp,$docnombre,$docpaterno,$docmaterno,$Nombre);
	}
function docentes($q,$w,$e,$r,$cp){
$docmatricula=$_POST['docmatricula']; $docusuario=$_POST["docusuario"]; $docpuesto=$_POST['docpuesto']; $docrfc=$_POST["docrfc"];
$docife=$_POST['docife']; $docimss=$_POST['docimss']; $doccorreo=$_POST['doccorreo']; $doctelefono=$_POST['doctelefono'];
$docsexo=$_POST['docsexo']; $docnacimiento=$_POST['docnacimiento']; $doccolonia=$_POST['doccolonia']; $doccalle=$_POST['doccalle'];
$docnumero=$_POST['docnumero']; $doccp=$_POST['doccp']; $docciudad=$_POST['docciudad']; $docmunicipio=$_POST['docmunicipio']; 
$docestado=$_POST['docestado']; $doclabora=1; $docingreso=$_POST["docingreso"];
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");

		$mydocente ="call Procedure_D0001 (
		'$q',
		'$docmatricula',
		'$docpuesto',
		'$w',
		'$e',
		'$r',
		'$docrfc',
		'$docife',
		'$docimss',
		'$doccorreo',
		'$doctelefono',
		'$docsexo',
		'$doccalle',
		'$doccolonia',
		'$docnumero',
		'$doccp',
		'$docciudad',
		'$docmunicipio',
		'$docestado',
		'$docnacimiento',
		'$docfoto',
		'$doclabora',
		'$docingreso');";
mysql_query($mydocente) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="docente.php";</script>');
$myregistro="call Procedure_R0000(1,'$cp','Contratar',concat('Se ingreso al Docente con la matricula ',' ','$docmatricula'),'".$fechahora->format("Y-m-d H:i:s")."');";
mysql_query($myregistro) or die('error. '.mysql_error());	
		echo" <script>
		alert('El Registro a sido Guardado');
		window.location.href='docente.php';
		</script>";
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$adcurp=$_POST['adcurp']; $adnombre=$_POST['adnombre']; $adpaterno=$_POST['adpaterno']; $admaterno=$_POST['admaterno'];
if ($adcurp<>"" && $adnombre<>"" && $adpaterno<>"" && $admaterno<>""){
	administrativo($adcurp,$adnombre,$adpaterno,$admaterno,$Nombre);
	}

function administrativo($q,$w,$e,$r,$cp){
$admatricula=$_POST['admatricula']; $adusuario=$_POST["adusuario"]; $adpuesto=$_POST['adpuesto']; $adrfc=$_POST["adrfc"];
$adife=$_POST['adife']; $adimss=$_POST['adimss']; $adcorreo=$_POST['adcorreo']; $adtelefono=$_POST['adtelefono'];
$adsexo=$_POST['adsexo']; $adnacimiento=$_POST['adnacimiento']; $adcolonia=$_POST['adcolonia']; $adcalle=$_POST['adcalle'];
$adnumero=$_POST['adnumero']; $adcp=$_POST['adcp']; $adciudad=$_POST['adciudad']; $admunicipio=$_POST['admunicipio'];
$adestado=$_POST['adestado']; $adlabora=1; $adingreso=$_POST["adingreso"]; $adpermso=$_POST["adpermiso"];
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");

		$myadministrativo ="call Procedure_A0001 (
		'$q',
		'$admatricula',
		'$adpuesto',
		'$w',
		'$e',
		'$r',
		'$adrfc',
		'$adife',
		'$adimss',
		'$adcorreo',
		'$adtelefono',
		'$adsexo',
		'$adcalle',
		'$adnumero',
		'$adcp',
		'$adciudad',
		'$admunicipio',
		'$adestado',
		'$adcolonia',
		'$adnacimiento',
		'$adfoto',
		'$adlabora',
		'$adingreso',
		'$adpermiso');";
       mysql_query($myadministrativo) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="administrativo.php";</script>');
$myregistro="call Procedure_R0000(1,'$cp','Contrato',concat('Se ingreso al Administrativo con la matricula ',' ','$admatricula'),'".$fechahora->format("Y-m-d H:i:s")."');";		
mysql_query($myregistro) or die('error. '.mysql_error());
		echo" <script>
		alert('El Registro a sido Guardado');
		window.location.href='administrativo.php';
		</script>";
  
} 
//********************comienza la logica para almacenar planes de estudio****************
//***************************************************************************************

$anio=$_POST["anio"]; $semestre=$_POST["semestre"]; $carrera=$_POST["carrera"];
if ($anio>0 && $semestre>0 ){
	plan_estudios($carrera,$semestre,$anio,$Nombre);
	}
function plan_estudios($q,$w,$e,$cp){
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
$myplan ="call Procedure_P0001('$q','$w','$e');";
mysql_query($myplan) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="plan-estudios.php";</script>');

$myregistro="call Procedure_R0000(1,'$cp','Inserto Nuevo Registro',concat('Se ingreso nun Nuevo Plan de Estudios  para ',' ','$carrera',' con ','$semestre',' Semestres', 'para el año ','$anio'),'".$fechahora->format("Y-m-d H:i:s")."');";		
mysql_query($myregistro) or die('error. '.mysql_error());
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='plan-estudios.php';
	</script>";
	}

//*********************comienza la logica para almacenar las materias********************
//***************************************************************************************

$matmateria=$_POST['matmateria']; $matclacificacion=$_POST['matcalsificacion'];   
$mathoras=$_POST['mathoras']; $matlink=$_POST['matlink']; $matorden=$_POST['matorden']; $matcreditos=$_POST['matcreditos'];
$matsemestre=$_POST['matsemestre'];$matunidad=$_POST['matunidad'];
if ( $matmateria<>""  && $matclacificacion<>"" )
{
	materias($matsemestre,$matmateria,$matclacificacion,$mathoras,$matcreditos,$matlink,$matorden,$matunidad,$Nombre);
	}
function materias($q,$w,$e,$r,$t,$y,$u,$i,$cp){
$matmatricula=$_POST['matmatricula'];
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
$mymateria="call Procedure_M0001('$q','$w','$matmatricula','$e','$r','$t','$y','$u','$i');";
mysql_query($mymateria) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="plan-estudios.php";</script>');

$myregistro="call Procedure_R0000(1,'$cp','Ingreso Nuevo Regsitro',concat('Se ingreso la Materia ',' ','$q'),'".$fechahora->format("Y-m-d H:i:s")."');";		
mysql_query($myregistro) or die('error. '.mysql_error());
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='plan-estudios.php';
	</script>";  
}

//*********************comienza la logica para almacenar las semestres********************
//***************************************************************************************
$semestreplan=$_POST["semestreplan"]; $semestrenumero=$_POST["semestrenumero"]; $semestreletra=$_POST["semestreltra"];
$semestremat=$_POST['semestremat'];

if ($semestreplan<>"" && $semestrenumero<>"" && $semestreletra<>"" && $semestremat<>"" ){
	semestres($semestreplan,$semestrenumero,$semestreletra,$semestremat,$Nombre);
	}

function semestres($q,$w,$e,$r,$cp){
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
$mysemestre="call Procedure_SE0001('$q','$w','$e','r');";
mysql_query($mysemestre) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="plan-estudios.php";</script>');

$myregistro="call Procedure_R0000(1,'$cp','Ingreso Nuevo Registro',concat('Se ingreso el Semestre ',' ','$w',' ','$e',' que abarcara ','$r',' Materias'),'".$fechahora->format("Y-m-d H:i:s")."');";		
mysql_query($myregistro) or die('error. '.mysql_error());
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='plan-estudios.php';
	</script>";  
    }
//*********************comienza la logica para almacenar los estatus********************
/***************************************************************************************
if ($h_horarios<>""){
	$myhorario="call Procedure_H0001('$h_horarios');";
	mysql_query($myhorario) or die('error. '.mysql_error());
$myregistro="call Procedure_R0000(1,'$Nombre','Ingrso Nuevo Registro',concat('Se ingreso el Horario ',' ','$h_horario'),'".$fechahora->format("Y-m-d H:i:s")."');";		
mysql_query($myregistro) or die('error. '.mysql_error());
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='horarios.php';
	</script>";  
		
	}else

//*********************comienza la logica para almacenar las puestos********************
//***************************************************************************************

if ($nompuesto<>"" && $abpuesto<>"" ){
	$mypuesto="call Procedure_PU0001('$nompuesto','$abpuesto');";
	mysql_query($mypuesto) or die('error. '.mysql_error());
$myregistro="call Procedure_R0000(1,'$Nombre','Ingreso Nuevo Registro',concat('Se ingreso puesto ',' ','$nompuesto'),'".$fechahora->format("Y-m-d H:i:s")."');";		
mysql_query($myregistro) or die('error. '.mysql_error());
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='puestos.php';
	</script>";  
    }else

//*********************comienza la logica para almacenar los usuarios********************
//***************************************************************************************/



$alumpass=$_POST['alumpass'];
$alumusr=$_POST['alumusr'];
$alumclave=$_POST['alumusr'];

if ($alumpass<>"" && $alumusr<>"" && $alumclave<>"" ){
	usuarioalumno($alumpass,$alumusr,$alumclave,$Nombre);
	}
function usuarioalumno($q,$w,$e,$cp){
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");

$usrcurp=$_POST['usrcurp'];
$myusuarioalum="call Procedure_U0001('$usrcurp','$q','$w',3);";
mysql_query($myusuarioalum) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="index.php";</script>');

$myregistro="call Procedure_R0000(1,'$cp','Ingreso Nuevo Usuario',concat('Se ingreso al Usuario Alumno con la matricula ','$e',' y password '.'$q'),'".$fechahora->format("Y-m-d H:i:s")."');";		
mysql_query($myregistro) or die('error. '.mysql_error());
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='index.php';
	</script>";  
    }
//*********************comienza la logica para almacenar los usuarios********************
//***************************************************************************************
$docpass=$_POST['docpass']; $docusr=$_POST['docusr']; $docclave=$_POST['docusr'];
if ($docpass<>"" && $docusr<>"" && $docclave<>"" ){
	usuariodocente($docpass,$docusr,$docclave,$Nombre);
	}

function usuariodocente($q,$w,$e,$cp){
$usrcurp=$_POST['usrcurp'];
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");

$myusuariodoc="call Procedure_U0001('$usrcurp','$q','$w',2);";
mysql_query($myusuariodoc) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="index.php";</script>');

$myregistro="call Procedure_R0000(1,'$cp','Ingreso Nuevo Usuario',concat('Se ingreso al Usuario Docente con la matricula ',' ','$e',' con un pasword ','$q'),'".$fechahora->format("Y-m-d H:i:s")."');";		
mysql_query($myregistro) or die('error. '.mysql_error());
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='index.php';
	</script>";  
    }
//*********************comienza la logica para almacenar los usuarios********************
//***************************************************************************************

$secpass=$_POST['secpass'];
$secusr=$_POST['secusr'];
$secclave=$_POST['secusr'];

if ($secpass<>"" && $secusr<>"" && $secclave<>"" ){
	usuarioadmin($secpass,$secusr,$secclave,$Nombre);
	}

function usuarioadmin($q,$w,$e,$cp){
$usrcurp=$_POST['usrcurp'];
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");

$myusuariosec="call Procedure_U0001('$usrcurp','$q','$w',1);";
mysql_query($myusuariosec) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="index.php";</script>');
$myregistro="call Procedure_R0000(1,'$cp','Ingreso Nuevo Usuario',concat('Se ingreso al Usuario administrativo con la matricula ',' ','$e',' con un pasword ','$q'),'".$fechahora->format("Y-m-d H:i:s")."');";
echo" <script>
alert('El Registro a sido Guardado');
window.location.href='index.php';
	</script>";  
    }

//*********************comienza la logica para almacenar los Documentos********************
/***************************************************************************************
	
if ($nomdocumento<>"" ){
	$mydocumentos="call Procedure_DS0001('$nomdocumento');";
	mysql_query($mydocumentos) or die('error. '.mysql_error());
$myregistro="call Procedure_R0000(1,'$Nombre','Ingreso Nuevo Registro',concat('Se ingreso al Usuario Docente con la matricula ',' ','$docclave',' con un pasword ','$docpass'),'".$fechahora->format("Y-m-d H:i:s")."');";
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='documentos.php';
	</script>";  
    }
//*********************comienza la logica para almacenar los grupos********************/
//***************************************************************************************
	
if ($gruponombre<>"" && $periodogrupo<>""){
	$mygruponombre="call Procedure_AG0001('$gruponombre','$periodogrupo');";
	mysql_query($mygruponombre) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="periodos.php";</script>');

$myregistro="call Procedure_R0000(1,'$Nombre','Ingreso Nuevo Registro',concat('Se ingreso al grupo ',' ','$gruponombre',' para el periodo ','$periodogrupo'),'".$fechahora->format("Y-m-d H:i:s")."');";
mysql_query($myregistro) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="periodos.php";</script>');
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='periodos.php';
	</script>";  
    }
	
//*********************comienza la logica para almacenar los Periodos********************
//***************************************************************************************
	
if ($periodoini<>"" && $periodofin<>""){
	$myper="call Procedure_PE0000('$periodoini','$periodofin',0,'$periodoplan');";
	mysql_query($myper) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="periodos.php";</script>');
//$myregistro="call Procedure_R0000(1,'$Nombre','Ingreso Nuevo Registro',concat('Se ingreso el Ciclo Escolar ',' ','$periodoini',' $periodofin'),'".$fechahora."');";
//mysql_query($myregistro) or die('error. '.mysql_error());
	//header('Location: materias.php');
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='periodos.php';
	</script>";  
    }


	
//*********************comienza la logica para almacenar asignar horarios********************
//***************************************************************************************



if($horciclo<>"" && $hordias<>"" && $horhorario<>"" && $hormaestros<>"" && $hormaterias<>"" && $horclave){
	$hor="call Procedure_AH0001('$hormaterias','$horciclo','$hordias',CONCAT('$horhorario',' - ','$horhorario2'),'$hormaestros','$horclave');";
mysql_query($hor) or die('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.clode()";</script>');
	echo" <script>alert('El Registro a sido Guardado');</script>";

$myregistro="call Procedure_R0000(1,'$Nombre','Ingreso Horario Ingresador',concat('Se ingreso al Docente con la matricula',' ','$hormaestros',' para la materia ','$hormaterias',' para la hora ','$horhorario'),'".$fechahora->format("Y-m-d H:i:s")."');";		
mysql_query($myregistro) or die('error. '.mysql_error());

 echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";  
    }

//*********************** variables para datos de apertura de calificaciones **********************
//*************************************************************************************************
//*****************variables para datos de apertura de calificaciones ******************
$puertoparial=$_POST['parcial']; 

if($puertoparial<>""){
	$puertoapertura=$_POST['apertura']; $puertoclausura=$_POST['clausura'];
	
	$mycurricula="call Procedure_PT0001('$puertoparial','$puertoapertura','$puertoclausura');";
	mysql_query($mycurricula) or die ('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="index.php";</script>');
	
$myregistro="call Procedure_R0000(1,'$Nombre','Permiso Captura Calificaciones',concat('Se Aperturo un nuevo Evento de Captura de Calificaciones para ',' $puertoparial',' del ','$puertoapertura',' Hasta ','$puertoclausura'),'".$fechahora->format("Y-m-d H:i:s")."');";		
mysql_query($myregistro) or die('error. '.mysql_error());
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='index.php';
	</script>";
	
	}
//*********************** variables para datos para salones**********************
//*************************************************************************************************

$plan=$_POST['plang'];
$grupoid=$_POST['gruposg'];
$semid=$_POST['grupossemestreg'];
$periodoid=$_POST['gruposciclosg'];
$consecutivo=$_POST['cantidadg'];	
	

if ($grupoid<>"" && $semid<>"" && $periodoid<>"" && $periodoid<>"" && $consecutivo<>""){

$con=conexion();
      $sql="select ag.GRUPO_NOMBRE from asig_grupos as ag where ag.GRUPO_ID=".$grupoid;
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
		$grupo=$row['GRUPO_NOMBRE'];

  }
}
      $sql="select s.SEM_GRADO_NUMERO from semestres as s where s.SEM_ID=".$semid;
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
		$semestre=$row['SEM_GRADO_NUMERO'];

  }
}

      $sql="select p.PER_FECHA_INI from periodos as p where p.PER_ID=".$periodoid;
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
		$periodo=$row['PER_FECHA_INI'];

  }
}
$clave=$semestre.$grupo."-".$periodo;

$wql="select*from conjunto_datos where ALUM_CURP<>'' and DATO_CLAVE='".$clave."'";
 $wes=mysql_query($wql,$con);
      if(mysql_num_rows($wes)==0){
    
	$borra="delete from conjunto_datos where dato_clave='".$clave."';";
	mysql_query($borra) or die ('error. '.mysql_error());     
for ($i=1;$i<=$consecutivo;$i++){
	$mycurricula="call Procedure_CD0001('$grupoid','$semid','$periodoid','','$i','','$clave');";
	mysql_query($mycurricula) or die ('<script>alert("Hay Un Problema Al Ingresar El Nuevo Registro");window.location.href="alumno-grupo.php";</script>');

	$myregistro="call Procedure_R0000(1,'$Nombre','Creo Un Grupo Nuevo',concat('Se creo un Grupo con la clave ',' ','$clave'),'".$fechahora->format("Y-m-d H:i:s")."');";
	mysql_query($myregistro) or die('error. '.mysql_error());
	}
echo"<script>
	alert('El Registro a sido Guardado');
	window.location.href='alumno-grupo.php';
	</script>";

}	else{
	
echo"<script>alert('Este Salon Que Usted Desea Ingresar Ya Existe En La Base de Datos');window.location.href='alumno-grupo.php';</script>";

	}}

echo '<center><div class="col-xs-12 col-md-12 verdes"><center><label>Su Solicitud Fue Enviada</label></center></div></center>';		
include('../footer.php');		



?>
</body>
</html>

