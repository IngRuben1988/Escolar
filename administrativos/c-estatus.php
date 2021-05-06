<?php include('validaacceso.php');?>
<br/>

<center><table width="30%" border="0" class="footable">
<thead>
	<tr height="30px" id="fondo_tabla">
		<td width="10%"><center><label id="titulo_tabla">ID</label></center></td>
		<td><center><label id="titulo_tabla">Estatus</label></center></td>
        <td width="30%"><center><label id="titulo_tabla">Opciones</label></center></td>
	</tr>
 </thead>
 <form method='GET' action='a-utilerias.php' accept-charset='UTF-8'>
<?php
      $con=conexion();
      $sql="select * from estatus  order by EST_ID";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
	 
    echo "<tr>";
  	echo "<td><center><label class='etiquetita'>".$row['EST_ID']."</label></center></td>";
  	echo "<td><center><label class='etiquetita'>".$row['EST_ESTATUS']."</label></center></td>";
	echo "<td><center><a href='a-utilerias.php?MATRIX="; echo base64_encode($row['EST_ID']);echo "&SKYNET=";echo base64_encode('Estatus');echo "'>Editar</a></center></td>";
  	echo "</tr>";

  }
}
?>    
 <input type="hidden" name="muestra" id="muestra" value="Estatus" readonly> 
 </form> 
</table></center>