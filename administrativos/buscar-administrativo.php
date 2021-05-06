<?php include('validaacceso.php');?>
<br/>
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
$buscar=$_POST['ba'];


  if(!empty($buscar)){
	  buscar($buscar);
	  }
	  
  function buscar($b){
  include ('c-0000z.php');
  include('../conexion/conexion2.php');
  $con=conexion();
  $sql="select * from sec_personas where sec_matricula='".$b."' or sec_curp='".$b."';";
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<div><center><b>No hay registros o la matricula esta mal</b></center></div>';
	  
	  }
	  else{
		  while($row=mysql_fetch_array($res)){
			  
			echo "<tr>";
			echo "<td><center><label class='etiquetita'>".$row['SEC_MATRICULA']."</label></center></td>";
			echo "<input name='usrcurp' type='hidden' value='".$row['SEC_CURP']."'>";
			echo "<td><center><label class='etiquetita'>".$row['SEC_NOMBRE']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['SEC_PATERNO']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['SEC_MATERNO']."</label></center></td>";
			echo "<td><center><input type='text' name='secpass' value='",print generaPass(), "' class='cajita form-control'/></center></td>";
			echo "<td><center><input type=submit name='button' id='submit'  value='Guardar'></center></td>";
			//echo "<td><center><a href='a-personas.php?MATRIX="; echo base64_encode($row["SEC_CURP"]);echo "&SKYNET=";echo base64_encode('Aministrativo');echo "'>Editar</a></center></td>";
  			echo "</tr>";
			  
			  }
		  
		  
	   }
  }

?>
</table> 