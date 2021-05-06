<?php include('validaacceso.php');
include('header.php');
/*
$estid=$POST["estid"];
$est_estatus=$_POST["estestatus"];

//************************variables para datos de horarios*******************************
$horid=$_POST["horid"];
$h_horarios=$_POST["hhorario"];*/


/************************variables para datos de Estatus*******************************

$estid=$_POST["estid"];
$estestatus=$_POST["estestatus"];

//************************variables para datos de puestos*******************************

$pstid=$_POST['pstid'];
$nompuesto=$_POST["nompuesto"];
$abpuesto=$_POST["abpuesto"];

//************************variables para datos de Documentos*******************************

$nomdocumento=$_POST['nomdocumento'];
$docid=$_POST['docid'];*/

//***********************comienza la logica para almacenar a las personas****************
//***************************************************************************************
$alumcurp1=$_POST['alumcurp1'];
$alumnombre=$_POST['alumnombre'];
$alumpaterno=$_POST['alumpaterno'];
$alummaterno=$_POST['alummaterno'];
if( $alumcurp1<>"" && $alumnombre<>"" && $alumpaterno<>"" && $alummaterno<>"")
{
    alumnos($alumcurp1, $alumnombre,$alumpaterno,$alummaterno,$Nombre);
}
function alumnos($q,$w,$e,$r,$cp){
$alumcurp2=$_POST['alumcurp2'];
$alummatricula=$_POST['alummatricula'];  $alumturno=$_POST['alumturno'];  $alumestatus=1; $alumrfc=$_POST['alumrfc'];
$alumife=$_POST['alumife']; $alumimss=$_POST['alumimss'];  $alumcorreo=$_POST['alumcorreo'];  $alumtelefono=$_POST['alumtelefono'];
$alumsexo=$_POST['alumsexo']; $alumnacimiento=$_POST['alumnacimiento'];  $alumcolonia=$_POST['alumcolonia'];  $alumcalle=$_POST['alumcalle'];
$alumnumero=$_POST['alumnumero'];  $alumcp=$_POST['alumcp'];$alumciudad=$_POST['alumciudad'];$alummunicipio=$_POST['alummunicipio'];
$alumestado=$_POST['alumestado']; $alumnacionalidad=$_POST['alumnacionalidad'];$alumingreso=$_POST['alumingreso'];$alumfoto=$_POST['alumfoto'];
$alumgeneracion=$_POST['alumgeneracion']; $alumlugar=$_POST['alumlugar']; $alumbachiller=$_POST['alumbachiller'];
$alumpromedio=$_POST['alumpromedio']; $alumtnombre=$_POST['tutornombre']; $alumtpaterno=$_POST['tutorpaterno']; $alumtmaterno=$_POST['tutormaterno'];
$alumtocupacion=$_POST['tutorocupacion']; $alumtdomicilio=$_POST['tutordomicilio']; $alumttelefono=$_POST['tutortelefono'];
$alumtcelular=$_POST['tutorcelular']; $alumtestudio=$_POST['tutorestudios']; $alumsalon=$_POST['alumsalon']; $alumacta=$_POST['alumacta']|0;$alumsecundaria=$_POST['alumsecundaria']|0; $alumhbachiller=$_POST['alumhbachiller']|0; $alumfotos=$_POST['alumfotos']|0;
$alummedico=$_POST['alummedico']|0; $alumhcurp=$_POST['alumhcurp']|0; $alumpago=$_POST['alumpago']|0; $alumper=$_POST['alumper'];
$alumplan=$_POST['alumplan'];$alumbeca=$_POST['alumbeca'];$alumegreso=$_POST['alumegreso'];
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
$myalumno ="call Procedure_X0002 (
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
		'$alumacta',
        '$alumsecundaria',
	'$alumhbachiller',
        '$alumfotos',
        '$alummedico',
        '$alumhcurp',
        '$alumpago',
		'$alumper',
		'$alumplan',
		'$alumbeca',
		'$alumegreso','$alumcurp2')";
