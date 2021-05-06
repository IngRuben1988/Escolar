<?php include('validaacceso.php');?>
<div class="modal fade" id="Planes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Plan de Estudios</label></center></h4>
      </div>
      <div class="modal-body">
      
      
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">         
            <li class="active"><a href="#red" data-toggle="tab" class="btn btn-primary btn-lg">Plan de Estudios</a></li>
        </ul>
        
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
                   
           <form method="post" action="zeta_x0001.php" onsubmit="return validarFormPlan(this);" onKeyPress="return disableEnterKey(event);">
              <br/>

               <div>
                    <div><label class="etiquetita">Numero de Semestres</label></div>
                    <div><input type="text" name="semestre" id="textfield"  class="cajita form-control" placeholder="Ejemplo: 1" min="1" max="12" onKeyPress="return isNumberKey(event)">
                    </div>
                    <br>
               </div>
               <div>
                    <div><label class="etiquetita">Nombre Carrera</label></div>
                    <div><input type="text" name="carrera" id="textfield" class="cajita form-control" placeholder="Ejemplo: Licenciatura en Psicologia">
                    </div> 
                    <br>    
               </div>
               
               <div>
                     <div><label class="etiquetita">Plan de Estudios</label></div>
                     <div><input type="text" name="anio" id="textfield" class="cajita form-control" maxlength="4" onKeyPress="return isNumberKey(this)" placeholder="Ejemplo: YYYY"></div>
               </div>
               

                       <article>
					   <br/>
                         <center><input type=submit name='button' id='submit'  value='Guardar'> <input type='reset'></center>
                      </article> 

           </form>           
            </div>

           

        </div>

      </div>  
      
       <div class="modal-footer">
      			<center><label class="submenu">Puede Agregar Nuevos Planes de Estudios</label></center>
                <div id="mensaje"></div>
      </div>
    
    </div>
  </div>
</div>