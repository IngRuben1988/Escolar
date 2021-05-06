<?php include('validaacceso.php'); include('header.php')?>
<br>
<div class="container">
<?php 
$curp=$_GET['curp'];
$semestre=$_GET['semestre'];


$con=conexion();
$sql=" select distinct cd.DATO_CLAVE  from conjunto_datos as cd,periodos as p 
where cd.PER_ID=p.PER_ID AND cd.ALUM_CURP='".$curp."' AND SEM_ID=".$semestre." order by cd.DATO_CLAVE ";
	  
	  $res=mysql_query($sql,$con);
	  if(mysql_num_rows($res)==0){
		 echo '<b>No hay registros</b>';
		   }else{
		 while($row=mysql_fetch_array($res)){
	     
		 $salon=$row['DATO_CLAVE'];
echo'<table width="100%" border="1">
  <tr id="fondo_tabla" height="30px">
    <td><center><label id="titulo_tabla">Salon</label></center></td>
    <td><center><label id="titulo_tabla">Nombre</label></center></td>
    <td><center><label id="titulo_tabla">Matricula</label></center></td>
  </tr>
  <tr>
    <td><center><label class="etiquetita">'.$salon.'</label></center></td>
    <td><center><label class="etiquetita">'.$Nombre.'</label></center></td>
    <td><center><label class="etiquetita">'.$Matricula.'</label></center></td>
  </tr>

</table>';						
  }
}?>
<br>
<?php
$sql=" select * from consulta_mis_materias where DATO_CLAVE='".$salon."' ";
	  
	  $res=mysql_query($sql,$con);
	  if(mysql_num_rows($res)==0){
		 echo '<b>No hay registros</b>';
		   }else{
			   
		echo'<table width="100%" border="1">
  <tr id="fondo_tabla" height="30px">
    <td><center><label id="titulo_tabla">Materia</label></center></td>
    <td><center><label id="titulo_tabla">Lunes</label></center></td>
    <td><center><label id="titulo_tabla">Martes</label></center></td>
	<td><center><label id="titulo_tabla">Miercoles</label></center></td>
	<td><center><label id="titulo_tabla">Jueves</label></center></td>
	<td><center><label id="titulo_tabla">Viernes</label></center></td>
  </tr>';
		 while($row=mysql_fetch_array($res)){
  echo'
  <tr height="40px">
    <td width="30%"><center><label class="etiquetita">'.$row['ASIG_NOMBRE'].'</label></center></td>
    <td width="12%"><center><label class="etiquetita">'.$row['LUNES'].'</label></center></td>
    <td width="12%"><center><label class="etiquetita">'.$row['MARTES'].'</label></center></td>
	<td width="12%"><center><label class="etiquetita">'.$row['MIERCOLES'].'</label></center></td>
	<td width="12%"><center><label class="etiquetita">'.$row['JUEVES'].'</label></center></td>
	<td width="12%"><center><label class="etiquetita">'.$row['VIERNES'].'</label></center></td>
  </tr>';

						
  }
  echo'</table>';
}
?>

</div>
<?php include('../footer.php')?>