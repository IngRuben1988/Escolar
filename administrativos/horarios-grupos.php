<?php include('validaacceso.php');?>
<?php include('header.php')?>


<form method="post" action="reporte/lista-de-asistencia.php" accept-charset="UTF-8"   onKeyPress="return disableEnterKey(event);">     
<div class="container">

                <div class="col-xs-6 col-md-4">
                <br>
         
                  <div><label class="etiquetita">Ciclos Escolares</label></div>
                  <div><select name="cdperiodo" id="cdperiodo" class="cajita form-control"  onChange="return BuscarGruposHorarios(this);">
                  	   <option>Seleccione...</option>
                    <?php       
					  $con=conexion();
					  $sql=" select p.PER_ID,concat(p.PER_FECHA_INI,' ',p.PER_FECHA_FIN) as PERIODO,
							 pe.PLAN_ID,pe.PLAN_NOMBRE,pe.PLAN_FECHA 
							 from periodos as p,plan_estudios as pe
							 where
							 p.PLAN_ID=pe.PLAN_ID 
							 and now()>=p.PER_FECHA_INI 
							 and now()<=p.PER_FECHA_FIN";
					  $res=mysql_query($sql,$con);
					  if(mysql_num_rows($res)==0){
						 echo '<b>No hay registros</b>';
						   }else{
						 while($row=mysql_fetch_array($res)){

					echo "<option value=".$row['PER_ID'].">".$row['PERIODO']."</option>";
				
				  }
				}
				?>
                  </select></div>
                </div>

                 <div class="col-xs-6 col-md-4">
                 	<br>
                      <div><label class="etiquetita">Grupos</label></div>
                      <div id="ResultGrupos"></div>
                  	<br>
                </div>
                <div class="col-xs-6 col-md-4">
                 	<br>
                      <div><label class="etiquetita">Materia</label></div>
                      <div><select name="hmateria" id="hmateria" class="cajita form-control"  onChange="return BuscarGruposHorarios(this);">
                  	   <option>Seleccione...</option>
                    <?php       
					  $con=conexion();
					  $sql=" select *from materias";
					  $res=mysql_query($sql,$con);
					  if(mysql_num_rows($res)==0){
						 echo '<b>No hay registros</b>';
						   }else{
						 while($row=mysql_fetch_array($res)){

					echo "<option value=".$row['ASIG_ID'].">".$row['ASIG_NOMBRE']."</option>";
				
				  }
				}
				?>
                  </select></div>
                  	<br>
                </div>
                
                <div class="col-md-2"></div>

				<div class="col-xs-12 col-md-12" id="ListaGrupos">
               
                </div>


</div>
</form>
<?php include('../footer.php')?>