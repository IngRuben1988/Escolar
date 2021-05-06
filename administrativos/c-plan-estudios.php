<center>
<br/>
<form name="Planes-Estudio" action="" onSubmit="enviarDatosPE(); Return False" accept-charset="UTF-8">
<table class="footable scrolling" width="100%">
<thead>
  <tr height="30px" id="fondo_tabla">
    <td width="10%"><center><label id="titulo_tabla">Plan</label></center></td>
    <td width="30%"><center><label id="titulo_tabla">Carreras</label></center></td>
    <td width="10%"><center><label id="titulo_tabla">Numero de Semestres</label></center></td>
    <!--<td width="15%"><center><label id="titulo_tabla">Curricula</label></center></td>-->
    <td width="10%"><center><label id="titulo_tabla">Editar</label></center></td>
  </tr>
  </thead>
  <?php 
      $con=conexion();
      $sql="select * from plan_estudios order by Plan_fecha desc";
	  $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }
		   else{
         while($row=mysql_fetch_array($res)){
                     
             echo "<tr>";
  	         echo "<td><center><label class='etiquetita'>".$row['PLAN_FECHA']."</label></center></td>";
	         echo "<td><label class='etiquetita'>".$row['PLAN_NOMBRE']."</label></td>";
	         echo "<td><center><label class='etiquetita'>".$row['PLAN_SEMESTRE']."</label></center></td>";
			 //echo "<td><center><a href='' data-toggle='modal' data-target='#Curricula'></li><img src='../img/curricula.png' width='30%' height='26%'/></a></center></td>";
	         echo "<td><center><a href='a-utilerias.php?MATRIX="; echo base64_encode($row["PLAN_ID"]);echo "&SKYNET=";echo base64_encode('PEstudios');echo "'><img src='../img/editar.png'/></a></center></td>";
  	         echo "</tr>";
               }
         }
 ?>
    
</table>
</form>