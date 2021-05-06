<?php include('validaacceso.php');?>

<?php
$buscar=$_POST['grupos'];

  if(!empty($buscar)){
	  buscar($buscar);
	  }
	  
  function buscar($b){
  include('../conexion/conexion2.php');
  $con=conexion();
			  
  $sql="select cd.DATO_ID,cd.ALUM_CURP,cd.DATO_CONSECUTIVO,cd.DATO_CLAVE,sem.SEM_GRADO_NUMERO,
		sem.SEM_GRADO_LETRA,ag.GRUPO_NOMBRE,concat(p.PER_FECHA_INI,' ',p.PER_FECHA_FIN)AS PERIODO,sem.SEM_ID
		from conjunto_datos as cd , semestres as sem,asig_grupos as ag,periodos as p
		where  cd.GRUPO_ID=ag.GRUPO_ID and cd.SEM_ID=sem.SEM_ID 
		and cd.PER_ID=p.PER_ID  and cd.DATO_CLAVE='".$b."' 
		order by cd.DATO_CONSECUTIVO";
		
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<center><b>No hay registros</b></center>';
	  
	  }
	  else{

echo '<center>
<table width="50%" border="1">
	<tr height="30px" id="fondo_tabla">
    	<td width="10%"><center><label id="titulo_tabla">Semestre</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Grupo</label></center></td>
        <td width="20%"><center><label id="titulo_tabla">Turno</label></center></td>
		<td><center><label id="titulo_tabla">Ciclo Escolar</label></center></td>
</tr>';	

		  while($row=mysql_fetch_array($res)){  
		  	  $consecutivo=$row['DATO_CONSECUTIVO'];	
			  $grado=$row['SEM_GRADO_NUMERO'];
			  $gradoletra=$row['SEM_GRADO_LETRA'];
			  $grupo=$row['GRUPO_NOMBRE'];
			  $periodo=$row['PERIODO'];
			  $clave=$row['DATO_CLAVE'];
			  
			  
		  }
echo "<td><center><label class='etiquetita2'>".$grado." ".$gradoletra."</label></center></td>";
echo "<td><center><label class='etiquetita2'>".$grupo."</center></td>";
echo "<td><center><label class='etiquetita2'>Vespertino</center></td>";
echo "<td><center><label class='etiquetita2'>".$periodo."</center></td>";

echo '</tr></table>
<br>
</center>';		  
	   }
  }
?>

