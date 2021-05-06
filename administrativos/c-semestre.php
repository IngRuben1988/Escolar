<br/>

 <form method="post" action="a-utilerias.php" onsubmit="return validarForm(this);" accept-charset="UTF-8">
<center><table class="footable scrolling" width="100%">
<thead>
	<tr height="30px" id="fondo_tabla">
		<td width="25%" ><center><label id="titulo_tabla">Plan de Estudios</label></center></td>
		<td width="20%"><center><label id="titulo_tabla">Grado en numero</label></center></td>
		<td width="25%"><center><label id="titulo_tabla">Grado en letra</label></center></td>
        <td width="15%"><center><label id="titulo_tabla">Opciones</label></center></td>
	</tr>
   </thead>
   <tbody>
<?php
      $con=conexion();
      $sql="select s.SEM_ID,s.SEM_MATERIA,s.SEM_GRADO_NUMERO,s.SEM_GRADO_LETRA,pe.PLAN_FECHA,pe.PLAN_NOMBRE
from semestres as s, plan_estudios as pe where s.PLAN_ID=pe.PLAN_ID order by PLAN_FECHA ";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
	
         while($row=mysql_fetch_array($res)){
    echo '<tr>';
  	echo "<td><center><label class='etiquetita2'>".$row['PLAN_FECHA']."</label></center></td>";
	echo "<td><center><label class='etiquetita2'>".$row['SEM_GRADO_NUMERO']."</label></center></td>";
	echo "<td><center><label class='etiquetita2'>".$row['SEM_GRADO_LETRA']."</label></center></td>";
	echo "<td><center><a href='a-utilerias.php?MATRIX="; echo base64_encode($row["SEM_ID"]);echo "&SKYNET=";echo base64_encode('Semestres');echo "'><img src='../img/editar.png' width='25%' height='25%'/></a></center></td>";
	//echo "<td><center><a href='a-personas.php' name='alumno' value=".$row['ALUM_ID'].">Editar</a></center></td>";
  	
 echo "</tr>";
  }
 
}
?>    
 <input type="hidden" name="muestra" id="muestra" value="alumno" readonly>  
</tbody>
</table></center>
</form>
<!--
		
-->