<?php 
//include('validaacceso.php');
include('header.php');?>
<!-- cuerpo del formulario para anexar de alumnos -->


<div class="container">
<section>
<br/>
<div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        	<li class="active"><a class="btn btn-primary btn-lg" href="#blue" data-toggle="tab">Colección de Alumno</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="blue">
            <br/>
            

            
            <form name="alumno" action="" accept-charset="UTF-8"   onKeyPress="return disableEnterKey(event);">
                      
                  <div class="container">
                  	<div class="col-xs-12 col-md-6">
                        <div><label class="etiquetita">Curp/Matricula del Alumno</label></div>
                        <div><input type="text" name="matricula" id="matricula" class="cajita form-control" maxlength="20"  placeholder="Ejemplo: 132700220000"/></div>  
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        <div><label class="etiquetita">Nombre</label></div>
                        <div><input type="text" name="nombre" id="nombre" class="cajita form-control" maxlength="20" placeholder="Ejemplo: Juan Eduardo" /></div>  
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        <div><label class="etiquetita">Apellido Paterno</label></div>
                        <div><input type="text" name="paterno" id="paterno" class="cajita form-control" maxlength="20" placeholder="Ejemplo: Escutia" /></div>  
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        <div><label class="etiquetita">Apellido Materno</label></div>
                        <div><input type="text" name="materno" id="materno" class="cajita form-control" maxlength="20" placeholder="Ejemplo: Escobar" /></div>  
                    </div>
                    
                    <div class="col-xs-12 col-md-12">
						<br/>
                        <div><center><input type="button" class="button" onClick="return BuscarAlumnos(this);" name="busqueda" id="busqueda" value="Buscar"/> <input type="reset"></center></div>   
                        <br/>
                    </div>
                     
                  </div>
              
            
                <div id="resultado">
                    <br>
                </div>
                    

             </form>
            </div>


</section>

</div>

</div>
</div>



<?php //include('footer.php');?>
