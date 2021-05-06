<?php include('validaacceso.php');

  include('header.php');
$con=conexion();
$sql="";

?>
<div class="container">
<br>

<div class="col-xs-12 col-md-12 col-lg-12">
<table width="100%" border="1">
  <tr>
    <td class="">&nbsp;</td>
    
  </tr>
  <tr>
    <td class="menu">
    	<center><label class="etiquetita">ESCUELA "ROSARIO GUTIERREZ ESKILDSEN LICENCIATURA EN EDUCACIÓN PREESCOLAR"</label></center>
    </td> 
  </tr>
</table><br>
</div>
<div class="col-xs-12 col-md-12 col-lg-12">
<table width="100%" border="1">
  <tr>
    <td><center><label class="etiquetita">Nombre del Alumno</label></center></td>
    <td><center><label class="etiquetita">Matricula</label></center></td>
    <td class=""><center><label class="etiquetita2">Plan de Estudios</label></center></td>
  </tr>
  <tr>
    <td class="menu">
    	<center><label class="etiquetita"><?php echo $Nombre?></label></center>
    </td>
    <td class="menu">
    	<center><label class="etiquetita"><?php echo $Matricula?></label></center>
    </td>  
     <td class="menu">
    	<center><label class="etiquetita"><?php 
		$con=conexion();
		$sql="select pe.PLAN_FECHA,pe.PLAN_NOMBRE
			from  conjunto_datos as cd,periodos as p,plan_estudios as pe 
			where
			cd.PER_ID=p.PER_ID and
			p.PLAN_ID=pe.PLAN_ID and 
			cd.ALUM_CURP='".$CURP."'";
	$res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }
		   else{
         while($row=mysql_fetch_array($res)){
		 $Plan=$row['PLAN_FECHA'];
		 $Plan2=$row['PLAN_NOMBRE'];
		 }}
		echo $Plan;
		?></label></center>
    </td>  
  </tr>
</table> <br> 
</div>


<div class="col-xs-12 col-md-12 col-md -12 col-lg-12">
<table width="100%" border="1">
  <tr>
  	<td class=""><center><label class="etiquetita">Semestre</label></center></td>
    <td class=""><center><label class="etiquetita2">Grupo</label></center></td>
     <td class=""><center><label class="etiquetita2">Turno</label></center></td>
  </tr>
  <tr>
      <td class="menu">
    	<center><label class="etiquetita"><?php 
		$con=conexion();
		$sql="select s.SEM_GRADO_NUMERO,s.SEM_GRADO_LETRA
			from conjunto_datos as cd,semestres as s
			where
			cd.SEM_ID=s.SEM_ID and 
			cd.ALUM_CURP='".$CURP."'";
	$res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }
		   else{
         while($row=mysql_fetch_array($res)){
		 $Semestre=$row['SEM_GRADO_NUMERO'];
		 $Semestre2=$row['SEM_GRADO_LETRA'];
		 }}
		echo $Semestre,' ',$Semestre2;
		?></label></center>
    </td>
    
    <td class="menu">
    	<center><label class="etiquetita"><?php 
		$con=conexion();
		$sql="select ag.GRUPO_NOMBRE
				from conjunto_datos as cd,asig_grupos as ag
				where 
				cd.GRUPO_ID=ag.GRUPO_ID and 
				cd.ALUM_CURP='".$CURP."'";
	$res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }
		   else{
         while($row=mysql_fetch_array($res)){
		 $Grupo=$row['GRUPO_NOMBRE'];
		 }}
		echo $Grupo;
		?></label></center>
    </td> 
    <td class="menu">
    	<center><label class="etiquetita">Vespertino</label></center>
    </td>
  </tr>
</table> 
</div>
 
</div>
<div class="container">
<form method="post" action="zeta_x0001.php" accept-charset="UTF-8"   onKeyPress="return disableEnterKey(event);">
    <div class="col-xs-12 col-md-6">
    <br>
      <p>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Carta de Pasante" id="servicios_0">
          Carta de Pasante</label>
        <br>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Solicitud" id="servicios_1">
          Solicitud</label>
        <br>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Examen de Regularización" id="servicios_2">
          Examen de Regularización</label>
        <br>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Duplicado de Constancia de Servicio Social" id="servicios_3">
          Duplicado de Constancia de Servicio Social</label>
        <br>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Expedición de Certificado de Estudios (Duplicado)" id="servicios_4">
          Expedición de Certificado de Estudios (Duplicado)</label>
        <br>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Expedición de Constancia de Estudios" id="servicios_5">
          Expedición de Constancia de Estudios</label>
        <br>
      </p>
    </div>
    <div class="col-xs-12 col-md-6">
    <br>
    <p>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Expedición de Carta de Buena Conducta" id="servicios_0">
          Expedición de Carta de Buena Conducta</label>
        <br>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Constancia de Estudios con Calificaciones" id="servicios_1">
          Constancia de Estudios con Calificaciones</label>
        <br>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Compulsa de Documentos por Hoja" id="servicios_2">
          Compulsa de Documentos por Hoja</label>
        <br>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Constancia de Titulación" id="servicios_3">
          Constancia de Titulación</label>
        <br>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Certificación de Estudios de Educación Normal" id="servicios_4">
          Certificación de Estudios de Educación Normal</label>
        <br>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Certificación de Titulo" id="servicios_5">
          Certificación de Titulo</label>
        <br>
        <label class="etiquetita">
          <input type="radio" name="servicios" value="Certificación de Acta de Examen Profecional" id="servicios_5">
          Certificación de Acta de Examen Profecional</label>
        <br>
      </p></div>
      <div  class="col-xs-12 col-md-12 col-lg-12"><center><input type="submit" value="Enviar Solicitud"> <input type="reset"></center></div>
</form>
 </div>     
</div>
