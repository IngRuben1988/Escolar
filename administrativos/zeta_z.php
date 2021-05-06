<?php ///////////////////////////////////////////div para poner calificaciones 
		include('../conexion/conexion2.php');
	  $con=conexion();
      $sql="			
select  ap.ALUM_CURP,ap.ALUM_MATRICULA,ap.ALUM_PATERNO,ap.ALUM_MATERNO,ap.ALUM_NOMBRE,ag.GRUPO_NOMBRE,
			s.SEM_GRADO_NUMERO,s.SEM_GRADO_LETRA,p.PER_FECHA_INI,p.PER_FECHA_FIN,cd.DATO_CLAVE,
			pe.PLAN_FECHA,pe.PLAN_NOMBRE
			from conjunto_datos as cd, alum_personas as ap,asig_grupos as ag,
			semestres as s,periodos as p,plan_estudios as pe
			where
			cd.ALUM_CURP=ap.ALUM_CURP and
			cd.GRUPO_ID=ag.GRUPO_ID and
			cd.SEM_ID= s.SEM_ID and
			cd.PER_ID=p.PER_ID and 
			p.PLAN_ID=pe.PLAN_ID and 
			cd.DATO_CLAVE='1A-2014-09-01'";
			
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($ok=mysql_fetch_array($res)){	
	
	echo'
<div class="modal fade" id="'.$ok['ALUM_MATRICULA'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Asistencia</label></center></h4>
      </div>
      <div class="modal-body">
	  
	  
<table width="100%" height="60px"border="1" class="menu">
    <td width="10%"><center><label class="etiquetita">Alumno</label></center></td>
    <td width="60%"><center><label class="etiquetita">'.$ok['ALUM_PATERNO'].' '.$ok['ALUM_MATERNO'].' '.$ok['ALUM_NOMBRE'].'</label></center></td>
	<td width="30%"></td>
</table>
<br/>
<form action="" method="post" onSubmit="return validarFormAlumno(this);">
<input type="hidden" name="matricula" value="'.$ok['ALUM_MATRICULA'].'" readonly/>
<table width="100%" border="1">

<tr class="menu">
    <td><center><label class="etiquetita">Calificación Primer Bimestre</label></center></td>
    <td><center><label class="etiquetita">Asistencias Primer Bimestre</label></center></td>
    <td><center><label class="etiquetita">Calificación Segundo Bimestre</label></center></td>
    <td><center><label class="etiquetita">Asistencias Segundo Bimestre</label></center></td>
    <td><center><label class="etiquetita">Calificación Tercer Bimestre</label></center></td>
    <td><center><label class="etiquetita">Asistencias Tercer Bimestre</label></center></td>

  </tr>
  <tr>
 
</table>
</form>
		 <p>&nbsp;</p>   
              <center><input type="submit" name="button" id="submit"  value="Guardar"></center>
          <br/>
 
 
       </div>

       <div class="modal-footer">
      			<center><label class="submenu">Ingrese la calificacion y la Asistencia del Alumno durante el '.$parcial.'</label></center>
                
      </div>
    
    </div>
  </div>
</div>

	
	';
	}
}

 
  $con=conexion();
  $sql="select pe.PLAN_NOMBRE,ce.PER_FECHA_INI,ce.PER_FECHA_FIN,p.SEC_CURP,p.PARCIAL,p.FECHA_APERTURA,p.FECHA_CLAUSURA
	from puertos as p, periodos as ce, plan_estudios as pe 
	where 
	p.PER_ID=ce.PER_ID and
	ce.PLAN_ID=pe.PLAN_ID and 
	
	(now()>=p.FECHA_APERTURA or now()<=p.FECHA_CLAUSURA)";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($ok2=mysql_fetch_array($res)){
			 $planestudios=$ok2['PLAN_NOMBRE'];
			 $cicloini=$ok2['PER_FECHA_INI'];
			 $ciclofin=$ok2['PER_FECHA_FIN'];
			 $parcial=$ok2['PARCIAL'];
			 $apertura=$ok2['FECHA_APERTURA'];
			 $clausura=$ok2['FECHA_CLAUSURA'];
			 }
			 
			 
		

    echo'<td>';if($parcial=="Bimestre 1"){
		echo'<select name="calificacion" class="cajita form-control" >

        	 </select>';}else{
			echo '<label class="etiquetita">'.$parcial.'</label>';
			}
			echo'</td>
    <td>';if($parcial=="Bimestre 1"){
		echo'<select name="asistencia" class="cajita form-control">

            </select>';}else{
			echo '<label class="etiquetita">10</label>';
			}
			echo'</td>
    <td>';if($parcial=="Bimestre 2"){
		echo'<select name="calificacion" class="cajita form-control">
 
             </select>';}else{
			echo'<label class="etiquetita">10</label>';
			}
			echo'</td>
    <td>';if($parcial=="Bimestre 2"){
		echo'<select name="asistencia" class="cajita form-control">
            
            </select>';}else{
			echo'<label class="etiquetita">10</label>';
			}echo'</td>
    <td>';if($parcial=="Bimestre 3"){
		echo'<select name="calificacion" class="cajita form-control">

             </select>';}else{
			echo'<label class="etiquetita">10</label>';
			}
		
		echo'</td>
    <td>';if($parcial=="Bimestre 3"){
		echo'<select name="asistencia" class="cajita form-control">

             </select>';}else{
			echo'<label class="etiquetita">10</label>';
		}
		
		echo'</td>
  </tr>';}

?>
