<br/>

<center><table width="50%" border="0" class="footable">
	<thead>
    <tr height="30px" id="fondo_tabla">
		<td width="10%"><center><label id="titulo_tabla">Curp</label></center></td>
		<td><center><label id="titulo_tabla">Nombre del Puesto</label></center></td>
		<td><center><label id="titulo_tabla">Abreviatua</label></center></td>
        <td width="15%"><center><label id="titulo_tabla">Opciones</label></center></td>
	</tr>
    </thead>
 <form method='GET' action='a-utilerias.php' accept-charset='UTF-8'>
<?php
      $con=conexion();
      $sql="select * from puestos where pst_id >0 order by pst_id";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
	 
    echo "<tr>";
  	echo "<td><center><label class='etiquetita'>".$row['PST_ID']."</label></center></td>";
  	echo "<td><center><label class='etiquetita'>".$row['PST_NOMBRE']."</label></center></td>";
	echo "<td><center><label class='etiquetita'>".$row['PST_ABREVIATURA']."</label></center></td>";

	echo "<td><a href='a-utilerias.php?MATRIX="; echo base64_encode($row["PST_ID"]);echo "&SKYNET=";echo base64_encode('Puestos');echo "'>Editar</a></td>";
	//echo "<td><center><a href='a-personas.php' name='alumno' value=".$row['ALUM_ID'].">Editar</a></center></td>";
  	echo "</tr>";

  }
}
?>    
 <input type="hidden" name="muestra" id="muestra" value="administrativo" readonly> 
 </form> 
</table></center>
