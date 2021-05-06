
<?php include('validaacceso.php');?>
<div class="modal fade" id="Alumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Alumno Nuevo</label></center></h4>
      </div>
      <div class="modal-body">

<form method="post" action="zeta_x0001.php" onsubmit="return validarFormAlumno(this);" onKeyPress="return disableEnterKey(event);" >
		
              	<div class="menu col-xs-12 col-ms-12">
              		  <div class="col-xs-6 col-md-4">
              		    <div><label class="etiquetita">Nombre (s)</label></div>
                        <div><input type="nombre" name="alumnombre" id="nombre" class="cajita form-control" placeholder="Ejemplo: Eduardo"></div>
                      </div>
                    <div class="col-xs-6 col-md-4">
              		    <div><label class="etiquetita">Apellido Paterno</label></div>
                        <div><input type="text" name="alumpaterno" id="paterno" class="cajita form-control" placeholder="Ejemplo: Lopéz"></div>
                    </div>
                    <div class="col-xs-6 col-md-4">
              		    <div><label class="etiquetita">Apellido Materno</label></div>
                        <div><input type="text" name="alummaterno" id="materno" class="cajita form-control" placeholder="Ejemplo: Mendéz"></div>
           		    </div>
					<div class="col-xs-6 col-md-4">
                         <div><label class="etiquetita">Sexo</label></div>
                         <div><select name="alumsexo" id="alumsexo" class="cajita form-control">
                            <option>Seleccione...</option>
                            <option value="0">Femenino</option>
                            <option value="1">Masculino</option>
                            </select></div>
                     </div>   
                     <div class="col-xs-6 col-md-4">
                         <div><label class="etiquetita">Generación</label></div>
                         <div><input type="text" class="cajita form-control" name="alumgeneracion" placeholder="2015-2016" maxlength="9"/></div>
                    </div> 
                    <div class="col-xs-6 col-md-4">
                         <div><label class="etiquetita">Lugar de Nacimiento</label></div>
                         <div><input type="text" class="cajita form-control" name="alumlugar" placeholder="Villahermosa, Tabasco"/></div>
                    </div>  
                       <div class="col-xs-6 col-md-4">     
                         <div><label class="etiquetita">Fecha de Nacimiento</label></div>
                         <div><input type="date" name="alumnacimiento" id="name"  class="cajita form-control" placeholder="YYYY-MM-dd"></div>
                     </div>
                  <!--   <div class="col-xs-6 col-md-4">
                         <div><center><label class="etiquetita">Foto:</label></center></div>
                         <div><center><input type="file" size="1" class="file-input" name="alumfoto"/></center></div>
                    </div>-->
                    <div class="col-xs-12 col-md-12">
                         	<div><center><label class='etiquetita'>Opciones</label></center></div>

                            <div><center><input type="submit" name="button" id="submit"  value="Guardar">   <input type='reset'></center></div>
						</div>
               </div> 
                      
              		  
                      

