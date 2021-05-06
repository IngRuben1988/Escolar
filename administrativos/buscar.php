<?php include('validaacceso.php');?>

<table width="100%" border="0" class="footable">
	<thead>
    <tr height="30px" id="fondo_tabla">
		<td width="10%"><center><label id="titulo_tabla">Matricula</label></center></td>
		<td width="19%"><center><label id="titulo_tabla">Nombre</label></center></td>
		<td width="20%"><center><label id="titulo_tabla">Apellido Paterno</label></center></td>
		<td width="20%"><center><label id="titulo_tabla">Apellido Materno</label></center></td>
		<td width="24%"><center><label id="titulo_tabla">Password</label></center></td>
        <td width="15%"><center><label id="titulo_tabla">Guardar</label></center></td>
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
  $sql="select * from alum_personas where alum_matricula='".$b."'";
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<center><b>No hay registros o la matricula esta mal</b></center>';
	  
	  }
	  else{
		  while($row=mysql_fetch_array($res)){
			  
			echo "<tr>";
			echo "<td><center><label class='etiquetita'>".$row['ALUM_MATRICULA']."</label></center></td>";
			echo "<input name='usrcurp' type='hidden' value='".$row['ALUM_CURP']."'>";
			echo "<td><center><label class='etiquetita'>".$row['ALUM_NOMBRE']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['ALUM_PATERNO']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['ALUM_MATERNO']."</center></td>";
			echo "<td><center><input type='text' name='alumpass' value='",print generaPass(), "'class='cajita form-control'/></center></td>";
			echo "<td><center><input type=submit name='button' id='submit'  value='Guardar'></center></td>";
			//echo "<td><center><a href='a-personas.php' name='alumno' value=".$row['ALUM_ID'].">Editar</a></center></td>";
			echo "</tr>";
			  
		  }		  
	   }
  }
?>
</table>