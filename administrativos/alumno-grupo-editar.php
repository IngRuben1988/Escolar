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
		sem.SEM_GRADO_LETRA,ag.GRUPO_NOMBRE,concat(p.PER_FECHA_INI,' ',p.PER_FECHA_FIN)AS PERIODO
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
<table class="footable" width="40%" border="0">
<thead>
	<tr height="30px" id="fondo_tabla">
    	<td width="10%"><center><label id="titulo_tabla">Semestre</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Grupo</label></center></td>
        <td width="20%"><center><label id="titulo_tabla">Turno</label></center></td>
		<td><center><label id="titulo_tabla">Ciclo Escolar</label></center></td>
</tr>
</thead>';	

		  while($row=mysql_fetch_array($res)){  
		  	  $consecutivo=$row['DATO_CONSECUTIVO'];	
			  $grado=$row['SEM_GRADO_NUMERO'];
			  $gradoletra=$row['SEM_GRADO_LETRA'];
			  $grupo=$row['GRUPO_NOMBRE'];
			  $periodo=$row['PERIODO'];
			  
			  
		  }
echo "<td><center><label class='etiquetita2'>".$grado." ".$gradoletra."</label></center></td>";
echo "<td><center><label class='etiquetita2'>".$grupo."</center></td>";
echo "<td><center><label class='etiquetita2'>Vespertino</center></td>";
echo "<td><center><label class='etiquetita2'>".$periodo."</center></td>";
echo '</tr></table>
<br>
</center>';		  
	   }

  ////////////////////////////////Tabla de alumnos y salones//////////////////////////////////////
  $sql="select ap.ALUM_MATRICULA,ap.ALUM_NOMBRE,ap.ALUM_PATERNO,ap.ALUM_MATERNO,
cd.DATO_ID,cd.ALUM_CURP,cd.DATO_CONSECUTIVO,cd.DATO_CLAVE,sem.SEM_GRADO_NUMERO,sem.SEM_ID,ag.GRUPO_ID,
		p.PER_ID,sem.SEM_GRADO_LETRA,ag.GRUPO_NOMBRE,concat(p.PER_FECHA_INI,' ',p.PER_FECHA_FIN)AS PERIODO
		from conjunto_datos as cd , semestres as sem,asig_grupos as ag,periodos as p, alum_personas as ap
		where  cd.GRUPO_ID=ag.GRUPO_ID and cd.SEM_ID=sem.SEM_ID 
		and cd.PER_ID=p.PER_ID and ap.ALUM_CURP=cd.ALUM_CURP and cd.DATO_CLAVE='".$b."' 
		order by cd.DATO_CONSECUTIVO";
		
  $res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	  
	 
	  ////////////////////////////////////////////////////////////////////////////////////////////////
	  
	   $sql="select cd.DATO_ID,cd.ALUM_CURP,cd.DATO_CONSECUTIVO,cd.DATO_CLAVE,sem.SEM_GRADO_NUMERO,sem.SEM_ID,ag.GRUPO_ID,
		p.PER_ID,sem.SEM_GRADO_LETRA,ag.GRUPO_NOMBRE,concat(p.PER_FECHA_INI,' ',p.PER_FECHA_FIN)AS PERIODO
		from conjunto_datos as cd , semestres as sem,asig_grupos as ag,periodos as p
		where  cd.GRUPO_ID=ag.GRUPO_ID and cd.SEM_ID=sem.SEM_ID 
		and cd.PER_ID=p.PER_ID and cd.DATO_CLAVE='".$b."' 
		order by cd.DATO_CONSECUTIVO";
		
		 $res=mysql_query($sql,$con);
  		if(mysql_num_rows($res)==0){ 

		}else{
		while($row2=mysql_fetch_array($res)){
			
			  $clave=$row2['DATO_CLAVE'];
			  $consecutivo=$row2['DATO_CONSECUTIVO'];
			  $datoid=$row2['DATO_ID'];
			  $gradonumero=$row2['SEM_GRADO_NUMERO'];
			  $gradoletra=$row2['SEM_GRADO_LETRA'];
			  $gradoid=$row2['GRUPO_ID'];
			  $gruponombre=$row2['GRUPO_NOMBRE'];
		}

	echo'
<div class="modal fade" id="'.$clave.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Nuevo Alumno para el Grupo</label></center></h4>
      </div>
      <div class="modal-body">';
	  
	  echo'
<form name="alumnosgrupos" action=""  onSubmit="AlumnoGrupo(); return false;" onKeyPress="return disableEnterKey(event);" >
<center>
<table  class="footable" width="100%" border="0" >
	<thead>
	<tr height="30px" id="fondo_tabla">
    	<td><center><label id="titulo_tabla">Matricula/Curp</label></center></td>
		<td><center><label id="titulo_tabla">Clave del Salon</label></center></td>
        <td><center><label id="titulo_tabla">Numero de Lista</label></center></td>
		<td><center><label id="titulo_tabla">Semestre</label></center></td>
		<td><center><label id="titulo_tabla">Grupo</label></center></td>
	</tr>
	</thead>	  
		<td><center><label class="etiquetita"><input type="text" name="matriculass" id="matriculas" class="cajita form-control" maxlength="18" onKeyPress="return BuscarMisAlumnos(this);"/></label></center></td>"
		<td><center><label class="etiquetita">'.$clave.'</label></center></td>"
		<td><center><label class="etiquetita"><select name="consecutivo" class="cajita form-control">
					<option>Seleccione...</option>';
		
		for($i=1;$i<=$consecutivo;$i++){
			
			echo'<option value="'.$i.'"><label class="etiquetita">'.$i.'</label></option>';
			
			}
		
   echo '</select></label></center></td>
   		<td><center><label class="etiquetita">'.$gradonumero.' '.$gradoletra.'</label></center></td>"
		<td><center><label class="etiquetita">'.$gruponombre.'</label></center></td>"
	</tr>
</table>

<input type="hidden" name="datoclave" class="cajita form-control" value="'.$clave.'"  readonly/>

	</center> 
 <br>
<div id="misalumnos"></div> 
</form>
	  ';
	  
echo '</div>

       <div class="modal-footer">
      			<center><label class="submenu">Ingrese Nuevos Alumnos A los Salones</label></center>
                
      </div>
    
    </div>
  </div>
</div>';		

			

		
		}
