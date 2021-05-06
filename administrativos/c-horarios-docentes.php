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
		select ap.DOC_CURP,ap.DOC_NOMBRE,ap.DOC_PATERNO,ap.DOC_MATERNO,ap.DOC_INGRESO,
		e.PST_NOMBRE,
		m.ASIG_NOMBRE,
		h.HOR_HORA,
		ah.DIA
		
		
		from doc_personas as ap, puestos as e,horarios as h,materias as m,asig_horarios as ah
		where 
		ah.ASIG_ID=m.ASIG_ID and
		ah.HOR_ID=h.HOR_ID and
		ah.DOC_CURP=ap.DOC_CURP and
		
		
		(ap.DOC_CURP='".$b."' or ap.DOC_MATRICULA='".$b."');";
		
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<center><b>No hay registros o la matricula esta mal</b></center>';
	  
	  }
	  else{
		  while($row=mysql_fetch_array($res)){
			  
			echo "<tr>";
			echo "<td><center><label class='etiquetita'>".$row['DOC_CURP']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['DOC_NOMBRE']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['DOC_PATERNO']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['DOC_MATERNO']."</center></td>";
			echo "<td><center><label class='etiquetita'>".$row['HOR_HORA']."</center></td>";
			echo "<td><center><label class='etiquetita'>".$row['ASIG_NOMBRE']."</center></td>";
			echo "<td><center><label class='etiquetita'>".$row['DIA']."</center></td>";
			//echo "<td><center><a href='a-personas.php' name='alumno' value=".$row['ALUM_ID'].">Editar</a></center></td>";
			echo "</tr>";
			  
		  }		  
	   }
  }
?>
</table>