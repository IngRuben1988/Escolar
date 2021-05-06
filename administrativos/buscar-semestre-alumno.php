<?php include('validaacceso.php');?>

<table width="100%" border="0" class="footable">
	<thead>
    <tr height="30px" id="fondo_tabla">
		<td width="5%"><center><label id="titulo_tabla">Matricula</label></center></td>
		<td width="15%"><center><label id="titulo_tabla">Nombre</label></center></td>
		<td width="15%"><center><label id="titulo_tabla">Apellido Paterno</label></center></td>
		<td width="15%"><center><label id="titulo_tabla">Apellido Materno</label></center></td>
		<td width="7%"><center><label id="titulo_tabla">Ingreso</label></center></td>
        <td width="7%"><center><label id="titulo_tabla">Estatus</label></center></td>
        <td width="5%"><center><label id="titulo_tabla">Grado</label></center></td>
        <td width="15%"><center><label id="titulo_tabla">Periodo</label></center></td>
        <td width="5%"><center><label id="titulo_tabla">Grupo</label></center></td>
        <td ><center><label id="titulo_tabla">Plan Estudios</label></center></td>
	</tr>
	</thead>
<?php
$buscar=$_POST['b'];

  if(!empty($buscar)){
	  buscar($buscar);
	  }
	  
  function buscar($b){
  include ('c-0000z.php');
  include('../conexion/conexion2.php');
  $con=conexion();
  $sql="
		select ap.ALUM_MATRICULA,ap.ALUM_NOMBRE,ap.ALUM_PATERNO,ap.ALUM_MATERNO,ap.ALUM_INGRESO,e.EST_ESTATUS,
		sem.SEM_GRADO_NUMERO,sem.SEM_GRADO_LETRA,p.PER_FECHA_INI,p.PER_FECHA_FIN,ag.GRUPO_NOMBRE,pe.PLAN_NOMBRE
		
		from alum_personas as ap,conjunto_datos as cd,semestres as sem,plan_estudios as pe,asig_grupos as ag,periodos as p ,estatus as e
		where 
				
		cd.GRUPO_ID=ag.GRUPO_ID and
		cd.SEM_ID=sem.SEM_ID and
		cd.PLAN_ID=pe.PLAN_ID and
		cd.ALUM_CURP=ap.ALUM_CURP and
		ap.EST_ID=e.EST_ID and
		
		(ap.alum_matricula='".$b."' or ap.alum_curp='".$b."');";
		
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<center><b>No hay registros o la matricula esta mal</b></center>';
	  
	  }
	  else{
		  while($row=mysql_fetch_array($res)){
			  
			echo "<tr border='2'>";
			echo "<td><center><label class='etiquetita'>".$row['ALUM_MATRICULA']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['ALUM_NOMBRE']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['ALUM_PATERNO']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['ALUM_MATERNO']."</center></td>";
			echo "<td><center><label class='etiquetita'>".$row['ALUM_INGRESO']."</center></td>";
			echo "<td><center><label class='etiquetita'>".$row['EST_ESTATUS']."</center></td>";
			echo "<td><center><label class='etiquetita'>".$row['SEM_GRADO_LETRA']."</center></td>";
			echo "<td><center><label class='etiquetita'>".$row['PER_FECHA_INI']." - ".$row['PER_FECHA_FIN']."</center></td>";
			echo "<td><center><label class='etiquetita'>".$row['GRUPO_NOMBRE']."</center></td>";
			echo "<td><center><label class='etiquetita'>".$row['PLAN_NOMBRE']."</center></td>";
			//echo "<td><center><a href='a-personas.php' name='alumno' value=".$row['ALUM_ID'].">Editar</a></center></td>";
			echo "</tr>";
			  
		  }		  
	   }
  }
?>
</table>