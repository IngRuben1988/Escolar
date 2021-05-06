<?php include('validaacceso.php');?>

<?php
$plan=$_POST['plan'];
$semestre=$_POST['semestre'];



  if(!empty($plan)){
	  buscarplan($plan);
	  }



  if(!empty($semestre)){
	  buscarsemestre($semestre);
	  }
	  
	  
  function buscarplan($a){
	include('../conexion/conexion2.php');
	$con=conexion();
	$sql="select*from semestres where plan_id='".$a."'";  
	 $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<center><b>No hay registros</b></center>';
	  
	  }
	  else{
		  echo'<select class="cajita form-control" name="horsemestre" id="horsemestre" onChange="return BuscarMateriasSemestre(this);">"';
		  		echo'<option>Selecciona...</option>';
		  while($row=mysql_fetch_array($res)){  
		  		echo'<option value="'.$row['SEM_ID'].'">'.$row['SEM_GRADO_NUMERO'].' '.$row['SEM_GRADO_LETRA'].'</option>';
		  }
		  echo'</select>';
		  } 
  }  
	  
	  
  function buscarsemestre($b){
  include('../conexion/conexion2.php');
  $con=conexion();
			  
  $sql="select*from materias where id_sem='".$b."' 
		order by asig_id";
		
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	           echo '<center><b>No hay registros</b></center>';
	  
	  }
	  else{

echo '<center>
<table width="100%" border="0" class="footable">
	<thead>
	<tr height="30px" id="fondo_tabla">
    	<td><center><label id="titulo_tabla">Materias</label></center></td>
		<td width="12%"><center><label id="titulo_tabla">Lunes</label></center></td>
        <td width="12%"><center><label id="titulo_tabla">Martes</label></center></td>
		<td width="12%"><center><label id="titulo_tabla">Miercoles</label></center></td>
		<td width="12%"><center><label id="titulo_tabla">Jueves</label></center></td>
		<td width="12%"><center><label id="titulo_tabla">Viernes</label></center></td>
</tr>
</thead>';	

		  while($row=mysql_fetch_array($res)){  
echo "<tr height='30px'>";
	echo "<td><label class='etiquetita'>".$row['ASIG_NOMBRE']."</label></td>";
	echo "<td><center><a href='horarios-salones.php?materia=".$row['ASIG_ID']."&dia=Lunes' target='calificacion-alumno' onclick=\"window.open(this.href, this.target, ' width=1000, height=600, menubar=no,directories=no,location=0,resizable=no');return false;\"><img src='../img/palomita.png' ></a></center></td>";
	echo "<td><center><a href='horarios-salones.php?materia=".$row['ASIG_ID']."&dia=Martes' target='calificacion-alumno' onclick=\"window.open(this.href, this.target, ' width=1000, height=600, menubar=no,directories=no,location=0,resizable=no');return false;\"><img src='../img/palomita.png' ></a></center></td>";
	echo "<td><center><a href='horarios-salones.php?materia=".$row['ASIG_ID']."&dia=Miercoles' target='calificacion-alumno' onclick=\"window.open(this.href, this.target, ' width=1000, height=600, menubar=no,directories=no,location=0,resizable=no');return false;\"><img src='../img/palomita.png' ></a></center></td>";
	echo "<td><center><a href='horarios-salones.php?materia=".$row['ASIG_ID']."&dia=Jueves' target='calificacion-alumno' onclick=\"window.open(this.href, this.target, ' width=1000, height=600, menubar=no,directories=no,location=0,resizable=no');return false;\"><img src='../img/palomita.png' ></a></center></td>";
	echo "<td><center><a href='horarios-salones.php?materia=".$row['ASIG_ID']."&dia=Viernes' target='calificacion-alumno' onclick=\"window.open(this.href, this.target, ' width=1000, height=600, menubar=no,directories=no,location=0,resizable=no');return false;\"><img src='../img/palomita.png' ></a></center></td>";
echo"</tr>";

		  }


echo '</table>
<br>
</center>';		  
	   }
  }
?>