mysql_query($myalumno) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="alumno.php";</script>');//'error. '.mysql_error());

$myregistro="call Procedure_R0000(1,'$cp','Actualizo Información',concat('Se ingreso al alumno con la matricula ',' ','$alummatricula'),'".date('d-m-y H:i:s')."');";
mysql_query($myregistro) or die('error. '.mysql_error());
echo" <script>
alert('El Registro a sido Guardado');
window.location.href='alumno.php';
</script>";
}
/////////////////////////////////////////////           Docentes         /////////////////////////////////////////////////////////////////////
$doccurp=$_POST['doccurp']; $docnombre=$_POST['docnombre']; $docpaterno=$_POST['docpaterno']; $docmaterno=$_POST['docmaterno'];
if ($doccurp<>"" && $docnombre<>"" && $docpaterno<>"" && $docmaterno<>"")
    {
	docentes($doccurp,$docnombre,$docpaterno,$docmaterno,$Nombre);
	}
function docentes($q,$w,$e,$r,$cp){
 $doccurp2=$_POST['doccurp2'];
 $docmatricula=$_POST['docmatricula']; $docusuario=$_POST["docusuario"]; $docpuesto=$_POST['docpuesto'];  
 $docrfc=$_POST["docrfc"]; $docife=$_POST['docife']; $docimss=$_POST['docimss']; 
 $doccorreo=$_POST['doccorreo']; $doctelefono=$_POST['doctelefono']; $docsexo=$_POST['docsexo']; 
 $docnacimiento=$_POST['docnacimiento']; $doccolonia=$_POST['doccolonia']; $doccalle=$_POST['doccalle']; 
 $docnumero=$_POST['docnumero']; $doccp=$_POST['doccp']; $docciudad=$_POST['docciudad']; 
 $docmunicipio=$_POST['docmunicipio']; $docestado=$_POST['docestado'];$doclabora=1; $docingreso=$_POST["docingreso"];
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
$mydocente ="call Procedure_D0002 (
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
'$docestado',
'$docmunicipio',
'$docnacimiento',
'$docfoto',
'$doclabora',
'$docingreso','$doccurp2');";
mysql_query($mydocente) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="docente.php";</script>'.mysql_error());

$myregistro="call Procedure_R0000(1,'$cp','Actualizo Información',concat('Se ingreso un Maestro con la matricula ',' ','$docmatricula'),'".date('d-m-y H:i:s')."');";
mysql_query($myregistro) or die('error. '.mysql_error());
echo" <script>
alert('El Registro a sido Guardado');
window.location.href='docente.php';
</script>";
}

///////////////////////////////////////////////  Administrativos   ////////////////////////////////////////////////////////////////////
$adcurp=$_POST['adcurp']; $adnombre=$_POST['adnombre']; $adpaterno=$_POST['adpaterno']; $admaterno=$_POST['admaterno'];

if ($adcurp<>"" && $adnombre<>"" && $adpaterno<>"" && $admaterno<>"")
   {
	administrativos($adcurp,$adnombre,$adpaterno,$admaterno,$Nombre);
	}

function administrativos($q,$w,$e,$r,$cp){
$adcurp2=$_POST['adcurp2'];	
$admatricula=$_POST['admatricula']; $adusuario=$_POST["adusuario"]; $adpuesto=$_POST['adpuesto'];
$adrfc=$_POST["adrfc"]; $adife=$_POST['adife']; $adimss=$_POST['adimss'];
$adcorreo=$_POST['adcorreo']; $adtelefono=$_POST['adtelefono']; $adsexo=$_POST['adsexo'];
$adnacimiento=$_POST['adnacimiento']; $adcolonia=$_POST['adcolonia']; $adcalle=$_POST['adcalle'];
$adnumero=$_POST['adnumero']; $adcp=$_POST['adcp']; $adciudad=$_POST['adciudad'];
$admunicipio=$_POST['admunicipio']; $adestado=$_POST['adestado']; $adlabora=1;
$adingreso=$_POST['adingreso']; $adpermso=$_POST['adpermiso'];
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
$myadministrativo ="call Procedure_A0002 (
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
'$adcolonia',
'$adnumero',
'$adcp',
'$adciudad',
'$adestado',
'$admunicipio',
'$adnacimiento',
'$adfoto',
'$adlabora',
'$adingreso',
'$adpermiso','$adcurp2');";
mysql_query($myadministrativo) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="administrativos.php";</script>');

