<?php include('validaacceso.php');?>
<center>
<table width="80%" border="0" class="footable">
	<thead>
    <tr height="30px" id="fondo_tabla">
		<td width="10%"><center><label id="titulo_tabla">Matricula</label></center></td>
		<td width="30%"><center><label id="titulo_tabla">Nombre</label></center></td>
		<td width="25%"><center><label id="titulo_tabla">Apellido Paterno</label></center></td>
		<td width="25%"><center><label id="titulo_tabla">Apellido Materno</label></center></td>
        <td width="20%"><center><label id="titulo_tabla">Editar</label></center></td>

	</tr>
	</thead>
<?php
$buscar=$_POST['b'];
$buscar2=$_POST['b2'];
$buscar3=$_POST['b3'];
$buscar4=$_POST['b4'];

  if(!empty($buscar)|| !empty($buscar2) || !empty($buscar3)|| !empty($buscar4)){
	  buscar($buscar,$buscar2,$buscar3,$buscar4);
	  }
	  
  function buscar($b,$b2,$b3,$b4){
  include('../conexion/conexion2.php');
  $con=conexion();
 
  //$sql="select * from alum_personas where alum_matricula='".$b."' or alum_curp='".$b."';";
  $sql="select * from sec_personas where (sec_curp like('".$b."%') or sec_matricula like ('".$b."%')) and sec_nombre like ('%".$b2."%') and  sec_paterno like ('%".$b3."%')
 and sec_materno like ('%".$b4."%')order by  sec_paterno";
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<center><b>No hay registros o la matricula esta mal</b></center>';
	  
	  }
	  else{
		  while($row=mysql_fetch_array($res)){
			  
			echo "<tr>";
			echo "<td><center><label class='etiquetita'>".$row['SEC_MATRICULA']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['SEC_NOMBRE']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['SEC_PATERNO']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['SEC_MATERNO']."</center></td>";
			echo "<td><center><a href='a-personas.php?MATRIX="; echo base64_encode($row["SEC_CURP"]);echo "&SKYNET=";echo base64_encode('Administrativo');echo "'><img src='../img/editar.png' width='25%' height='22%'/></a></center></td>";
			echo "</tr>";
			  
		  }		  
	   }
  }
?>
</table>
<br>
</center>



