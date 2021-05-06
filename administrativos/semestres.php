<?php include('validaacceso.php');?>
<div class="modal fade" id="Semestres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Semestres</label></center></h4>
      </div>
      <div class="modal-body">

  
<!--onsubmit="guardarSemestres(); return false;"-->
<form  name="semestres"  action="zeta_x0001.php" method="post"  onKeyPress="return disableEnterKey(event);">

                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#nuevosemestre" data-toggle="tab">Semestres</a></li>
                        <li><a href="#colesccionsemestres" data-toggle="tab">Coleccion de Semestres</a></li>
            
                    </ul>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="nuevosemestre">
                        <br/>

                              
                              <div class="col-xs-12 col-md-12">
                            
                                <div><label class="etiquetita">Plan de Estudios</label></div>
                                <div><select id="semestreplan" name="semestreplan" class="cajita form-control" onClick="return BuscarSemestres(this);">
                  		<option>Seleccione...</option>
					 <?php 
					 	  $con=conexion();
                          $sql="select*from plan_estudios order by plan_Fecha desc";
                          $res=mysql_query($sql,$con);
                          if(mysql_num_rows($res)==0){
                             echo '<b>No hay registros</b>';
                               }else{
                             while($row=mysql_fetch_array($res)){
                        echo'<option value="'.$row['PLAN_ID'].'">'.$row['PLAN_FECHA'].' '.$row['PLAN_NOMBRE'].'</option>'; 
						}
						}?>    
                  </select>
                                </div>&nbsp;
                              </div>
                              
                              <div class="col-xs-12 col-md-12">
                            
                                <div><label class="etiquetita">Grado del Semestre en Numero</label></div>
                                <div><input type="text" name="semestrenumero" maxlength="2"class="cajita form-control" placeholder="Ejemplo: 1" onKeyPress="return isNumberKey(event)">
                                </div>
                            &nbsp;
                              </div>
                              <div class="col-xs-12 col-md-12">
                                
                                <div><label class="etiquetita">Grado del Semestre en Letra</label></div>
                                <div><input type="text" name="semestreltra"  class="cajita form-control" placeholder="Ejemplo: Primero" onKeyPress="return isVarchar(event)"></div>
                                  &nbsp;
                              </div> 
                              <div class="col-xs-12 col-md-12">
                                
                                <div><label class="etiquetita">Numero de Materias</label></div>
                                <div><input type="text" name="semestremat"  class="cajita form-control" placeholder="Ejemplo: 8 " onKeyPress="return isNumberKey(event)"></div>
                          
                              </div> 
                              <div>
                                   <p>&nbsp;</p>   
                                     <center><input type=submit name='button' id='submit'  value='Guardar' onClick="return validarFormSemestre(this);"> <input type='reset'></center>
                                   <br/>
                                     
                              </div>               
</form>
                        </div>
                        <div class="tab-pane" id="colesccionsemestres">
                        <br/>

                             <?php include('c-semestre.php')?>
            
                        </div>
            
            			
                    </div>



<!------------------------------------------------------------------------------------->
		</div>  
      
       <div class="modal-footer">
      			<center><label class="submenu">Puede Agregar Nuevos Semestres o Editar Los Semestres Ya Existentes</label>
                </center><div id="mensajes"></div>
      </div>
    
    </div>
  </div>
</div>

