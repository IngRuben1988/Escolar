<?php include('validaacceso.php');?>
<br/>
<center>

<form name="Planes-Estudio" action="" onSubmit="enviarDatosPE(); Return False" accept-charset="UTF-8">
<table class="footable scrolling" width="100%">
<thead>
  <tr height="30px" id="fondo_tabla">
    <td width="10%"><center><label id="titulo_tabla">Semestre</label></center></td>
    <td width="30%"><center><label id="titulo_tabla">Materia</label></center></td>
    <td width="23%"><center><label id="titulo_tabla">Clasificación</label></center></td>
    <td width="5%"><center><label id="titulo_tabla">Horas</label></center></td>
    <td width="20%"><center><label id="titulo_tabla">Carrera</label></center></td>
    <td width="20%"><center><label id="titulo_tabla">Editar</label></center></td>
  </tr>
  </thead>
  <tbody>
  <?php 
      $con=conexion();
      $sql="select * from consulta_materias_carrera order by ID_SEM";
	  $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }
		   else{
         while($row=mysql_fetch_array($res)){
                     
             echo "<tr>";
			 echo "<td><label class='etiquetita2'>".$row['SEMESTRE']."</label></center></td>";
	         echo "<td><label class='etiquetita2'>".$row['ASIG_NOMBRE']."</label></center></td>";
			 echo "<td><label class='etiquetita2'>".$row['ASIG_CLASIFICACION']."</label></center></td>";
			 echo "<td><center><label class='etiquetita2'>".$row['ASIG_HORAS']."</label></center></td>";
			 echo "<td><label class='etiquetita2'>".$row['Carrera']."</label></center></td>";
	         echo "<td><center><a href='a-utilerias.php?MATRIX="; echo base64_encode($row["ASIG_ID"]);echo "&SKYNET=";echo base64_encode('Materias');echo "'><img src='../img/editar.png' width='25%' height='25%'/></a></center></td>";
  	         echo "</tr>";
               }
         }
 ?>
    </tbody>
</table>
</form>

</center>