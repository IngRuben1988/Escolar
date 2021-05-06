<?php include('validaacceso.php');?>
<div class="modal fade" id="Curricula" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Curricula</label></center></h4>
      </div>
      <div class="modal-body">
 <form name="pec" action="" onsubmit="guardarCurricula(); return false" onKeyPress="return disableEnterKey(event);" >    
</br>

         <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#PlanActual" data-toggle="tab">Curricula Actual</a></li>
            <!--<li><a href="#PlanNuevo" data-toggle="tab">Agregar Curricula</a></li>-->

        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="PlanActual">
            <br/>
		
 				<?php include('c-plan-estudios-completo.php')?>
            </div>            
            
            <div class="tab-pane" id="PlanNuevo">

                <br/>
                <div class="col-xs-12 col-md-12">
                  	
                      <div><label class="etiquetita">Semestres</label></div>
                      <div><select name="planessemestre" class="cajita form-control">
                      <?php
					  echo '<option>Seleccione...</option>';  
                      $con=conexion();
                      $sql="select * from semestres order by SEM_GRADO_NUMERO";
					  $res=mysql_query($sql,$con);
					  if(mysql_num_rows($res)==0){
						 echo '<b>No hay registros</b>';
						   }
					   else{
						   
						   while ($row=mysql_fetch_array($res)){
							   
							   echo'<option value="'.$row['SEM_ID'].'">'.$row['SEM_GRADO_NUMERO'].' '.$row['SEM_GRADO_LETRA'].'</option>';
							   
							   }
						   }
						  
                       ?>
					  </select></div>
                       
                   </div>
                   
                   <div class="col-xs-12 col-md-12">
                   		<div><label class="etiquetita">Materias</label></div>
                  		<div><select name="planesmateria" class="cajita form-control">
					    <?php 
						echo '<option>Seleccione...</option>'; 
                      $con=conexion();
                      $sql="select * from Materias ";
					  $res=mysql_query($sql,$con);
					  if(mysql_num_rows($res)==0){
						 echo '<b>No hay registros</b>';
						   }
					   else{
						   
						   while ($row=mysql_fetch_array($res)){
							   
							   echo'<option value="'.$row['ASIG_ID'].'">'.$row['ASIG_NOMBRE'].'</option>';
							   
							   }
						   }
						  
                       ?>                     
                        </select></div>
                   </div>
                   
                   <div class="col-xs-12 col-md-12">
                   		<div><label class="etiquetita">Plan de Estudios</label></div>
                  		<div><select name="planes" class="cajita form-control">
                                                 <?php
					  echo '<option>Seleccione...</option>'; 
                      $con=conexion();
                      $sql="select * from plan_estudios order by plan_fecha ";
					  $res=mysql_query($sql,$con);
					  if(mysql_num_rows($res)==0){
						 echo '<b>No hay registros</b>';
						   }
					   else{
						   
						   while ($row=mysql_fetch_array($res)){
							   
							   echo'<option value="'.$row['PLAN_ID'].'">'.$row['PLAN_NOMBRE'].'   del Año: '.$row['PLAN_FECHA'].'</option>';
							   
							   }
						   }
						  
                       ?>  
                        </select></div>
    				</div>
                	<div>
                <p>&nbsp;</p>   
                     <center><input type="submit" name='button' id='enviar'  value='enviar'> <input type='reset'></center>
                    <br/>
                 
                </div>
             
                
                 

			  </div>
            

        </div>
 
  </form>
 

 
 <!--------------------------------------------------------------------------------------------->     
      </div> 
      
       <div class="modal-footer">
       				
      			<!--<center><label class="submenu">Puede Agregar Nuevas Materias o Editar Las Materias Ya Existentes</label></center>-->
                <div id="mensaje"></div>
      </div>
    
    </div>
  </div>
</div>

