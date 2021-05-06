<?php include('validaacceso.php');?>
<div class="modal fade" id="Materias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Materias</label></center></h4>
      </div>
      <div class="modal-body">
        
</br>
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#nuevamateria" data-toggle="tab">Nueva Materia</a></li>
            <li><a href="#coleccionmaterias" data-toggle="tab">Materias Guardadas</a></li>

        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="nuevamateria">
            <br/><!--onsubmit="guardarMateria(); return false;"-->
			<form name="materias" action="zeta_x0001.php" method="post"   onKeyPress="return disableEnterKey(event);">
              <div class="col-xs-12 col-md-6">
                   <div> <label class="etiquetita">Materia</label></div>
                   <div> <input type="text" name="matmateria"  class="cajita form-control" placeholder="Ejemplo: Historia Universal"></div>
              	   <br/>
              </div>
              <div class="col-xs-12 col-md-6">
                  <div> <label class="etiquetita">Clasificación</label></div>
                  <div><select class="cajita form-control" name="matcalsificacion">
                  	<option value="Psicopedagógico">Selccione...</option>
                    <option value="Psicopedagógico">Psicopedagógico</option>
                    <option value="Preparación para la Enseñanza y el Aprendizaje">Preparación para la Enseñanza y el Aprendizaje</option>
                    <option value="Lengua Adicional y Tecnologías de la Información y la Comunicación">Lengua Adicional y Tecnologías de la Información y la Comunicación</option>
                    <option value="Práctica Profesional">Práctica Profesional</option>
                    <option value="Optativos">Optativos</option>
                </select></div>
                  <br/>
             </div>
             <div class="col-xs-12 col-md-6">
                  <div> <label class="etiquetita">Clave</label></div>
                  <div><input type="text" name="matmatricula" class="cajita form-control" placeholder="Ejemplo: CVE12700000"></div>
                  <br/>
             </div>
    		 
             <div class="col-xs-12 col-md-6">
                  <div> <label class="etiquetita">Horas Asignadas</label></div>
                  <div><input type="text" name="mathoras" class="cajita form-control" onKeyPress="return isNumberKey(event)" placeholder="Ejemplo: 2 hrs"></div>
                  <br/>
             </div>
             <div class="col-xs-12 col-md-6">
                  <div> <label class="etiquetita">Creditos</label></div>
                  <div><input type="text" name="matcreditos" class="cajita form-control" onKeyPress="return isNumberKey(event,this,true)" max="3"  placeholder="Ejemplo: 100"></div>
                  <br/>
             </div>
             <div class="col-xs-12 col-md-6">
                  <div> <label class="etiquetita">Enlace</label></div>
                  <div><input type="text" name="matlink" class="cajita form-control" placeholder="Ejemplo: www.segob.edu.mx/etc..."></div>
                  <br/>
             </div>
             <div class="col-xs-12 col-md-6">
                  <div> <label class="etiquetita">Orden</label></div>
                  <div><input type="text" name="matorden" class="cajita form-control" onKeyPress="return isNumberKey(event)" placeholder="Ejemplo: 2do lugar"></div>
                  <br/>
             </div>
             
             <div class="col-xs-12 col-md-6">
                  <div> <label class="etiquetita">Numero de Unidades</label></div>
                  <div><select name="matunidad" class="cajita form-control" >
                  		
                        <option value="1">1 Unidades</option>
                        <option value="2">2 Unidades</option>
                        <option value="3">3 Unidades</option>
                        <option value="4">4 Unidades</option>

                  </select></div>
                  <br/>
             </div>
             <div class="col-xs-12 col-md-12">
             		<div class="col-xs-12 col-md-6"><label class="etiquetita">Plan de Estudios</label></div>
             		<div><select id="planes" name="plang" class="cajita form-control" onClick="return BuscarSemestres(this);">
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
                  </select></div>
               </div>
             
               <div  class="col-xs-12 col-md-12" id="ResultadoSemestres"></div>
               




                <div>
                <p>&nbsp;</p>   
                     <center><input type="submit" name='button' id='submit'  value='Guardar'> <input type='reset'></center>
                    <br/>
                 
                </div>
            


			 </form>
 </div>
           
            <div class="tab-pane" id="coleccionmaterias">
			 
               <?php include('c-materias.php');?>
          

            </div>

    
 

        
      </div>  
    </div>  
       <div class="modal-footer">
      			<center><label class="submenu">Puede Agregar Nuevas Materias o Editar Las Materias Ya Existentes</label></center>
                <div id="mensaje"></div>
      </div>

  </div>
</div>
</div>