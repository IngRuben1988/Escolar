<?php
include('validaacceso.php');
 include('header.php')?>


<?php
      $con=conexion();
      $sql="select  ap.ALUM_CURP,ap.ALUM_PATERNO,ap.ALUM_MATERNO,ap.ALUM_NOMBRE,ag.GRUPO_NOMBRE,
			s.SEM_GRADO_NUMERO,s.SEM_GRADO_LETRA,p.PER_FECHA_INI,p.PER_FECHA_FIN,cd.DATO_CLAVE
			from conjunto_datos as cd, alum_personas as ap,asig_grupos as ag,
			semestres as s,periodos as p
			where
			cd.ALUM_CURP=ap.ALUM_CURP and
			cd.GRUPO_ID=ag.GRUPO_ID and
			cd.SEM_ID= s.SEM_ID and
			cd.PER_ID=p.PER_ID and 
			cd.DATO_CLAVE='1A-2014-09-01'";
			
      $res=mysql_query($sql,$con);
	  $numero=mysql_num_rows($res);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else
		   while($row2=mysql_fetch_array($res)){
			   $gradon=$row2['SEM_GRADO_NUMERO'];
			   $gradol=$row2['SEM_GRADO_LETRA'];
			   $grupo=$row2['GRUPO_NOMBRE'];
			   $plan=$row2['PLAN_FECHA'];
			   }
echo'

 <div class="container">
				<br/>
            	<div class="col-xs-3 col-md-4">
                	<label class="etiquetita">Semestre: '.$gradon.' '.$gradol.'</label>
                </div>
				<div class="col-xs-3 col-md-4">
                	<label class="etiquetita">Grupo: '.$grupo.'</label>
                </div>
				<div class="col-xs-3 col-md-4">
                	<label class="etiquetita">Plan de Estudios: '.$plan.'</label>

                </div>
</div>';

	?>			

<div class="container">
<br/>
<center>
<table width="100%" border="1">
  <tr height="30px" id="fondo_tabla">
  		<!--<td><center><label id="titulo_tabla">No.</label></center></td>-->
		<td><center><label id="titulo_tabla">Apellido Paterno</label></center></td>
        <td><center><label id="titulo_tabla">Apellido Materno</label></center></td>
        <td><center><label id="titulo_tabla">Nombre</label></center></td>
        <td colspan="31"><center><label id="titulo_tabla">Fechas</label></center></td>

	</tr>

<?php 
	  $con=conexion();
      $sql="select ap.ALUM_MATRICULA, ap.ALUM_PATERNO,ap.ALUM_MATERNO,ap.ALUM_NOMBRE,ag.GRUPO_NOMBRE,s.SEM_GRADO_NUMERO,s.SEM_GRADO_LETRA, pe.PLAN_FECHA 
			from conjunto_datos as cd, alum_personas as ap,asig_grupos as ag,
			semestres as s,plan_estudios as pe
			where
			cd.ALUM_CURP=ap.ALUM_CURP and
			cd.GRUPO_ID=ag.GRUPO_ID and
			cd.SEM_ID= s.SEM_ID and
			cd.PLAN_ID=pe.PLAN_ID";
      $res=mysql_query($sql,$con);
	  $numero=mysql_num_rows($res);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){
	 
    echo "<tr>";
	
	//echo '<td><center><label class="etiquetita">'.$numero.'</label></center></td>';
  	echo "<td><label class=''>".$row['ALUM_PATERNO']."</label></center></td>";
	echo "<td><label class=''>".$row['ALUM_MATERNO']."</label></center></td>";
	echo "<td><label class=''>".$row['ALUM_NOMBRE']."</label></center></td>";
	echo '<td><center><a href="" data-toggle="modal" data-target="#'.$row['ALUM_MATRICULA'].'">Asistencia</a></center></td>';
	echo '</tr>';
  }

}
?>   
</table> 
</center>
</div>
<?php 
	  $con=conexion();
      $sql="select ap.ALUM_MATRICULA, ap.ALUM_PATERNO,ap.ALUM_MATERNO,ap.ALUM_NOMBRE,ag.GRUPO_NOMBRE,s.SEM_GRADO_NUMERO,s.SEM_GRADO_LETRA, pe.PLAN_FECHA 
			from conjunto_datos as cd, alum_personas as ap,asig_grupos as ag,
			semestres as s,plan_estudios as pe
			where
			cd.ALUM_CURP=ap.ALUM_CURP and
			cd.GRUPO_ID=ag.GRUPO_ID and
			cd.SEM_ID=s.SEM_ID and
			cd.PLAN_ID=pe.PLAN_ID";
      $res=mysql_query($sql,$con);
	  $numero=mysql_num_rows($res);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
         while($row=mysql_fetch_array($res)){	
	
	echo'
<div class="modal fade" id="'.$row['ALUM_MATRICULA'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Asistencia</label></center></h4>
      </div>
      <div class="modal-body">
	  
	  
<table width="100%" height="60px"border="1" class="menu">
    <td width="10%"><center><label class="etiquetita">Alumno</label></center></td>
    <td width="60%"><center><label class="etiquetita">'.$row['ALUM_PATERNO'].' '.$row['ALUM_MATERNO'].' '.$row['ALUM_NOMBRE'].'</label></center></td>
	<td width="30%"></td>
</table>
<br/>
<form action="" method="post" onSubmit="return validarFormAlumno(this);">
<input type="hidden" name="matricula" value="'.$row['ALUM_MATRICULA'].'" readonly/>
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
  

    <td><select name="calificacion1" class="cajita form-control">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select></td>
    <td><select name="asistencia1" class="cajita form-control">
            <option value="0">0%</option>
            <option value="1">10%</option>
            <option value="2">20%</option>
            <option value="3">30%</option>
            <option value="4">40%</option>
            <option value="5">50%</option>
            <option value="6">60%</option>
            <option value="7">70%</option>
            <option value="8">80%</option>
            <option value="9">90%</option>
            <option value="10">100%</option>
        </select></td>
    <td><select name="calificacion2" class="cajita form-control">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select></td>
    <td><select name="asistencia2" class="cajita form-control">
            <option value="0">0%</option>
            <option value="1">10%</option>
            <option value="2">20%</option>
            <option value="3">30%</option>
            <option value="4">40%</option>
            <option value="5">50%</option>
            <option value="6">60%</option>
            <option value="7">70%</option>
            <option value="8">80%</option>
            <option value="9">90%</option>
            <option value="10">100%</option>
        </select></td>
    <td><select name="calificacion3" class="cajita form-control">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select></td>
    <td><select name="asistencia3" class="cajita form-control">
            <option value="0">0%</option>
            <option value="1">10%</option>
            <option value="2">20%</option>
            <option value="3">30%</option>
            <option value="4">40%</option>
            <option value="5">50%</option>
            <option value="6">60%</option>
            <option value="7">70%</option>
            <option value="8">80%</option>
            <option value="9">90%</option>
            <option value="10">100%</option>
        </select></td>
  </tr>
 
</table>
</form>
		 <p>&nbsp;</p>   
              <center><input type="submit" name="button" id="submit"  value="Guardar"></center>
          <br/>
 
 
       </div>

       <div class="modal-footer">
      			<center><label class="submenu">Ingrese la Asistencia del Alumno</label></center>
                
      </div>
    
    </div>
  </div>
</div>

	
	';
	}
}?>
    
<?php include('../footer.php');?>