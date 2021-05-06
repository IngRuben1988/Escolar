<?php include('validaacceso.php');?>
<?php
include('../conexion/conexion2.php');
$clave=$_POST['periodo'];
$plan=$_POST['plan'];
$planes=$_POST['planes'];
$grados=$_POST['grados'];
$grupos=$_POST['grupos'];




///////////////////ciclos escolares
if(!empty($clave)){
	echo '
<select name="grupos" id="grupos" class="cajita form-control" onClick="return GruposLista(this);">
				<option>Seleccione...</option>';
		  Grupos($clave);echo' </select>';
	  }  
  function Grupos($z){
  $con=conexion();
	  $sql=" select distinct cd.DATO_CLAVE  from conjunto_datos as cd,periodos as p
			 where
			 cd.PER_ID=p.PER_ID and p.PER_ID=".$z." and cd.DATO_CLAVE<>'' order by cd.DATO_CLAVE ";
	  $res=mysql_query($sql,$con);
	  if(mysql_num_rows($res)==0){
		 echo '<b>No hay registros</b>';
		   }else{
		 while($row=mysql_fetch_array($res)){
		 echo'<option value="'.$row['DATO_CLAVE'].'">'.$row['DATO_CLAVE'].'</option>';
								
  }
}

}






///////////////////ciPlanes de Estudios
if(!empty($planes)){
	echo '
		<div><label class="etiquetita">Semestre</label></div>
		<div><select name="matsemestre" id="matsemestres" class="cajita form-control">
				<option>Seleccione...</option>';
		  buscargrados($planes);echo' </select></div>';
	  }  
 

///////////////////ciclos escolares
if(!empty($plan)){
	echo '
	<div>
	<br>
		<div><label class="etiquetita">Ciclo Escolar</label></div>
		<div><select name="gruposciclosg" id="gruposciclos" class="cajita form-control" onClick="return BuscarGrupos(this);">
				<option>Seleccione...</option>';
		  buscarciclos($plan);echo' </select></div>
	</div>';
	  }  
  function buscarciclos($b){
  $con=conexion();
	  $sql="select p.PER_ID,p.PER_FECHA_INI,p.PER_FECHA_FIN,pe.PLAN_ID,pe.PLAN_NOMBRE,pe.PLAN_FECHA 
			from periodos as p, plan_estudios as pe
			where
			p.PLAN_ID=pe.PLAN_ID and pe.PLAN_ID=".$b;
	  $res=mysql_query($sql,$con);
	  if(mysql_num_rows($res)==0){
		 echo '<b>No hay registros</b>';
		   }else{
		 while($row=mysql_fetch_array($res)){
		 echo'<option value="'.$row['PER_ID'].'">'.$row['PER_FECHA_INI'].' '.$row['PER_FECHA_FIN'].'</option>';
								
  }
}

}

///////////////// Buscamos grados

 if(!empty($grados)){
echo '
		<div>
		<div><label class="etiquetita">Grados / Semestre</label></div>
			<select name="grupossemestreg" class="cajita form-control">
       		<option>Seleccione...</option>';
	  buscargrados($grados);
	  echo ' </select>
	  		</div>
	  </div>';
	  } 
  function buscargrados($b2){
  $con=conexion();

	$sql="select s.SEM_ID,s.PLAN_ID,s.SEM_GRADO_NUMERO,s.SEM_GRADO_LETRA,pe.PLAN_ID,pe.PLAN_NOMBRE 
		from semestres as s, plan_estudios as pe
		where
		s.PLAN_ID=pe.PLAN_ID and s.PLAN_ID=".$b2;
		
	  $res=mysql_query($sql,$con);
	  if(mysql_num_rows($res)==0){
		 echo '<b>No hay registros</b>';
		   }else{  
		 while($row=mysql_fetch_array($res)){
		 echo'<option value="'.$row['SEM_ID'].'">'.$row['SEM_GRADO_NUMERO'].'° '.$row['SEM_GRADO_LETRA'].'</option>';
								
  }
}

  }
  

///////////////// Buscamos grados

 if(!empty($grupos)){
echo '
		<div class="col-xs-12 col-md-6">
		<div><label class="etiquetita">Grupos</label></div>
			<select name="gruposg" class="cajita form-control">
       		<option>Seleccione...</option>';
	  buscargrupos($grupos); echo ' </select></div>
	  </div>';
	  
echo '<div class="col-xs-6 col-md-6">
		<div><label class="etiquetita">Numero de Alumnos</label></div>
		<div><input type="text" class="cajita form-control" name="cantidadg" maxlength="2"></div>
		</div>';
/*echo '<div class="col-xs-6 col-md-3">
		<div><label class="etiquetita">Turno</label></div>
		<div><select class="cajita form-control" name="grupoturno">
				<option>Selecciona...</option>
				<option>Matutino</option>
				<option>Vespertino</option>
			</select></div>
		</div>';*/
echo'<div class="col-xs-12 col-md-12"><br></div>';
echo'<div>
  		<div><center><input type="submit" name="button" value="guardar" /> <input type="reset" value="Restaurar"/></center></div>
	  <br/>
	  </div> ';
	  } 
  function buscargrupos($b3){
  $con=conexion();

	$sql="select g.GRUPO_ID,g.GRUPO_NOMBRE,p.PER_ID,p.PER_FECHA_INI,p.PER_FECHA_FIN,pe.PLAN_ID,pe.PLAN_NOMBRE,pe.PLAN_FECHA
			from asig_grupos as g, periodos as p, plan_estudios as pe
			where 
			g.PER_ID=p.PER_ID and p.PLAN_ID=pe.PLAN_ID and g.PER_ID=".$b3."
			
			order by grupo_nombre";
	  $res=mysql_query($sql,$con);
	  if(mysql_num_rows($res)==0){
		 echo '<b>No hay registros</b>';
		   }else{  
		 while($row=mysql_fetch_array($res)){
		 echo'<option value="'.$row['GRUPO_ID'].'">'.$row['GRUPO_NOMBRE'].'</option>';
								
  }
}

  }
///////////////////////////////////////////////////
  

 
?>