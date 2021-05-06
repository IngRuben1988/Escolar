<?php include('validaacceso.php');?>
<br/>

<table width="100%" border="0" class="footable">
<thead>
	<tr height="30px" id="fondo_tabla">
		<td width="8%"><center><label id="titulo_tabla">Curp</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Matricula</label></center></td>
		<td width="19%"><center><label id="titulo_tabla">Nombre</label></center></td>
		<td width="24%"><center><label id="titulo_tabla">Apellido Paterno</label></center></td>
		<td width="24%"><center><label id="titulo_tabla">Apellido Materno</label></center></td>
        <td width="15%"><center><label id="titulo_tabla">Editar</label></center></td>
	</tr>
  </thead>
 <form method='GET' action='a-personas.php' accept-charset='UTF-8'>
<?php
      $con=conexion();
      $sql="select * from sec_personas where sec_curp<>''  order by SEC_ID";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
	 
    echo "<tr>";
  	echo "<td><center><label class='etiquetita'>".$row['SEC_CURP']."</label></center></td>";
  	echo "<td><center><label class='etiquetita'>".$row['SEC_MATRICULA']."</label></center></td>";
	echo "<td><center><label class='etiquetita'>".$row['SEC_NOMBRE']."</label></center></td>";
	echo "<td><center><label class='etiquetita'>".$row['SEC_PATERNO']."</label></center></td>";
	echo "<td><center><label class='etiquetita'>".$row['SEC_MATERNO']."</label></center></td>";
	echo "<td><center><a href='a-personas.php?MATRIX="; echo base64_encode($row["SEC_CURP"]);echo "&SKYNET=";echo base64_encode('Administrativo');echo "'><img src='../img/editar.png' width='25%' height='22%'/></a></center></td>";
	//echo "<td><center><a href='a-personas.php' name='alumno' value=".$row['ALUM_ID'].">Editar</a></center></td>";
  	echo "</tr>";

  }
}
?>    
 <input type="hidden" name="muestra" id="muestra" value="administrativo" readonly> 
 </form> 
</table>
