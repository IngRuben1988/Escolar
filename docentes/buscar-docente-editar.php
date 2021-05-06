<?php include('validaacceso.php');  include('../conexion/conexion2.php');?>


<?php

$buscar=$_POST['b'];
$buscar2=$_POST['b2'];
$buscar3=$_POST['b3'];
$buscar4=$_POST['b4'];

  if(!empty($buscar)|| !empty($buscar2) || !empty($buscar3)|| !empty($buscar4)){
	  buscar($buscar,$buscar2,$buscar3,$buscar4);
	  }
	  
  function buscar($b,$b2,$b3,$b4){
echo'
<center>
<table width="80%" border="1">
	<tr height="30px" id="fondo_tabla">
		<td width="10%"><center><label id="titulo_tabla">Matricula</label></center></td>
		<td width="30%"><center><label id="titulo_tabla">Nombre</label></center></td>
		<td width="25%"><center><label id="titulo_tabla">Apellido Paterno</label></center></td>
		<td width="25%"><center><label id="titulo_tabla">Apellido Materno</label></center></td>
        <td width="20%"><center><label id="titulo_tabla">Editar</label></center></td>

	</tr>';
  $con=conexion();
 
  //$sql="select * from alum_personas where alum_matricula='".$b."' or alum_curp='".$b."';";
  $sql="select * from doc_personas where (doc_curp like('".$b."%') or doc_matricula like ('".$b."%')) and doc_nombre like ('%".$b2."%') and  doc_paterno like ('%".$b3."%')
 and doc_materno like ('%".$b4."%')order by  doc_paterno";
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<center><b>No hay registros o la matricula esta mal</b></center>';
	  
	  }
	  else{
		  while($row=mysql_fetch_array($res)){
			  
			echo "<tr>";
			echo "<td><center><label class='etiquetita'>".$row['DOC_MATRICULA']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['DOC_NOMBRE']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['DOC_PATERNO']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['DOC_MATERNO']."</center></td>";
			echo "<td><center><a href='a-personas.php?MATRIX="; echo base64_encode($row["DOC_CURP"]);echo "&SKYNET=";echo base64_encode('Docente');echo "'><img src='../img/editar.png' width='25%' height='22%'/></a></center></td>";
			echo "</tr>";
			  
		  }		  
	   }
	    echo'
 </table>
<br>
</center>';
  }

?>




<?php
echo'
<center>
<table width="100%" border="1">
	<tr height="30px" id="fondo_tabla">
		
		<td width="15%"><center><label id="titulo_tabla">Nombre</label></center></td>
        <td width="10%"><center><label id="titulo_tabla">Materia</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Lunes</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Martes</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Miercoles</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Jueves</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Viernes</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Sabado</label></center></td>
		<td width="15%"><center><label id="titulo_tabla">Salon</label></center></td>
	</tr>';

$plan=$_POST['plans'];
$doc=$_POST['docs'];

 if(!empty($plan)|| !empty($doc)){
	  HorarioMaestro($plan,$doc);
	  }
	  
  function HorarioMaestro($b,$b2){

  $con=conexion();
  $sql="select p.DOC_CURP,concat(p.DOC_NOMBRE,' ',p.DOC_PATERNO,' ',p.DOC_MATERNO)as Nombre,asg.ASIG_NOMBRE,
h.LUNES,h.MARTES,h.MIERCOLES,h.JUEVES,h.VIERNES,h.SABADO,h.DATO_CLAVE
from asig_horarios as h,materias as asg, doc_personas as p 
where 
h.DOC_CURP=p.DOC_CURP and h.ASIG_ID=asg.ASIG_ID and  h.per_id=".$b." and p.doc_curp='".$b2."'";
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<center><b>No hay registros o la matricula esta mal</b></center>';
	  }
	  else{
		  while($row=mysql_fetch_array($res)){
			  
			echo "<tr>";
			echo "<td><label class='etiquetita2'>".$row['Nombre']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['ASIG_NOMBRE']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['LUNES']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['MARTES']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['MIERCOLES']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['JUEVES']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['VIERNES']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['SABADO']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['DATO_CLAVE']."</label></center></td>";
			echo "</tr>";
			  
		  }		  
	   }
  }
 echo'
 </table>
<br>
</center>';
?>

