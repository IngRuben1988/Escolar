<?php include('validaacceso.php');?>
<?php
include('../conexion/conexion2.php');
$clave=$_POST['periodo'];
$ciclo=$_POST['ciclos'];
$horarios=$_POST['horarios'];


///////////////////ciclos escolares
if(!empty($clave)){
	echo '
<select name="grupos" id="grupos" class="cajita form-control" onClick="return GruposListaHorarios(this);">
				<option>Seleccione..</option>';
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

///////////////////ciclos escolares
if(!empty($ciclo)){
	echo'<br><div><center><label class="etiquetita">Salon</label></center></div>';
	echo '
<div><select name="grupos" id="grupos" class="cajita form-control" onClick="return Horario(this);">
				<option>Seleccione..</option>';
		  GruposHorarios($ciclo);echo'</select>';
	  }  
  function GruposHorarios($z){
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
  
 ///////////////////Horarios de Los Salones
if(!empty($horarios)){
			echo'<br>';
		  Horarios($horarios);
	  }  
  function Horarios($z){
      $con=conexion();
	  $sql="SELECT * FROM  consulta_mis_materias WHERE DATO_CLAVE='".$z."' ORDER BY ASIG_NOMBRE DESC";
	  $res=mysql_query($sql,$con);
	  if(mysql_num_rows($res)==0){
		 echo '<b>No hay registros</b>';
		   }else{
		echo'<table width="100%" border="0" class="footable">
				<thead> 
		 		<tr height="30px"  id="fondo_tabla">
					<td><center><label id="titulo_tabla">Materia</label></center></td>
					<td><center><label id="titulo_tabla">Lunes</label></center></td>
					<td><center><label id="titulo_tabla">Martes</label></center></td>
					<td><center><label id="titulo_tabla">Miercoles</label></center></td>
					<td><center><label id="titulo_tabla">Jueves</label></center></td>
					<td><center><label id="titulo_tabla">Viernes</label></center></td>
				</tr>
				</thead>';
		 while($row=mysql_fetch_array($res)){
			 echo'<tr height="60px">
			          <td width="20%"><center>'.$row['ASIG_NOMBRE'].'</center></td>';
				 echo'<td width="15%"><center>'.$row['LUNES'].'</center></td>';
				 echo'<td width="15%"><center>'.$row['MARTES'].'</center></td>';
				 echo'<td width="15%"><center>'.$row['MIERCOLES'].'</center></td>';
				 echo'<td width="15%"><center>'.$row['JUEVES'].'</center></td>';
				 echo'<td width="15%"><center>'.$row['VIERNES'].'</center></td>';
		  } 
		  	echo'</tr>';
		  echo'</table><BR>';
	    }

		
}
 
?>