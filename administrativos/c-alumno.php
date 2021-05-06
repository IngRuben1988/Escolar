<?php include('validaacceso.php');?>
<table width="100%" border="0" class="footable">
	<thead>
    <tr height="30px" id="fondo_tabla">

		<td width="10%"><center><label id="titulo_tabla">Matricula</label></center></td>
		<td width="24%"><center><label id="titulo_tabla">Apellido Paterno</label></center></td>
		<td width="24%"><center><label id="titulo_tabla">Apellido Materno</label></center></td>
		<td width="19%"><center><label id="titulo_tabla">Nombre</label></center></td>
        <td width="15%"><center><label id="titulo_tabla">Editar</label></center></td>
	</tr>
    </thead>
<?php
      $con=conexion();
      $sql="select * from alum_personas where  alum_matricula<>''  order by ALUM_PATERNO";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
    echo "<tr>";

  	echo "<td><center><label class='etiquetita'>".$row['ALUM_MATRICULA']."</label></center></td>";
	echo "<td><label class='etiquetita'>".$row['ALUM_PATERNO']."</label></center></td>";
	echo "<td><label class='etiquetita'>".$row['ALUM_MATERNO']."</label></center></td>";
	echo "<td><label class='etiquetita'>".$row['ALUM_NOMBRE']."</label></center></td>";
	echo "<td><center><a href='a-personas.php?MATRIX="; echo base64_encode($row["ALUM_CURP"]);echo "&SKYNET=";echo base64_encode('Alumno');echo "'><img src='../img/editar.png' width='25%' height='22%'/></a></center></td>";
	//echo "<td><center><a href='a-personas.php' name='alumno' value=".$row['ALUM_ID'].">Editar</a></center></td>";
  	echo "</tr>";

  }
}
?>    
 <input type="hidden" name="muestra" id="muestra" value="alumno" readonly>  
</table>
</form>
<!--
		
-->