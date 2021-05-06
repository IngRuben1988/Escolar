<?php include('validaacceso.php');?>
<?php  include('header.php')?>

<div class="container">
    <div id="content">
  <br/>      
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
             <li class="active"><a class="btn btn-primary btn-lg" href="#horarios" data-toggle="tab">Nuevo Horario</a></li>
             <li><a class="btn btn-primary btn-lg" href="#docente" data-toggle="tab">Ver Horarios de Salones</a></li>
             <li><a class="btn btn-primary btn-lg" href="#orange" data-toggle="tab">Horas Disponibles</a></li>
        </ul>
        
        <div id="my-tab-content" class="tab-content">
        
        
            <div class="tab-pane active" id="horarios">
            	<br>
                    <div class="col-xs-6 col-md-4">
                        <div><label class="etiquetita">Planes de Estudios</label></div>
                        <div><select class="cajita form-control" name="horplan" id="horplan" onChange="return BuscarPlanHorarios(this);"><?php 
                                $con=conexion();
                                $sql="select *from plan_estudios order by plan_id";
                           $res=mysql_query($sql,$con);
                                if(mysql_num_rows($res)==0){
                                   echo '<b>No hay registros</b>';
                                   }else{
								echo '<option>Seleccione...</option>';
                                   while($row=mysql_fetch_array($res)){
                               echo'<OPTION VALUE="'.$row['PLAN_ID'].'">'.$row['PLAN_FECHA'].' '.$row['PLAN_NOMBRE'].'</OPTION>';
                               }
                        }
                        
                        
                        ?></select></div>
                    </div>            
            		
                    <div class="col-xs-6 col-md-4">
                          <div><label class="etiquetita">Semestres</label></div>
                          <div id="ResultSemestre"></div>

                    </div>
                    
            		<div class="col-xs-12 col-md-12">
    					<br/>
                          <div><label class="etiquetita">Materias</label></div>
                          <div id="ResultMaterias"></div>

                    </div>

            </div>
            <div class="tab-pane" id="red">
            <br/>

            <div class="col-xs-12 col-md-12 menu">
				
            	<div align="center" class="col-xs-9 col-md-9">
                	<label class="etiquetita3">Asignar Horarios Docentes</label>
                </div>
                <!---<div align="center" class="col-xs-3 col-md-3">
                	<a class="btn"data-toggle="modal" data-target="#asighor">
                    	<img src="../img/nuevo.png" width="85px" height="50px">
                    </a>
                </div>-->
				  
            </div>
        <p>&nbsp;<p> 
        
       
       
            <div class="tab-pane active" id="red">
                    <div class="col-xs-6 col-md-4">
                        <div><label class="etiquetita">Horarios</label></div>
                        <div><select class="cajita form-control" name="horhorario">
								<option>Seleccione...</option>
								<option>Sin Clases</option>
						<?php 
                                $con=conexion();
                                $sql="select *from horarios order by hor_hora";
                           $res=mysql_query($sql,$con);
                                if(mysql_num_rows($res)==0){
                                   echo '<b>No hay registros</b>';
                                   }else{

                                   while($row=mysql_fetch_array($res)){
                               echo'<OPTION VALUE="'.$row['HOR_ID'].'">'.$row['HOR_HORA'].'</OPTION>';
                               }
                        }
                        
                        
                        ?></select></div>
                    </div>

					
                    <div class="col-xs-6 col-md-4">

                          <div><label class="etiquetita">Ciclos Escolares</label></div>
                          <div><select name="cdperiodo" id="cdperiodo" class="cajita form-control"  onChange="return BuscarGruposHorarios(this);">
                               <option>Seleccione...</option>
                               <option>Sin Clases</option>
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

                      <div><label class="etiquetita">Grupos</label></div>
                      <div id="ResultGrupos"></div>
                  	<br>
                </div>


				<div class="col-xs-12 col-md-12" id="ListaGrupos">
               
                </div>

                    
                    
                     
            </div>

            </div>
            <div class="tab-pane" id="orange">
              
              <?php include('c-horarios.php')?>
            </div>
			
            <div class="tab-pane" id="docente">
            
                  <div class="col-xs-6 col-md-6"><br>
                  <div><center><label class="etiquetita">Ciclo Escolar</label></center></div>
                  <div><select class="cajita form-control" name="hor" id="hor" onchange="return SalonesCHorario(this);">
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
                    <div class="col-xs-6 col-md-6" id="horariosalon"></div><BR>
					<div class="col-xs-12 col-md-12" id="horario"></div>
                    </div>

            </div>

			
        </div>
    </div>
</div>

       

<?php  include('../footer.php')?>