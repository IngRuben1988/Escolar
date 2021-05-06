<br/>
<center>

<table class="footable scrolling" width="100%">
<thead>
  <tr height="40px" id="fondo_tabla">
  	<td width="20%"><center><label id="titulo_tabla">Carrera</label></center></td>
    <td width="30%"><center><label id="titulo_tabla">Plan de Estudios</label></center></td>
    <td width="20%"><center><label id="titulo_tabla">Inicio periodo</label></center></td>
    <td width="20%"><center><label id="titulo_tabla">Fin de periodo</label></center></td>
    <td width="10%"><center><label id="titulo_tabla">Editar</label></center></td>
  </tr>
</thead>
	<?php
      $con=conexion();
      $sql="select p.PER_FECHA_INI,p.PER_FECHA_FIN,pe.PLAN_FECHA, pe.PLAN_NOMBRE,p.PER_ID from periodos as p, plan_estudios as pe
where p.PLAN_ID=pe.PLAN_ID  order by PER_fecha_ini desc";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }
		   else{
         while($row=mysql_fetch_array($res)){
	 
			echo "<tr>";
			echo "<td><center><label class='etiquetita'>".$row['PLAN_NOMBRE']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['PLAN_FECHA']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['PER_FECHA_INI']."</label></center></td>";
			echo "<td><center><label class='etiquetita'>".$row['PER_FECHA_FIN']."</label></center></td>";
			echo "<td><center><a href='a-utilerias.php?MATRIX="; echo base64_encode($row['PER_ID']);echo "&SKYNET=";echo base64_encode('Periodos');echo "'><img src='../img/editar.png' width='30%' height='30%'/></a></center></td>";
			echo "</tr>";

  }
}
?>     
</table>