$myregistro="call Procedure_R0000(1,'$cp','Actualizo Información',concat('Se ingreso un Administrativo con la matricula ',' ','$admatricula'),'".date('d-m-y H:i:s')."');";
mysql_query($myregistro) or die('error. '.mysql_error());
echo" <script>
alert('El Registro a sido Guardado');
window.location.href='administrativo.php';
</script>";
  
}

//********************comienza la logica para almacenar planes de estudio****************
//***************************************************************************************


$plananio=$_POST['anio']; $plansemestre=$_POST['semestre']; $plancarrera=$_POST['carrera'];

if ($plananio<>"" && $plansemestre<>"" && $plancarrera<>""){
	planesestudio($plananio,$plansemestre,$plancarrera,$Nombre);
	}
function planesestudio($q,$w,$e,$cp){
$planid=$_POST['planid'];
	$myplan ="call Procedure_P0002('$planid','$e','$w','$q');";
	mysql_query($myplan) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="plan-estudios.php";</script>');
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
	$myregistro="call Procedure_R0000(1,'$cp','Actualizo Información',concat('Se Actualizo la Informacion del Plan de Estudios ',' ','$e',' del Año ','$anio'),'".date('d-m-y H:i:s')."');";
	mysql_query($myregistro) or die('error. '.mysql_error());
echo" <script>
alert('El Registro a sido Guardado');
window.location.href='plan-estudios.php';
</script>";
	}

//*********************comienza la logica para almacenar las materias********************
//***************************************************************************************



$asigid=$_POST["asigid"];
$matmateria=$_POST["matmateria"];

if ($matmateria<>"" && $asigid<>"" ){
	materias($matmateria,$asigid,$Nombre);
	}

	function materias($q,$w,$cp){
$matmatricula=$_POST["matmatricula"];
$matmateria=$_POST['matmateria']; $matcalsificacion=$_POST['matcalsificacion'];   
$mathoras=$_POST['mathoras']; $matlink=$_POST['matlink']; $matorden=$_POST['matorden']; $matcreditos=$_POST['matcreditos'];
$matsemestre=$_POST['matsemestre'];$matunidad=$_POST['matunidad'];

$mymateria="call Procedure_M0002('$q','$matmatricula','$matcalsificacion','$mathoras','$matcreditos','$matlink','$matorden','$w');";
mysql_query($mymateria) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="plan-estudios.php";</script>'.mysql_error());
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
$myregistro="call Procedure_R0000(1,'$cp','Actualizo Información',concat('Se Actualizo la Informacion de la Materia ',' ','$q',' del Año ','$anio'),'".date('d-m-y H:i:s')."');";
	mysql_query($myregistro) or die('error. '.mysql_error());
echo" <script>
alert('El Registro a sido Guardado');
window.location.href='plan-estudios.php';
</script>"; 
    }


$semestreid=$_POST["semid"];$semplan=$_POST['semplan'];
if ($semestreid<>"" && $semplan<>"")
{semestres($semestreid,$semplan,$Nombre);}
	
	//************************variables para datos de Semestres*******************************

function semestres($q,$w,$cp){
$semestrenumero=$_POST["semestrenumero"]; $semestreletra=$_POST["semestreltra"];
$semat=$_POST['semat'];

	$mysemestre="call Procedure_SE0002('$q','$w','$semestrenumero','$semestreletra','$semat');";
	mysql_query($mysemestre) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="plan-estudios.php";</script>');
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
$myregistro="call Procedure_R0000(1,'$cp','Actualizo Información',concat('Se Actualizo la Informacion del Semestre ',' ','$semestrenumero',' ','$semestreletra',' del Año ','$anio'),'".date('d-m-y H:i:s')."');";
	mysql_query($myregistro) or die('error. '.mysql_error());
echo" <script>
alert('El Registro a sido Guardado');
window.location.href='plan-estudios.php';
</script>";  
    }