echo '<center><center><a href="" data-toggle="modal" data-target="#'.$clave.'"><img src="../img/nuevo.png" width="10%" height="10%"/></a></center></center>';		

	  ////////////////////////////////////////////////////////////////////////////////////////////////
	  }
	  else{

echo '<center>
<table class="footable scrolling" width="100%" border="0">
<thead>
	<tr height="50px" id="fondo_tabla">
    	<td><center><label id="titulo_tabla">No.</label></center></td>
		<td width="10%"><center><label id="titulo_tabla">Matricula</label></center></td>
        <td width="15%"><center><label id="titulo_tabla">Clave Unica de Registro de Poblaci??n(CURP)</label></center></td>
		<td><center><label id="titulo_tabla">Primer Apellido</label></center></td>
		<td><center><label id="titulo_tabla">Segundo Apellido</label></center></td>
		<td><center><label id="titulo_tabla">Nombre(s)</label></center></td>
        <td><center><label id="titulo_tabla">Clave del Salon</label></center></td>
        <td><center><label id="titulo_tabla">Agrar al Salon</label></center></td>
</tr>
</thead>';	

		  while($row=mysql_fetch_array($res)){  
		  			
			echo "<tr>";
			echo "<td><center><label class='etiquetita2'>".$row['DATO_CONSECUTIVO']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['ALUM_MATRICULA']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['ALUM_CURP']."</label></center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['ALUM_PATERNO']."</center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['ALUM_MATERNO']."</center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['ALUM_NOMBRE']."</center></td>";
			echo "<td><center><label class='etiquetita2'>".$row['DATO_CLAVE']."</label></center></td>";
			echo "<td><center><a href='' data-toggle='modal' data-target='#".$row['DATO_CLAVE']."'><img src='../img/editar.png' width='25%' height='22%'/></a></center></td>";
			echo "</tr>";	
			  $clave=$row['DATO_CLAVE'];
			  $datoid=$row['DATO_ID'];
			  $gradonumero=$row['SEM_GRADO_NUMERO'];
			  $gradoletra=$row['SEM_GRADO_LETRA'];
			  $gradoid=$row['GRUPO_ID'];
			  $gruponombre=$row['GRUPO_NOMBRE'];

			  
		  }
echo '</table>
<br>
</center>';

	echo'
<div class="modal fade" id="'.$clave.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Nuevo Alumno para el Grupo</label></center></h4>
      </div>
      <div class="modal-body">';
	  
	  echo'
<form name="alumnosgrupos" action=""  onSubmit="AlumnoGrupo(); return false;" onKeyPress="return disableEnterKey(event);" >
<center>
<table width="100%" border="0" class="footable">
<thead>
	<tr height="30px" id="fondo_tabla">
    	<td><center><label id="titulo_tabla">Matricula/Curp</label></center></td>
		<td><center><label id="titulo_tabla">Clave del Salon</label></center></td>
        <td><center><label id="titulo_tabla">Numero de Lista</label></center></td>
		<td><center><label id="titulo_tabla">Semestre</label></center></td>
		<td><center><label id="titulo_tabla">Grupo</label></center></td>
	</tr>
</thead>	  
		<td><center><label class="etiquetita"><input type="text" name="matriculass" id="matriculas" class="cajita form-control" maxlength="18" onKeyPress="return BuscarMisAlumnos(this);"/></label></center></td>"
		<td><center><label class="etiquetita">'.$clave.'</label></center></td>"
		<td><center><label class="etiquetita"><select name="consecutivo" class="cajita form-control">
					<option>Seleccione...</option>';
		
		for($i=1;$i<=$consecutivo;$i++){
			
			echo'<option value="'.$i.'"><label class="etiquetita">'.$i.'</label></option>';
			
			}
		
   echo '</select></label></center></td>
   		<td><center><label class="etiquetita">'.$gradonumero.' '.$gradoletra.'</label></center></td>"
		<td><center><label class="etiquetita">'.$gruponombre.'</label></center></td>"
	</tr>
</table>

<input type="hidden" name="datoclave" class="cajita form-control" value="'.$clave.'"  readonly/>

	</center> 
 <br>
<div id="misalumnos"></div> 
</form>
	  ';
	  
echo '</div>

       <div class="modal-footer">
      			<center><label class="submenu">Ingrese Nuevos Alumnos A los Salones</label></center>
                
      </div>
    
    </div>
  </div>
</div>';		  
	   }
  }
?>




