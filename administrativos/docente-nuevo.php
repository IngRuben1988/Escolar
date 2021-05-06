<?php include('validaacceso.php');?>
<div class="modal fade" id="Docentes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Docentes</label></center></h4>
      </div>
      <div class="modal-body">
      

<form method="post" action="zeta_x0001.php" onsubmit="return validarFormDocente(this);" accept-charset="UTF-8">
              	<div class="menu col-xs-12 col-ms-12">
              		<div class="col-xs-6 col-md-4">
                        <div><label class="etiquetita">Nombre (s)</label></div>
                        <div><input type="nombre" name="docnombre" id="nombre" class="cajita form-control" placeholder="Ejemplo: Eduardo"></div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div><label class="etiquetita">Apellido Paterno</label></div>
                        <div><input type="text" name="docpaterno" id="paterno" class="cajita form-control" placeholder="Ejemplo: Lopéz"></div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                       <div><label class="etiquetita">Apellido Materno</label></div>
                       <div><input type="text" name="docmaterno" id="materno" class="cajita form-control" placeholder="Ejemplo: Mendéz"></div>
           		    </div>
					<div class="col-xs-6 col-md-4">
                         <div><label class="etiquetita">Sexo</label></div>
                          <div><select name="docsexo" id="sexo" class="cajita form-control">
                               <option>Seleccione...</option>
                               <option value="1">Masculino</option>
                               <option value="0">Femenino</option>
                               </select></div>
                     </div>     
                     <div class="col-xs-6 col-md-4">     
                          <div><label class="etiquetita">Fecha de Nacimiento</label></div>
                          <div><input type="date" name="docnacimiento" id="name"  class="cajita form-control" placeholder="YYYY-MM-dd"></div>
                     </div>
                     <!--<div class="col-xs-6 col-md-4">
                           <div><center><label class="etiquetita">Foto:</label></center></div>
                           <div><center><input type="file" name="docfoto" id="foto"></center></div>
                    </div>-->
                    <div class="col-xs-12 col-md-12">
                         	<div><center><label class='etiquetita'>Opciones</label></center></div>
                            <div><center><input type="submit" name="button" id="submit"  value="Guardar">   <input type='reset'></center></div>
					</div>
               </div> 

<div class="col-xs-12 col-md-12">
<br/>
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a class="btn btn-primary btn-lg" href="#orange" data-toggle="tab">Documentación</a></li>
            <li><a class="btn btn-primary btn-lg" href="#yellow" data-toggle="tab">Domicilio</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
      
             <div class="tab-pane active" id="orange"><!--Documentacion-->
               <br/>    
              <div class="col-xs-6 col-md-6">
                   <div><label class="etiquetita">Matricula</label></div>
                   <div><input type="matricula" name="docmatricula" id="matricula" class="cajita form-control" maxlength="18" placeholder="Ejemplo: 142700030000"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                      <div><label class="etiquetita">CURP</label></div>
                      <div><input type="text" name="doccurp" id="curp" class="cajita form-control" maxlength="18" placeholder="Ejemplo: COGG941113MTCRNB02"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                    <div><label class="etiquetita">RFC</label></div>
                    <div><input type="text" name="docrfc" id="rfc" class="cajita form-control" maxlength="13" placeholder="Ejemplo: COGG941113"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                    <div><label class="etiquetita">Numero de I.N.E</label></div>
                    <div><input type="text" name="docife" id="ife" class="cajita form-control" maxlength="13" placeholder="Ejemplo: MGALRB88080727H700"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                    <div><label class="etiquetita">Numero del Seguro Medico</label></div>
                    <div><input type="text" name="docimss" id="imss" class="cajita form-control" maxlength="11"  placeholder="Ejemplo: 92988084494"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                   <div><label class="etiquetita">Correo Electronico</label></div>
                  <div><input type="email" name="doccorreo" id="correo" class="cajita form-control" placeholder="Ejemplo: rmagana11@hotmail.com"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                   <div><label class="etiquetita">Telefono</label></div>
                   <div><input type="tel" name="doctelefono" id="telefono" class="cajita form-control" placeholder="Ejemplo: 9932727138"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                   <div><label class="etiquetita">Fecha de Ingreso</label></div>
                   <div><input type="date" name="docingreso" id="ingreso" class="cajita form-control"  placeholder="YYYY-MM-dd"></div>
              </div>
            </div>
            
            <div class="tab-pane" id="yellow"><!--domicilio-->
            
            <br/>
              <div class="col-xs-6 col-md-6">
                 <div><label class="etiquetita">Colonia</label></div>
                 <div ><input type="text" name="doccolonia" id="colonia" class="cajita form-control" placeholder="Ejemplo: Col. Reforma"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                  <div><label class="etiquetita">Calle</label></div>
                  <div><input type="text" name="doccalle" id="calle" class="cajita form-control" placeholder="Ejemplo: Calle Juan Ortiz"></div>
              </div>
               <div class="col-xs-6 col-md-6">
                   <div><label class="etiquetita">Numero</label></div>
                   <div><input type="text" name="docnumero" id="numero" class="cajita form-control" minlength="0" maxlength="20" placeholder="Ejemplo: 202 Altos"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                   <div><label class="etiquetita">Codigo Postal</label></div>
                   <div><input type="text" name="doccp" id="cp" class="cajita form-control" maxlength="10" placeholder="Ejemplo: 86087"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                      <div><label class="etiquetita">Municipio</label></div>
                      <div><input type="text" name="docmunicipio" id="municipio" class="cajita form-control" placeholder="Ejemplo: Centro"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                     <div><label class="etiquetita">Ciudad</label></div>
                     <div><input type="text" name="docciudad" id="ciudad" class="cajita form-control" placeholder="Ejemplo: Villahermosa"></div>
              </div>
              <div class="col-xs-6 col-md-6">
                    <div><label class="etiquetita">Estado</label></div>
                    <div><select name="docestado" id="estado" class="cajita form-control">
                         <option>Seleccione...</option>
                         <option>AguasCalientes</option>
                         <option>Baja California</option>
                         <option>Baja California Sur</option>
                         <option>Campeche</option>
                         <option>Coahuila</option>
                         <option>Colima</option>
                         <option>Chiapas</option>
                         <option>Chihuahua</option>
                         <option>Distrito Federal</option>
                         <option>Durango</option>
                         <option>Guanajuato</option>
                         <option>Guerrero</option>
                         <option>Hidalgo</option>
                         <option>Jalisco</option>
                         <option>México</option>
                         <option>Michoacán</option>
                         <option>Morelos</option>
                         <option>Nayarit</option>
                         <option>Nuevo Leon</option>
                         <option>Oaxaca</option>
                         <option>Puebla</option>
                         <option>Querétaro</option>
                         <option>Quintana Roo</option>
                         <option>San Luis Potosí</option>
                         <option>Sinaloa</option>
                         <option>Sonora</option>
                         <option>Tabasco</option>
                         <option>Tamaulipas</option>
                         <option>Tlaxcala</option>
                         <option>Veracruz</option>
                         <option>Yucatán</option>
                         <option>Zacatecas</option>
        
                         </select></div>
               </div>
             
            </div>
 
        </form>
        
        
        
 </div>       
      </div>  
  </div>
       <div class="modal-footer">
      			<center><label class="submenu">Puede Agregar Nuevos Docentes</label></center>
                <div id="mensaje"></div>
      </div>
    
    </div>
  </div>
</div>