/*********************comienza la logica para almacenar las estatus********************
//***************************************************************************************


if ($estid>0 && $estestatus<>"" ){
	$myestatus="call Procedure_EST0002('$estid','$estestatus');";
	mysql_query($myestatus) or die('error. '.mysql_error());
	echo" <script>
alert('El Registro a sido Guardado');
window.location.href='estatus.php';
</script>";  
    }
	
//*********************comienza la logica para almacenar las puestos********************
//***************************************************************************************

if ($nompuesto<>"" && $abpuesto<>"" ){
	$mypuesto="call Procedure_PU0002('$pstid','$nompuesto','$abpuesto');";
	mysql_query($mypuesto) or die('error. '.mysql_error());
	echo" <script>
alert('El Registro a sido Guardado');
window.location.href='puestos.php';
</script>";  
    }
	
//*********************comienza la logica para almacenar los Documentos********************
//***************************************************************************************
	

if ($nomdocumento<>"" && $docid<>""){
	$mydocumento="call Procedure_DS0002('$nomdocumento','$docid');";
	mysql_query($mydocumento) or die('error. '.mysql_error());
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='documentos.php';
	</script>";  
    }*/

//************************variables para datos de Periodos*******************************
 
$perid=$_POST['perid'];
if ($perid<>""){
	periodos($perid,$Nombre);
	}
	
function  periodos($q,$cp){
$periodoini=$_POST['periodoini'] ; 
$periodofin=$_POST['periodofin']; 
$planid=$_POST['planid'];

$myper="call Procedure_PE0000('$periodoini','$periodofin','$q',$planid);";
mysql_query($myper) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="periodos.php";</script>'.mysql_error());
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
$myregistro="call Procedure_R0000(1,'$cp','Actualizo Información',concat('Se Actualizo la Informacion del Cilo Escolar ','  ','$periodoini','$periodofin',' del Año ','$anio'),'".date('d-m-y H:i:s')."');";
	mysql_query($myregistro) or die('error. '.mysql_error());
echo" <script>
alert('El Registro a sido Guardado');
window.location.href='periodos.php';
</script>";  
    }
	
//*********************comienza la logica para almacenar los Grupos********************
//***************************************************************************************

$grupoid=$_POST['grupoid']; 
if ($grupoid<>""){grupos($grupoid,$Nombre);}
	
function grupos($q,$cp){
	$perid=$_POST['periodogrupo'];
	$gruponombre=$_POST['gruponombre'] ; 
	
$myper="call Procedure_AG0002('$q','$gruponombre','$perid');";
mysql_query($myper) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="periodos.php";</script>');
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
$myregistro="call Procedure_R0000(1,'$cp','Actualizo Información',concat('Se Actualizo la Informacion del Grupo ','  ','$gruponombre',' del Año ','$anio'),'".date('d-m-y H:i:s')."');";
	mysql_query($myregistro) or die('error: '.mysql_error());
echo" <script>
alert('El Registro del Grupo Se a Actualizado');
window.location.href='periodos.php';
</script>";  
    }
	

//*********************comienza la logica para almacenar los conjuntos de datos********************
//***************************************************************************************

//************************variables para datos de Grupos*******************************
//************************variables para datos del grupo con alumnos************************
 
$consecutivogrupo=$_POST['consecutivo'];
$clavegrupo=$_POST['datoclave'];
$matriculagrupo=$_POST['matriculagrupo'];

$alumccurp=$_POST['alumcurp'];


if ($alumccurp<>"" ){
	conjunto_datos($alumccurp,$clavegrupo,$consecutivogrupo,$Nombre);
	}

