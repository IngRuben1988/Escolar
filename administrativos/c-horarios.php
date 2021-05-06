<?php include('validaacceso.php');?>
<br/>

<center>
<form name="Planes-Estudio" action="" onSubmit="enviarDatosPE(); Return False" accept-charset="UTF-8">
<table width="30%" border="0" class="footable">
<thead>
  <tr height="30px" id="fondo_tabla">
    <!--<td width="10%"><center><label id="titulo_tabla">ID</label></center></td>-->
    <td width="100%"><center><label id="titulo_tabla">Hora</label></center></td>
    <!--<td width="30%"><center><label id="titulo_tabla">Opciones</label></center></td>-->
  </tr>
</thead>
<tbody>
  <?php 
      $con=conexion();
      $sql="select * from horarios order by hor_hora";
	  $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }
		   else{
         while($row=mysql_fetch_array($res)){
                     
             echo "<tr>";
  	         //echo "<td><center><label class='etiquetita'>".$row['HOR_ID']."</center></label></td>";
	         echo "<td><center><label class='etiquetita'>".$row['HOR_HORA']."</label></center></td>";
	        // echo "<td><center><a href='a-utilerias.php?MATRIX="; echo base64_encode($row["HOR_ID"]);echo "&SKYNET=";echo base64_encode('Horarios');echo "'>Editar</a></center></td>";
  	         echo "</tr>";
               }
         }
 ?>
</tbody>    
</table>
</form>
</center>