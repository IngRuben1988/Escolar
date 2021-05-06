<?php include('validaacceso.php');?>
<?php include('header.php')?>

<div class="container" id="centrar" >
<br/>
<table class="footable scrolling" width="100%" border="0">
	<thead>
    <tr height="30px">

		<td width="10%"><center><label id="titulo_tabla">Responsable</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Acción Realizada</label></center></td>
		<td width="50%"><center><label id="titulo_tabla">Informe de la Accion</label></center></td>
        <td width="10%"><center><label id="titulo_tabla">Fecha de la Accion</label></center></td>
        <td width="10%"><center><label id="titulo_tabla">Eliminar</label></center></td>

	</tr>
    </thead>
<?php
      $con=conexion();
      /*$sql="select r.TODO_ID,r.TODO_MATRICULA,r.TODO_MATRICULA,r.TODO_ACCION,r.TODO_OBSERVACION,
			r.TODO_FECHA, pe.PER_FECHA_INI,pe.PER_FECHA_FIN,p.PLAN_NOMBRE,p.PLAN_FECHA
			from registros as r,plan_estudios as p,periodos as pe 
			where  r.PER_ID=pe.PER_ID and pe.PLAN_ID=p.PLAN_ID
			order by  todo_fecha";*/
	 $sql="Select*from registros ORDER BY  TODO_FECHA desc";		
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
    echo "<tr>";

  	echo "<td width='15%'><center><label class='etiquetita2'>".$row['TODO_MATRICULA']."</label></center></td>";
	echo "<td width='15%'><label class='etiquetita2'>".$row['TODO_ACCION']."</label></center></td>";
	echo "<td><label class='etiquetita2'>".$row['TODO_OBSERVACION']."</label></center></td>";
	echo "<td><center><label class='etiquetita'>".$row['TODO_FECHA']."</label></center></td>";
	echo "<td><center><a href='zeta_x0003.php?MATRIX="; echo base64_encode($row["TODO_ID"]);echo "&SKYNET=";echo base64_encode('Registro');echo "'><img src='../img/2000px-Blue_circle_for_diabetes.svg_.png' width='25%' height='25%'/></a></center></td>";
  	echo "</tr>";

  }
}
?>    
 <input type="hidden" name="muestra" id="muestra" value="alumno" readonly>  
</table>
</form><br>
</div>
<?php include('../footer.php')?>