function conjunto_datos($q,$w,$e,$cp){
$myper="call Procedure_CD0002('$q','$w','$e');";
mysql_query($myper) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="alumno-grupo.php";</script>'.mysql_error());
$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");	
$myregistro="call Procedure_R0000(1,'$cp','Actualizo Información',concat('Se Actualizo la Informacion del Salon',' ','$w',' Se Introdujo al Alumno ','$q',' Con el Numero de Lista ','$e',),'".date('d-m-y H:i:s')."');";
	mysql_query($myregistro) or die("<script>alert('El Registro a sido Guardado');	window.location.href='alumno-grupo.php';</script>");
	echo" <script>
	alert('El Registro a sido Guardado');
	window.location.href='alumno-grupo.php';
	</script>";  
    }
	
//**************************guardar alumnos en salon**********************************
//************************************************************************************	

$consecutivogrupo=$_POST['consecutivo'];
$clavegrupo=$_POST['datoclave'];
$matriculagrupo=$_POST['matriculagrupo'];

if ($consecutivogrupo<>"" && $clavegrupo<>"" && $matriculagrupo<>""){
	salones($matriculagrupo,$clavegrupo,$consecutivogrupo,$Nombre);	
	}
	
function salones($q,$w,$e,$cp){
$myper="call Procedure_CD0002('$q','$w','$e');";
	mysql_query($myper) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="alumno-grupo.php";</script>');

$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
		$myregistro="call Procedure_R0000(1,'$cp','Actualizo Información',concat('$w',' se Ingreso el Alumno  ','$q'),'".date('d-m-y H:i:s')."');";

$con=conexion();
$sql="select*from conjunto_datos where dato_clave='".$w."' and alum_curp='".$q."'";
$res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
		$SEM=$row['SEM_ID'];	
	//////////////////////////////////////////////
$sql="select*from materias where id_sem=".$SEM;
$res=mysql_query($sql,$con);
		  if(mysql_num_rows($res)==0){
			 echo '<b>No hay registros</b>';
			   }else{
			 while($row=mysql_fetch_array($res)){
	
			$matgrupos="call Procedure_CP0001( '$w','$q','".$row['ASIG_ID']."')";
			mysql_query($matgrupos) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="alumno-grupo.php";</script>');

$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
		$myregistro="call Procedure_R0000(1,'$cp','Actualizo Información',concat('Se actualizo la informacion de las calificaciones del salon ','$w'),'".date('d-m-y H:i:s')."');";
	mysql_query($myregistro) or die("<script>alert('El Registro a sido Guardado');	window.location.href='alumno-grupo.php';</script>");		
		  }
		} 
		
  } 
  	echo" <script>
	alert('El Registro a sido Guardado');
	
	</script>";  
 }

}
//*********************************calificaciones***********************************
//**********************************************************************************
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

//****************************servicios*****************************
//******************************************************************
$servcurp=$_GET['curp'];
$servicio=$_GET['servicio'];

if ($servcurp<>"" && $servicio<>"" ){
	servicios($servicio,$servcurp,$Nombre);	
	}
	
function servicios($q,$w,$cp){
$myper="call Procedure_SER0002('$q','$w');";
	mysql_query($myper) or die('<script>alert("Hay Un Problema Al Actualizar El Registro");window.location.href="servicios.php";</script>');

$fechahora=new DateTime(); $fechahora->setTimezone(new DateTimeZone('America/Mexico_City')); $fechahora->format("Y-m-d H:i:s");
		$myregistro="call Procedure_R0000(1,'$cp','Se Atendio Un Servicio',concat('$cp',' Atendio un Servicio de ','$q',' del alumno con matricula ','$w'),'".date('d-m-y H:i:s')."');";
	mysql_query($myregistro) or die("<script>alert('El Registro a sido Guardado');	window.location.href='servicios.php';</script>");
 

	echo"<script>alert('El Registro a sido Guardado');	window.location.href='servicios.php';</script>";  
	echo"<script>alert('El Registro a sido Guardado');	window.reload();</script>";  
}

		
	include('../footer.php');	
	
?>

