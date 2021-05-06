<?php include('validaacceso.php');?>
<br/>

<center>
<table width="40%" border="0" class="footable">
<thead>
	<tr height="30px" id="fondo_tabla">
		<td width="8%"><center><label id="titulo_tabla">ID</label></center></td>
		<td><center><label id="titulo_tabla">Nombre Documento</label></center></td>
        <td width="15%"><center><label id="titulo_tabla">Opciones</label></center></td>
	</tr>
  </thead>
 <form method='GET' action='zeta_x0002.php' accept-charset='UTF-8'>
<?php
      $con=conexion();
      $sql="select * from documentos order by doc_id";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
	 
    echo "<tr>";
  	echo "<td><center><label class='etiquetita'>".$row['DOC_ID']."</label></center></td>";
  	echo "<td><label class='etiquetita'>".$row['DOC_NOMBRE']."</label></td>";
	echo "<td><center><a href='a-utilerias.php?MATRIX="; print base64_encode($row['DOC_ID']);print "&SKYNET=";print base64_encode('Documentos'); print "'>Editar</a></center></td>";
  	echo "</tr>";

  }
}
?>    
</table>
</form>
</center>
