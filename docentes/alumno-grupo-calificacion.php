<?php include('validaacceso.php');  include('../conexion/conexion2.php'); ?>

<?php
	
	$buscar=$_POST['grupos'];

	if(!empty($buscar)){
		Grupos($buscar);
		Salones($buscar,$CURP);
	}
	  
/////////////////////////////////////////////////////////////////////////////////////////////////////  
function Grupos($b){/////// tabla para saber quen salon estamos ubicados	
echo '<center>
<table width="50%" border="0" class="footable">
  <thead>
	<tr height="30px" id="fondo_tabla">
    	<td width="20%"><center><label id="titulo_tabla">Semestre</label></center></td>
		<td width="20%"><center><label id="titulo_tabla">Grupo</label></center></td>
        <td width="20%"><center><label id="titulo_tabla">Turno</label></center></td>
		<td><center><label id="titulo_tabla">Ciclo Escolar</label></center></td>
	</tr>
  </thead>';	
$con=conexion();  
  $sql="
select  cd.DATO_ID,cd.ALUM_CURP,cd.DATO_CONSECUTIVO,cd.DATO_CLAVE,sem.SEM_GRADO_NUMERO,sem.SEM_GRADO_LETRA,ag.GRUPO_NOMBRE,concat(p.PER_FECHA_INI,' ',p.PER_FECHA_FIN)AS PERIODO
from conjunto_datos as cd , semestres as sem,asig_grupos as ag,periodos as p
where  cd.GRUPO_ID=ag.GRUPO_ID and cd.SEM_ID=sem.SEM_ID and cd.PER_ID=p.PER_ID  and cd.DATO_CLAVE='".$b."' 
order by cd.DATO_CONSECUTIVO";	
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	  echo '<center><b>No hay registros</b></center>';
	  }
	  else{
		  while($row=mysql_fetch_array($res)){  
		  	  $consecutivo=$row['DATO_CONSECUTIVO'];	
			  $grado=$row['SEM_GRADO_NUMERO'];
			  $gradoletra=$row['SEM_GRADO_LETRA'];
			  $grupo=$row['GRUPO_NOMBRE'];
			  $periodo=$row['PERIODO'];
			  $clave=$row['DATO_CLAVE'];			  
		  }
echo "<td><center><label class='etiquetita2'>".$grado." ".$gradoletra."</label></center></td>";
echo "<td><center><label class='etiquetita2'>".$grupo."</center></td>";
echo "<td><center><label class='etiquetita2'>Vespertino</center></td>";
echo "<td><center><label class='etiquetita2'>".$periodo."</center></td>";
echo '</tr></table><br></center>';		  
	   }  
}
///////////////////////////////////////////////////////////////////////////////////////////////////// 
function Salones($b,$d){/////// Tabla de alumnos y salones
echo '<center>
<table width="100%" border="0" class="footable scrolling">
  <thead>
	<tr height="50px" id="fondo_tabla">
    	<td width="%"><center><label id="titulo_tabla">No.</label></center></td>
		<td width="20%"><center><label id="titulo_tabla">Matricula</label></center></td>
		<td width="20%"><center><label id="titulo_tabla">CURP</label></center></td>
		<td width="50%"><center><label id="titulo_tabla">Nombre Completo</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Calificar</label></center></td>
    </tr>
  </thead>';	
$con=conexion();
 $sql="select *from consulta_alumnos_grupos where DATO_CLAVE='".$b."' order by DATO_CONSECUTIVO";
/*$sql="select*from Consulta_Calificaciones where DATO_CLAVE='".$b."'";	*/
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	  echo'<center><b>No Hay Registros</b></center>';
	  }
	  else{
		  while($row=mysql_fetch_array($res)){ 
		   	$semestres=$row['SEM_ID'];
			echo "<tr>";
			echo "<td><center><label class='etiquetita2'>".$row['DATO_CONSECUTIVO']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['ALUM_MATRICULA']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['ALUM_CURP']."</label></center></td>";
			echo "<td><label class='etiquetita2'>".$row['ALUM_PATERNO']." ".$row['ALUM_MATERNO']." ".$row['ALUM_NOMBRE']."</label></td>";
			echo "<td><center><a href='calificacion-alumno.php?alumno=".$row['ALUM_CURP']."&salon=".$row['DATO_CLAVE']."&numero=".$row['DATO_CONSECUTIVO']."&paterno=".$row['ALUM_PATERNO']."&materno=".$row['ALUM_MATERNO']."&nombre=".$row['ALUM_NOMBRE']."&maestro=".$d."&semestre=".$row['SEM_ID']."' target='calificacion-alumno' onclick=\"window.open(this.href, this.target, ' width=1200, height=720, menubar=no,directories=no,location=0,resizable=no');return false;\"><img src='../img/2000px-Blue_circle_for_diabetes.svg_.png' width='30' heigth='30' ></a></center></td>";
		  }
echo '</tr></table><br></center>';	
	  }  
	
 
}
?>