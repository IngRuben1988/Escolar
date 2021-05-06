<?php include('validaacceso.php');?>
<div class="modal fade" id="USR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Usuarios</label></center></h4>
      </div>
      <div class="modal-body">




<script language="javascript" type="text/javascript" src="js/bus0004.js"></script>
<script language="javascript" type="text/jscript" src="js/enter0000.js"></script>




<br/>
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a class="btn btn-primary btn-lg" href="#red" data-toggle="tab">Usuario Alumno</a></li>
            <li><a class="btn btn-primary btn-lg" href="#orange" data-toggle="tab">Usuario Docente</a></li>
            <li><a class="btn btn-primary btn-lg" href="#yellow" data-toggle="tab">Usuario Administrativo</a></li>

        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
                       <br>
 						<form method="post" action="zeta_x0001.php"   onKeyPress="return disableEnterKey(event);">
                      
                                  <div>
                                    <div><label class="etiquetita">Matricula del Alumno</label></div>
                                    <div><input type="text" name="alumusr" id="busqueda" class="cajita form-control" maxlength="20" onKeyUp="return validarFormAlumno(this);"/></div>  
                                    <br/> 
                                  </div>
                              
                            
                                <div id="resultado">
                                    <br>
                                </div>
                       </form>


            </div>
            <div class="tab-pane" id="orange">
                     <br>
                      <form method="post" action="zeta_x0001.php"  onKeyPress="return disableEnterKey(event);">
                            
                                 <div>
                                    <div><label class="etiquetita">Curp/Matricula del Docente</label></div>
                                    <div><input type="text"  name="docusr"id="busquedadocente" class="cajita form-control" onKeyUp="return validarFormDocente(this);"/></div>
                                    <br/>   
                                  </div>

                                <div id="resultadodocente">
                                    <br>
                                </div>
                          </form>

            
            </div>
            <div class="tab-pane" id="yellow">
 						<br>
                        <form method="post" action="zeta_x0001.php"  onKeyPress="return disableEnterKey(event);">
                          
                                 <div>
                                    <div><label class="etiquetita">Curp/Matricula del Administrativo</label></div>
                                    <div><input type="text" name="secusr" id="busquedaad"  class="cajita form-control" onKeyUp="return validarFormAdministrativo(this);"/></div>
                                    <br/>   
                                 </div>

         
                                <div id="resultadoad">
                                    <br>
                                </div>

                         </form>



            </div>

            
        </div>
    </div>

      </div>  
      
       <div class="modal-footer">
      			<center><label class="submenu">Puede Agregar Nuevos Usuarios al Sitio</label></center>
                
      </div>
    
    </div>
  </div>
</div>

