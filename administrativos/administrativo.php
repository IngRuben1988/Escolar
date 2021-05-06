<?php include('validaacceso.php');?>
<?php include('header.php');?>

<div class="container">
<br/>
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a class="btn btn-primary btn-lg" href="#blue" data-toggle="tab">Colección de Administrativos</a></li>
        </ul>

        <div id="my-tab-content" class="tab-content">
  
        <br/>
            <div class="tab-pane active" id="blue">
            <div class="col-xs-12 col-md-12 menu">
				
            	<div align="center" class="col-xs-9 col-md-9">
                	<label class="etiquetita3">Administrativos</label>
                </div>
                <div align="center" class="col-xs-3 col-md-3">
                	<a class="btn"data-toggle="modal" data-target="#Administrativos">
                    	<img src="../img/nuevo.png" width="85px" height="50px">
                    </a>
                </div>
				
            </div>
                <p>&nbsp;<p> 
                 <form name="alumno" action="" accept-charset="UTF-8"   onKeyPress="return disableEnterKey(event);">
                      
                  <div class="container">
                  	<div class="col-xs-6 col-md-6">
                        <div><label class="etiquetita">Curp/Matricula del Administrativo</label></div>
                        <div><input type="text" name="matricula" id="matricula" class="cajita form-control" maxlength="20"  placeholder="Ejemplo: 132700220000"/></div>  
                    </div>
                    
                    <div class="col-xs-6 col-md-6">
                        <div><label class="etiquetita">Nombre</label></div>
                        <div><input type="text" name="nombre" id="nombre" class="cajita form-control" maxlength="20" placeholder="Ejemplo: Juan Eduardo" /></div>  
                    </div>
                    
                    <div class="col-xs-6 col-md-6">
                        <div><label class="etiquetita">Apellido Paterno</label></div>
                        <div><input type="text" name="paterno" id="paterno" class="cajita form-control" maxlength="20" placeholder="Ejemplo: Escutia" /></div>  
                    </div>
                    
                    <div class="col-xs-6 col-md-6">
                        <div><label class="etiquetita">Apellido Materno</label></div>
                        <div><input type="text" name="materno" id="materno" class="cajita form-control" maxlength="20" placeholder="Ejemplo: Escobar" /></div>  
                    </div>
                    
                    <div class="col-xs-12 col-md-12">
						<br/>
                        <div><center><input type="button" class="button" onClick="return BuscarAdministrativo(this);" name="busqueda" id="busqueda" value="Buscar"/> <input type="reset"></center></div>   
                        <br/>
                    </div>
                     
                  </div>
              
            
                <div id="resultado">
                    <br>
                </div>
                    

             </form>
            </div>

                
                
            </div>



</div>

<?php include('administrativo-nuevo.php')?>
<?php include('../footer.php');?>