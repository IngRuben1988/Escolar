<?php //include('validaacceso.php');?>


<?php
$buscar=$_POST['b'];
$buscar2=$_POST['b2'];
$buscar3=$_POST['b3'];
$buscar4=$_POST['b4'];



  if(!empty($buscar)|| !empty($buscar2) || !empty($buscar3)|| !empty($buscar4)){
	  buscar($buscar,$buscar2,$buscar3,$buscar4);
	  }
	
	
	
	  
function buscar($b,$b2,$b3,$b4){
	  
	echo '<center>
	<table class="footable" width="100%" border="0">
	<thead>
	<tr height="30px">
		<td width="10%"><center><label id="titulo_tabla">Matricula</label></center></td>
		<td width="30%"><center><label id="titulo_tabla">Nombre</label></center></td>
		<td width="20%"><center><label id="titulo_tabla">Apellido Paterno</label></center></td>
		<td width="20%"><center><label id="titulo_tabla">Apellido Materno</label></center></td>
        <td width="10%"><center><label id="titulo_tabla">Info</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Calif</label></center></td>
	</tr>
	</thead>';	  
	
  include('../conexion/conexion2.php');
  $con=conexion();
 
  //$sql="select * from alum_personas where alum_matricula='".$b."' or alum_curp='".$b."';";
  $sql="select * from alum_personas where (alum_curp like('".$b."%') or alum_matricula like ('".$b."%')) and alum_nombre like ('%".$b2."%') and  alum_paterno like ('%".$b3."%')
 and alum_materno like ('%".$b4."%')order by  alum_paterno";
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<center><b>No hay registros o la matricula esta mal</b></center>';
	  
	  }
	  else{
		  while($row=mysql_fetch_array($res)){
			  
			echo "<tr>";
			echo "<td><center><label class='etiquetita'>".$row['ALUM_MATRICULA']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['ALUM_NOMBRE']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['ALUM_PATERNO']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['ALUM_MATERNO']."</center></td>";
			
			echo "<td><center><a href='a-personas.php?MATRIX="; echo base64_encode($row["ALUM_CURP"]);echo "&SKYNET=";echo base64_encode('Alumno');echo "'><img src='../img/2000px-Blue_circle_for_diabetes.svg_.png' width='30%' height='30%'/></a></center></td>";
			
			echo "<td><center><a href='a-personas.php?MATRIX="; echo base64_encode($row["ALUM_CURP"]);echo "&SKYNET=";echo base64_encode('Alumno');echo "'><img src='../img/2000px-Blue_circle_for_diabetes.svg_.png' width='30%' height='30%'/></a></center></td>";
			echo "</tr>";
			  
		  }		  
	   }
	  echo'</table>
			<br>
			</center>';
  }
?>



<?php
$buscarmat=$_POST['ba'];
$buscarp=$_POST['ba2'];
$buscarm=$_POST['ba3'];
$buscarn=$_POST['ba4'];



  if(!empty($buscarmat)|| !empty($buscarp) || !empty($buscarm)|| !empty($buscarn)){
	  buscar2($buscarmat,$buscarp,$buscarm,$buscarn);
	  }
	
	
	
	  
function buscar2($b,$b2,$b3,$b4){
	  

	
  include('../conexion/conexion2.php');
  $con=conexion();
 
  //$sql="select * from alum_personas where alum_matricula='".$b."' or alum_curp='".$b."';";
  $sql="select * from alum_personas where (alum_curp like ('".$b."%') or alum_matricula like ('".$b."%')) and alum_nombre like ('%".$b2."%') and  alum_paterno like ('%".$b3."%')
 and alum_materno like ('%".$b4."%')order by  alum_paterno";
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<center><b>No hay registros o la matricula esta mal</b></center>';
	  
	  }
	  else{
	echo '
	<table width="100%" border="1">
	<tr height="30px" id="fondo_tabla">
		<td width="10%"><center><label id="titulo_tabla">Matricula</label></center></td>
		<td width="30%"><center><label id="titulo_tabla">Nombre</label></center></td>
		<td width="25%"><center><label id="titulo_tabla">Apellido Paterno</label></center></td>
		<td width="25%"><center><label id="titulo_tabla">Apellido Materno</label></center></td>
        <td width="20%"><center><label id="titulo_tabla">Servicios</label></center></td>

	</tr>';	
		  while($row=mysql_fetch_array($res)){
			
  
			  
			echo "<tr>";
			echo "<td><center><label class='etiquetita'>".$row['ALUM_MATRICULA']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['ALUM_NOMBRE']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['ALUM_PATERNO']."</label></center></td>";
			echo "<td><label class='etiquetita'>".$row['ALUM_MATERNO']."</center></td>";
			echo '<td><center><a href="buscar-servicio.php?alumno='.$row['ALUM_MATRICULA'].'" target="buscar-servicio" onclick="window.open(this.href, this.target, width=1200, height=760, menubar=no,directories=no,location=0,resizable=no );return= false;"><img src="../img/2000px-Blue_circle_for_diabetes.svg_.png" width="20%" height="20%"></a></center></td>';
			
			echo '</tr>';		  
		  }	
		echo'</table><br>';		  
	   }

  }
 
?>