<?php include('validaacceso.php');?>
<br/>
<center>

<table class="footable scrolling" width="100%">
<thead>
  <tr height="40px" id="fondo_tabla">
		<td  width="10%"><center><label id="titulo_tabla">Grupos</label></center></td>
        <td width="35%"><center><label id="titulo_tabla">Fecha de Inicio</label></center></td>
        <td width="35%"><center><label id="titulo_tabla">Fecha del Final</label></center></td>
        <td width="20%"><center><label id="titulo_tabla">Editar</label></center></td>
	</tr>
</thead>
<?php
      $con=conexion();
      $sql="select ag.GRUPO_ID,ag.GRUPO_NOMBRE,p.PER_FECHA_INI,p.PER_FECHA_FIN 
	  from asig_grupos as ag,periodos as p 
	  where ag.PER_ID=p.PER_ID order by GRUPO_ID";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
	 
    echo "<tr>";
  	echo "<td><center><label class='etiquetita'>".$row['GRUPO_NOMBRE']."</label></center></td>";
	echo "<td><center><label class='etiquetita'>".$row['PER_FECHA_INI']."</label></center></td>";
	echo "<td><center><label class='etiquetita'>".$row['PER_FECHA_FIN']."</label></center></td>";
	echo "<td><center><a href='a-utilerias.php?MATRIX="; echo base64_encode($row['GRUPO_ID']);echo "&SKYNET=";echo base64_encode('Grupos');echo "'><img src='../img/editar.png' width='30%' height='30%'/></a></center></td>";
  	echo "</tr>";

  }
}
?>   
</table> </center>