<?php include('validaacceso.php');
include('header.php');
?>
<meta charset="utf-8">
<?php
$ser=$_GET['servicio'];
$mat=$_GET['alumno'];



  if($ser<>"" && $mat<>""){
	  Documentacion($ser,$mat);
	  }
   else {
	   Elaboracion($mat);
	   }	
	  

	  	    
	  
?>
<?php
function Documentacion($s,$n)
{
$con=conexion();
$sql="select p.ALUM_MATRICULA,p.EST_ID,p.ALUM_PATERNO,p.ALUM_MATERNO,p.ALUM_NOMBRE,e.EST_ESTATUS
from alum_personas as p, estatus as e
where  e.EST_ID=p.EST_ID and alum_curp='".$n."'";
$res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	 echo '<b>No hay registros</b>';
	   }else{
	 while($row=mysql_fetch_array($res)){
		 $alumno=$row['ALUM_PATERNO'].' '.$row['ALUM_MATERNO'].' '.$row['ALUM_NOMBRE'];
		 $estatus=$row['EST_ESTATUS'];
		 $mat=$row['ALUM_MATRICULA'];
	 }
}
	echo '
<div class="container"><br>

<center><table width="80%" border="1">
  <tr height="40px" id="fondo_tabla">
    <td colspan="2" ><center><label id="titulo_tabla">Tabla de Servicio por Alumno</label></center></td>
  </tr>

  <tr height="30px">
    <td width="30%"><label class="etiquetita"> Matricula del Alumno</label></td>
    <td><label class="etiquetita">'.$mat.'</label></td>

  </tr>
  <tr height="30px">
    <td width="30%"><label class="etiquetita"> Nombre del Alumno</label></td>
    <td><label  class="etiquetita">'.$alumno.'</label></td>

  </tr>
  <tr height="30px">
    <td width="30%"><label class="etiquetita"> Estatus del Alumno</label></td>
    <td><label  class="etiquetita">'.$estatus.'</label></td>

  </tr>
  <tr height="30px">
    <td width="30%"><label class="etiquetita"> Servicio Requerido</label></td>
    <td><label  class="etiquetita">'.$s.'</label></td>

  </tr>
</table></center>
<BR>

<center><table width="80%" border="1">
  <tr height="30px">
    <td width="50%"><center><label class="etiquetita">Generar Hoja de Solicitud de Tramite</label></center></td>
    <td><center><a href="reporte/hoja-tramite.php?matricula='.$mat.'&nombre='.$alumno.'&servicio='.$s.'"><img src="../img/editar.png"></a></center></td>
  </tr>
</table></center>

</div>';
	}
///////////////////////////////////////////////	
	function Elaboracion($n){
	
	$con=conexion();
	$sql='select p.ALUM_MATRICULA,p.EST_ID,p.ALUM_PATERNO,p.ALUM_MATERNO,p.ALUM_NOMBRE,e.EST_ESTATUS
	from alum_personas as p, estatus as e
	where  e.EST_ID=p.EST_ID and alum_curp='.$n;
	$res=mysql_query($sql,$con);
	  if(mysql_num_rows($res)==0){
		 echo '<b>No hay registros</b>';
		   }else{
		 while($row=mysql_fetch_array($res)){
			 $alumno=$row['ALUM_PATERNO'].' '.$row['ALUM_MATERNO'].' '.$row['ALUM_NOMBRE'];
			 $estatus=$row['EST_ESTATUS'];$mat=$row['ALUM_CURP'];
		 }
	}	
	echo '
<div class="container"><br>

<center><table width="80%" border="1">
  <tr height="40px" id="fondo_tabla">
    <td colspan="2" ><center><label id="titulo_tabla">Tabla de Servicio por Alumno</label></center></td>
  </tr> 
  
  <tr height="30px">
    <td width="30%"><label  class="etiquetita">Matricula del Alumno</label></td>
    <td><label  class="etiquetita">'.$mat.'</label></td>

  </tr>
  <tr height="30px">
    <td width="30%"><label  class="etiquetita">Nombre del Alumno</label></td>
    <td><label  class="etiquetita">'.$alumno.'</label></td>

  </tr>
  <tr height="30px">
    <td width="30%"><label  class="etiquetita">Estatus del Alumno</label></td>
    <td><label  class="etiquetita">'.$estatus.'</label></td>

  </tr>
  <tr>
    <td colspan="2"><br>
	<div class="col-xs-12 col-md-12 col-lg-12"><center><label  class="etiquetita">Servicios</label></center><br></div>
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
	
	
	</td>

  </tr>
</table></center>

<center><table width="80%" border="1">
  <tr height="30px">
    <td width="50%"><center><label class="etiquetita">Generar Hoja de Solicitud de Tramite</label></center></td>
    <td><center><a href="reporte/hoja-tramite.php?matricula='.$mat.'&nombre='.$alumno.'&servicio='.$s.'"><img src="../img/editar.png"></a></center></td>
  </tr>
</table></center>

</div>';	

			}
?>