<div class="col-xs-12 col-md-12">
<br/>
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">

            <li class="active"><a class="btn btn-primary btn-lg" href="#orange" data-toggle="tab">Información Personal</a></li>
            <li><a class="btn btn-primary btn-lg" href="#yellow" data-toggle="tab">Domicilio</a></li>
            <li><a class="btn btn-primary btn-lg" href="#tutor" data-toggle="tab">Tutuor</a></li>
            <li><a class="btn btn-primary btn-lg" href="#doc" data-toggle="tab">Documentación</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">

            <div class="tab-pane active col-xs-12 col-md-12" id="orange"><!--Documentación-->
            
            <br/>
            <div class="col-xs-6 col-md-6"><!-- matricula -->
               <div><label class="etiquetita">Matricula</label></div>
               <div><input type="text" name="alummatricula" id="matricula" class="cajita form-control" maxlength="13" placeholder="Ejemplo: 142700030000"></div>
            </div> 

             <div class="col-xs-6 col-md-6"><!-- datos de la curp -->
               <div><label class="etiquetita">CURP</label></div>
               <div><input type="text" name="alumcurp" id="curp" class="cajita form-control" maxlength="18" placeholder="Ejemplo: COGG941113MTCRNB02"></div>
             </div>           
               <div class="col-xs-6 col-md-6"><!-- RFC -->
                  <div><label class="etiquetita">RFC</label></div>
                  <div><input type="text" name="alumrfc" id="rfc" class="cajita form-control" maxlength="13" placeholder="Ejemplo: COGG941113"></div>
               </div>
               <div class="col-xs-6 col-md-6"><!-- IFE -->
                 <div ><label class="etiquetita">Numero de I.N.E</label></div>
                 <div><input type="text" name="alumife" id="ife" class="cajita form-control" maxlength="13" placeholder="Ejemplo: MGALRB88080727H700"></div>
              </div>
              <div class="col-xs-6 col-md-6"><!-- imss -->
                  <div><label class="etiquetita">Numero del Seguro Medico</label></div>
                  <div><input type="text" name="alumimss" id="imss" class="cajita form-control" maxlength="11" placeholder="Ejemplo: 92988084494"></div>
              </div>
              <div class="col-xs-6 col-md-6"><!-- correo Electronico -->
                  <div><label class="etiquetita">Correo Electronico</label></div>
                  <div><input type="email" name="alumcorreo" id="correo" class="cajita form-control"  placeholder="Ejemplo: rmagana11@hotmail.com"></div>
              </div>
              <div class="col-xs-6 col-md-6"><!-- telefono -->
                 <div><label class="etiquetita">Telefono</label></div>
                 <div><input type="tel" name="alumtelefono" id="telefono" class="cajita form-control" placeholder="Ejemplo: 9932727138" onKeyPress="return isNumberKey(this);"></div>
              </div> 
              <div class="col-xs-6 col-md-6">
               <div><label class="etiquetita">Turno</label></div><!-- turno al que aspira -->
               <div><select name="alumturno" id="turno" class="cajita form-control">
                    <option value="1">Vespertino</option>
                    <option value="0">Matutino</option>
                    </select></div>
              </div>               
             <div class="col-xs-6 col-md-6"><!-- Fecha de Ingreso -->
                  <div><label class="etiquetita">Fecha de Ingreso</label></div>
                  <div><input type="date" name="alumingreso" id="ingreso"  class="cajita form-control" placeholder="YYYY-MM-dd"></div>
            </div>
             <div class="col-xs-6 col-md-6"><!-- Nacionalidad -->
                  <div><label class="etiquetita">Nacionalidad</label></div>
                  <div><input type="text" name="alumnacionalidad" id="nacionalidad"  class="cajita form-control" placeholder="Mexicano(a)"></div>
            </div>                                        
               
            </div>
            <div class="tab-pane col-xs-12 col-md-12" id="yellow"><!-- domicilio-->
                 
                <br/>
            <div class="col-xs-6 col-md-6"><!-- colonia -->
                    <div><label class="etiquetita">Colonia</label></div>
                    <div><input type="text" name="alumcolonia" id="colonia" class="cajita form-control" placeholder="Ejemplo: Col. Reforma"></div>
             </div>
             <div class="col-xs-6 col-md-6"><!-- calle -->
                <div><label class="etiquetita">Calle</label></div>
                <div><input type="text" name="alumcalle" id="calle" class="cajita form-control" placeholder="Ejemplo: Calle Juan Ortiz"></div>
             </div>
             <div class="col-xs-6 col-md-6"><!-- numero -->
               <div><label class="etiquetita">Numero</label></div>
               <div><input type="text" name="alumnumero" id="numero" class="cajita form-control" minlength="0" maxlength="20" placeholder="Ejemplo: 202 Altos"></div>
            </div>
            <div class="col-xs-6 col-md-6"><!-- codigo postal -->
                <div><label class="etiquetita">Codigo Postal</label></div>
                <div><input type="text" name="alumcp" id="cp" class="cajita form-control" onKeyPress="return isNumberKey(this);" maxlength="10" placeholder="Ejemplo: 86087"></div>
            </div>
            <div class="col-xs-6 col-md-6"><!-- Municipio -->
                <div><label class="etiquetita">Municipio</label></div>
                <div><input type="text" name="alummunicipio" id="municipio" class="cajita form-control" placeholder="Ejemplo: Centro"></div>
            </div>
            <div class="col-xs-6 col-md-6"><!-- Ciudad -->
                <div><label class="etiquetita">Ciudad</label></div>
                <div><input type="text" name="alumciudad" id="ciudad" class="cajita form-control" placeholder="Ejemplo: Villahermosa"></div>
           </div>
            <div class="col-xs-6 col-md-6"><!-- estado -->
            <div><label class="etiquetita">Estado</label></div>
            <div><select name="alumestado" id="estado" class="cajita form-control">
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
            
            <div class="tab-pane col-xs-12 col-md-12" id="tutor"><!--tutor-->
            	<br>
				<div class="col-xs-6 col-md-6"><!-- apellido paterno -->
                   <div><label class="etiquetita">Apellido Paterno</label></div>
                   <div><input type="text" name="tutorpaterno" id="tutorpaterno" class="cajita form-control"  placeholder="Ejemplo: Días"></div>
           		</div>
                 <div class="col-xs-6 col-md-6"><!-- apellido Materno -->
                   <div><label class="etiquetita">Apellido Materno</label></div>
                   <div><input type="text" name="tutormaterno" id="tutormaterno" class="cajita form-control"  placeholder="Ejemplo: Ordaz"></div>
           		</div>   
                <div class="col-xs-6 col-md-6"><!-- Nombre -->
                   <div><label class="etiquetita">Nombre</label></div>
                   <div><input type="text" name="tutornombre" id="tutornombre" class="cajita form-control"  placeholder="Ejemplo: Guztavo"></div>
           		</div> 
                <div class="col-xs-6 col-md-6"><!-- domicilio -->
                   <div><label class="etiquetita">Domicilio</label></div>
                   <div><textarea  name="tutordomicilio" id="tutordomicilio" class="cajita form-control"  placeholder="Ejemplo: Juan Alvares #104 col. centro, villahermosa Tabasco"></textarea></div>
           		</div>                    
                <div class="col-xs-6 col-md-6"><!-- ocupacion -->
                   <div><label class="etiquetita">Ocupación</label></div>
                   <div><input type="text" name="tutorocupacion" id="tutorocupacion" class="cajita form-control"  placeholder="Ejemplo: Contador"></div>
           		</div>
               <div class="col-xs-6 col-md-6"><!-- telefono -->
                   <div><label class="etiquetita">Telefono (Celular)</label></div>
                   <div><input type="text" name="tutorcelular" id="tutorcelular" class="cajita form-control"  placeholder="Ejemplo: 3159988" onKeyPress="return isNumberKey(this);"></div>
           		</div> 
                <div class="col-xs-6 col-md-6"><!-- telefono -->
                   <div><label class="etiquetita">Telefono (Casa)</label></div>
                   <div><input type="text" name="tutortelefono" id="tutortelefono" class="cajita form-control"  placeholder="Ejemplo: 3159988" onKeyPress="return isNumberKey(this);"></div>
           		</div>                                 
                <div class="col-xs-6 col-md-6"><!-- estudios -->
                   <div><label class="etiquetita">Estudios</label></div>
                   <div><input type="text" name="tutorestudios" id="tutorestudios" class="cajita form-control"  placeholder="Ejemplo: Lic. Administrador Empresarial"></div>
           		</div>                
            </div>

            <div class="tab-pane col-xs-12 col-md-12" id="doc"><!-- documentacion -->
            	<br>
				<div class="col-xs-6 col-md-6"><!-- escuela -->
                   <div><label class="etiquetita">Escuela de Procedencia</label></div>
                   <div><input type="text" name="alumbachiller" id="escuela" class="cajita form-control"  placeholder="Ejemplo: COBATAB Plantel Numero 1"></div>
           		</div>
                 <div class="col-xs-6 col-md-6"><!-- promedio -->
                   <div><label class="etiquetita">Promedio de Bachiller</label></div>
                   <div><input type="text" name="alumpromedio" id="promedio" class="cajita form-control" maxlength="3"  placeholder="Ejemplo: 8.8"></div>
           		</div>   
                <div class="col-xs-6 col-md-6"><!-- ciclo escolar -->
                   <div><label class="etiquetita">Periodo Escolar</label></div>
                   <div><select class="cajita form-control" name="alumper">
                   		<option value="Seleccione...">Seleccione...</option>
                        <?php  $con=conexion();
                            $sql="select *from periodos order by  per_fecha_fin desc";
                       $res=mysql_query($sql,$con);
                            if(mysql_num_rows($res)==0){
                               echo '<b>No hay registros</b>';
                               }else{
                               while($row=mysql_fetch_array($res)){
                           echo'<option value="'.$row['PER_ID'].'">'.$row['PER_FECHA_INI'].' - '.$row['PER_FECHA_FIN'].'</option>';
                           }
                    }?>
                        </select></div>
           		</div> 
                 <div class="col-xs-6 col-md-6"><!-- ciclo escolar -->
                   <div><label class="etiquetita">Plan de Estudios</label></div>
                   <div><select class="cajita form-control" name="alumplan">
                   		<option value="Seleccione...">Seleccione...</option>
                        <?php  $con=conexion();
                            $sql="select *from plan_estudios";
                       $res=mysql_query($sql,$con);
                            if(mysql_num_rows($res)==0){
                               echo '<b>No hay registros</b>';
                               }else{
                               while($row=mysql_fetch_array($res)){
                           echo'<option value="'.$row['PLAN_ID'].'">'.$row['PLAN_FECHA'].'  '.$row['PLAN_NOMBRE'].'</option>';
                           }
                    }?>
                        </select></div>
           		</div> 
                   
              <div class="col-xs-6 col-md-6"><!-- ocupacion -->
                   <div><label class="etiquetita">Documentos Entregados</label></div>
                   <div>
                     <p>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumacta" id="alumacta" value="1">
                         Acta de Nacimiento</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumsecundaria" id="alumsecundaria" value="1">
                         Certificado de Secundaria</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumhbachiller" id="alumhbachiller" value="1">
                         Certificado de Bachiller</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumfotos" id="alumfotos" value="1">
                         (6) Fotografia T/Infantil Blanco y Negro</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alummedico" id="alummedico" value="1">
                         Certificado Medico</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumhcurp" id="alumhcurp" value="1">
                         CURP</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumpago" id="alumpago" value="1">
                         Pago</label>
                       <br>
                     </p>
                 </div>
           		</div>
                                               
                <div class="col-xs-6 col-md-6"><!-- estudios -->
					<div><label class="etiquetita">Esta Becado?</label></div>
                    <div><select class="cajita form-control" name="alumbeca" id="alumbeca">
                    	<option value="0">No</option>
                        <option value="1">Si</option>
                    </select></div>
                </div>
                                
            </div>
  
  
        <br/> 
      </div>

  </form> 

</div>      
       <div class="modal-footer">
      			<center><label class="submenu">Puede Agregar Nuevos Alumnos</label></center>
                <div id="mensaje"></div>
      </div>
    
    </div>
  </div>
</div>






