<?php include('validaacceso.php');?>
<?php include('header.php');



$actualizar=base64_decode($_GET['SKYNET']);
$curp= base64_decode($_GET['MATRIX']);

  if ($actualizar=="Alumno" and $curp<>""){////////////////formulario para actualizaer alumnos alumnos

      $con=conexion();
      $sql="select * from alum_personas where alum_CURP='".$curp."'";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
			while($row=mysql_fetch_array($res)){
			
			$alumcurp=$row['ALUM_CURP'];
			$alummatricula=$row['ALUM_MATRICULA'];
			$alumturno=$row['TURN_ID'];
			$alumestatus=$row['EST_ID'];
			$alumnombre=$row['ALUM_NOMBRE'];
			$alumpaterno=$row['ALUM_PATERNO'];
			$alummaterno=$row['ALUM_MATERNO'];
			$alumrfc=$row['ALUM_RFC'];
			$alumife=$row['ALUM_IFE'];
			$alumimss=$row['ALUM_IMSS'];
			$alumcorreo=$row['ALUM_CORREO'];
			$alumtelefono=$row['ALUM_TELEFONO'];
			$alumsexo=$row['ALUM_SEXO'];
			$alumnacimiento=$row['ALUM_NACIMIENTO'];
			$alumcolonia=$row['ALUM_COLONIA'];
			$alumcalle=$row['ALUM_CALLE'];
			$alumnumero=$row['ALUM_NUMERO'];
			$alumcp=$row['ALUM_CP'];
			$alumciudad=$row['ALUM_CIUDAD'];
			$alummunicipio=$row['ALUM_MUNICIPIO'];
			$alumestado=$row['ALUM_ESTADO'];
			$alumnacionalidad=$row['ALUM_NACIONALIDAD'];
			$alumingreso=$row['ALUM_INGRESO'];
			$alumfoto=$row['ALUM_FOTO'];
			$alumgeneracion=$row['ALUM_GENERACION'];
			$alumlugar=$row['ALUM_LUGAR_NACIMIENTO'];
			$alumbachiller=$row['ALUM_BACHILLER'];
			$alumpromedio=$row['ALUM_PROMEDIO'];
			$alumtnombre=$row['ALUM_TUTOR_NOMBRE'];
			$alumtpaterno=$row['ALUM_TUTOR_PATERNO'];
			$alumtmaterno=$row['ALUM_TUTOR_MATERNO'];
			$alumtocupacion=$row['ALUM_TUTOR_OCUPACION'];
			$alumtdomicilio=$row['ALUM_DOMICILIO'];
			$alumttelefono=$row['ALUM_TUTOR_TELEFONO'];
			$alumtcelular=$row['ALUM_TUTOR_CELULAR'];
			$alumtestudio=$row['ALUM_TUTOR_ESTUDIO'];
			$alumsalon=$row['ALUM_SALON'];
			$alumacta=$row['ALUM_ACTA']|0;
			$alumsecundaria=$row['ALUM_SECUNDARIA']|0;
			$alumhbachiller=$row['ALUM_HBACHILLER']|0;
			$alumfotos=$row['ALUM_FOTOS']|0;
			$alummedico=$row['ALUM_MEDICO']|0;
			$alumhcurp=$row['ALUM_HCURP']|0;
			$alumpago=$row['ALUM_PAGO']|0;
			$alumper=$row['PER_ID'];
			$alumplan=$row['PLAN_ID'];
			$alumbeca=$row['ALUM_BECADO'];
			$alumegreso=$row['ALUM_EGRESO'];
		
			   }
		   }
echo '<script type="text/javascript" src="js/x0001.js"></script>';

echo '<form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
echo '
<div class="container">
<input type="hidden" name="alumcurp2" id="alumcurp2" value="'.$alumcurp.'"/>


<div class="menu col-xs-12 col-ms-12">
              		  <div class="col-xs-6 col-md-4">
              		    <div><label class="etiquetita">Nombre (s)</label></div>
                        <div><input type="nombre" name="alumnombre" id="nombre" class="cajita form-control" placeholder="Ejemplo: Eduardo" value="'.$alumnombre.'"></div>
                      </div>
                    <div class="col-xs-6 col-md-4">
              		    <div><label class="etiquetita">Apellido Paterno</label></div>
                        <div><input type="text" name="alumpaterno" id="paterno" class="cajita form-control" placeholder="Ejemplo: Lopéz" value="'.$alumpaterno.'"></div>
                    </div>
                    <div class="col-xs-6 col-md-4">
              		    <div><label class="etiquetita">Apellido Materno</label></div>
                        <div><input type="text" name="alummaterno" id="materno" class="cajita form-control" placeholder="Ejemplo: Mendéz" value="'.$alummaterno.'"></div>
           		    </div>
					<div class="col-xs-6 col-md-4"><!-- sexo -->
						  <div><label class="etiquetita">Sexo</label></div>
						   <div><select name="alumsexo"  class="cajita form-control">
								<option>Seleccione...</option>
								<option value="1"';if($alumsexo==1) print 'selected=true';echo'>Masculino</option>
								<option value="0"';if($alumsexo==0) print 'selected=true';echo'>Femenino</option>
								</select></div>
					</div>
                     <div class="col-xs-6 col-md-4">
                         <div><label class="etiquetita">Generación</label></div>
                         <div><input type="text" class="cajita form-control" name="alumgeneracion" placeholder="2015-2016" maxlength="9" value="'.$alumgeneracion.'"/></div>
                    </div> 
                    <div class="col-xs-6 col-md-4">
                         <div><label class="etiquetita">Lugar de Nacimiento</label></div>
                         <div><input type="text" class="cajita form-control" name="alumlugar" placeholder="Villahermosa, Tabasco" value="'.$alumlugar.'"/></div>
                    </div>  
                       <div class="col-xs-6 col-md-4">     
                         <div><label class="etiquetita">Fecha de Nacimiento</label></div>
                         <div><input type="date" name="alumnacimiento" id="name"  class="cajita form-control" placeholder="YYYY-MM-dd" value="'.$alumnacimiento.'"></div>
                     </div>
                                  
			 ';echo' 
	  <div class="col-xs-6 col-md-4">
      <div><label class="etiquetita">Estatus</label></div>
      <div><select name="alumestatus" id="alumestatus" class="cajita form-control">
                	  <option>Seleccione...</option>'.
                	   $con=conexion();
                       $sql="select * from estatus";
                       $res=mysql_query($sql,$con);
                                 if(mysql_num_rows($res)==0){
                                    echo '<b>No hay registros</b>';
                                    }else{
                                   while($row=mysql_fetch_array($res)){
                           echo'<option value="'.$row['EST_ID'].'" ';if($alumestatus==$row['EST_ID']) print 'selected="true"';echo'>'.$row['EST_ESTATUS'].'</option>';
                           }
                    }
              	  echo '</select>
				  </div>
				</div>
		<div class="col-xs-6 col-md-4">
			<div><label class="etiquetita">Año de Egreso</label></div>
			<div><input type="date" name="alumegreso" id="alumegreso"  class="cajita form-control" placeholder="YYYY-MM-dd" value="'.$alumegreso.'"></div>
		</div>';
				  
echo'		 
             <div class="col-xs-12 col-md-12">
                         	<div><center><label class="etiquetita">Opciones</label></center></div>

                            <div><center><input type="submit" name="button" id="submit"  value="Guardar">   <input type="reset"></center></div>
						</div>
					
               </div> 


<div class="container">
	<br/>
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a class="btn btn-primary btn-lg" href="#orange" data-toggle="tab">Información Personal</a></li>
            <li><a class="btn btn-primary btn-lg" href="#yellow" data-toggle="tab">Domicilio</a></li>
            <li><a class="btn btn-primary btn-lg" href="#tutor" data-toggle="tab">Tutuor</a></li>
            <li><a class="btn btn-primary btn-lg" href="#doc" data-toggle="tab">Documentación</a></li>
        </ul>
		
        <div id="my-tab-content" class="tab-content">

            <div class="tab-pane active" id="orange"><!--Documentación-->
            
            <br/>
            <div class="col-xs-6 col-md-4"><!-- matricula -->
               <div><label class="etiquetita">Matricula</label></div>
               <div><input type="text" name="alummatricula" id="matricula" class="cajita form-control" maxlength="13" placeholder="Ejemplo: 142700030000" value="'.$alummatricula.'"></div>
            </div> 

             <div class="col-xs-6 col-md-4"><!-- datos de la curp -->
               <div><label class="etiquetita">CURP</label></div>
               <div><input type="text" name="alumcurp1" id="curp" class="cajita form-control" maxlength="18" style="text-transform:uppercase;" value="'.$alumcurp.'"></div>
             </div>           
               <div class="col-xs-6 col-md-4"><!-- RFC -->
                  <div><label class="etiquetita">RFC</label></div>
                  <div><input type="text" name="alumrfc" id="rfc" class="cajita form-control" maxlength="13" style="text-transform:uppercase;"  value="'.$alumrfc.'"></div>
               </div>
               <div class="col-xs-6 col-md-4"><!-- IFE -->
                 <div ><label class="etiquetita">Numero de I.N.E</label></div>
                 <div><input type="text" name="alumife" id="ife" class="cajita form-control" maxlength="13" style="text-transform:uppercase;" value="'.$alumife.'"></div>
              </div>
              <div class="col-xs-6 col-md-4"><!-- imss -->
                  <div><label class="etiquetita">Numero del Seguro Medico</label></div>
                  <div><input type="text" name="alumimss" id="imss" class="cajita form-control" maxlength="11" style="text-transform:uppercase;" value="'.$alumimss.'"></div>
              </div>
              <div class="col-xs-6 col-md-4"><!-- correo Electronico -->
                  <div><label class="etiquetita">Correo Electronico</label></div>
                  <div><input type="email" name="alumcorreo" id="correo" class="cajita form-control" value="'.$alumcorreo.'"></div>
              </div>
              <div class="col-xs-6 col-md-4"><!-- telefono -->
                 <div><label class="etiquetita">Telefono</label></div>
                 <div><input type="tel" name="alumtelefono" id="telefono" class="cajita form-control" value="'.$alumtelefono.'"></div>
              </div> 
              <div class="col-xs-6 col-md-4">
               <div><label class="etiquetita">Turno</label></div><!-- turno al que aspira -->
               <div><select name="alumturno" class="cajita form-control">
			         <option value="0"';if($alumturno==0) print 'selected="true"';echo'>Verpertino</option>
                     <option value="1"';if($alumturno==1) print 'selected="true"';echo'>Matutino</option>
                     
                    </select></div>
              </div>               
             <div class="col-xs-6 col-md-4"><!-- Fecha de Ingreso -->
                  <div><label class="etiquetita">Fecha de Ingreso</label></div>
                  <div><input type="date" name="alumingreso" id="ingreso"  class="cajita form-control" placeholder="YYYY-MM-dd" value="'.$alumingreso.'"></div>
            </div>                            
               
            </div>
            <div class="tab-pane" id="yellow"><!-- domicilio-->
                 
                <br/>
                <div class="col-xs-6 col-md-4"><!-- colonia -->
                <div><label class="etiquetita">Colonia</label></div>
                <div><input type="text" name="alumcolonia" id="colonia" class="cajita form-control" value="'.$alumcolonia.'"></div>
                </div>
             <div class="col-xs-6 col-md-4"><!-- calle -->
                <div><label class="etiquetita">Calle</label></div>
                <div><input type="text" name="alumcalle" id="calle" class="cajita form-control" value="'.$alumcalle.'"></div>
             </div>
             <div class="col-xs-6 col-md-4"><!-- numero -->
               <div><label class="etiquetita">Numero</label></div>
               <div><input type="text" name="alumnumero" id="numero" class="cajita form-control" minlength="0" maxlength="20" value="'.$alumnumero.'"></div>
            </div>
            <div class="col-xs-6 col-md-4"><!-- codigo postal -->
                <div><label class="etiquetita">Codigo Postal</label></div>
               <div><input type="text" name="alumcp" id="cp" class="cajita form-control" maxlength="10" value="'.$alumcp.'"></div>
            </div>
            <div class="col-xs-6 col-md-4"><!-- Municipio -->
                <div><label class="etiquetita">Municipio</label></div>
                <div><input type="text" name="alummunicipio" id="municipio" class="cajita form-control" value="'.$alummunicipio.'"></div>
            </div>
            <div class="col-xs-6 col-md-4"><!-- Ciudad -->
                <div><label class="etiquetita">Ciudad</label></div>
                <div><input type="text" name="alumciudad" id="ciudad" class="cajita form-control" value="'.$alumciudad.'"></div>
           </div>
          <div class="col-xs-6 col-md-4"><!-- estado -->
            <div><label class="etiquetita">Estado</label></div>
            <div><select name="alumestado" id="estado" class="cajita form-control">
                 <option>Seleccione...</option>
                 <option value="Aguas Calientes"'; if($alumestado=='Aguas Calientes')      {print 'selected=true';} echo'>Aguas Calientes</option>
                 <option value="Baja California"'; if($alumestado=='Baja California')     {print 'selected=true';} echo'>Baja California</option>
                 <option value="Baja California Sur"'; if($alumestado=='Baja California Sur') {print 'selected=true';} echo'>Baja California Sur</option>
                 <option value="Campeche"'; if($alumestado=='Campeche')            {print 'selected=true';} echo'>Campeche</option>
                 <option value="Coahuila"'; if($alumestado=='Coahuila')            {print 'selected=true';} echo'>Coahuila</option>
                 <option value="Colima"'; if($alumestado=='Colima')              {print 'selected=true';} echo'>Colima</option>
                 <option value="Chiapas"'; if($alumestado=='Chiapas')             {print 'selected=true';} echo'>Chiapas</option>
                 <option value="Chihuahua"'; if($alumestado=="Chihuahua")           {print 'selected=true';} echo'>Chihuahua</option>
                 <option value="Distrito Federal"'; if($alumestado=="Distrito Federal")    {print 'selected=true';} echo'>Distrito Federal</option>
                 <option value="Durango"'; if($alumestado=="Durango")             {print 'selected=true';} echo'>Durango</option>
                 <option value="Guanajuato"'; if($alumestado=="Guanajuato")          {print 'selected=true';} echo'>Guanajuato</option>
                 <option value="Guerrero"'; if($alumestado=="Guerrero")            {print 'selected=true';} echo'>Guerrero</option>
                 <option value="Hidalgo"'; if($alumestado=="Hidalgo")             {print 'selected=true';} echo'>Hidalgo</option>
                 <option value="Jalisco"'; if($alumestado=="Jalisco")             {print 'selected=true';} echo'>Jalisco</option>
                 <option value="México"'; if($alumestado=="México")              {print 'selected=true';} echo'>México</option>
                 <option value="Michoacan"'; if($alumestado=="Michoacan")           {print 'selected=true';} echo'>Michoacán</option>
                 <option value="Morelos"'; if($alumestado=="Morelos")             {print 'selected=true';} echo'>Morelos</option>
                 <option value="Nayarit"'; if($alumestado=="Nayarit")             {print 'selected=true';} echo'>Nayarit</option>
                 <option value="Nuevo Leon"'; if($alumestado=="Nuevo Leon")          {print 'selected=true';} echo'>Nuevo Leon</option>
                 <option value="Oaxaca"'; if($alumestado=="Oaxaca")              {print 'selected=true';} echo'>Oaxaca</option>
                 <option value="Puebla"'; if($alumestado=="Puebla")              {print 'selected=true';} echo'>Puebla</option>
                 <option value="Querétaro"'; if($alumestado=="Querétaro")           {print 'selected=true';} echo'>Querétaro</option>
                 <option value="Quintana Roo"'; if($alumestado=="Quintana Roo")        {print 'selected=true';} echo'>Quintana Roo</option>
                 <option value="San Luis Potosí"'; if($alumestado=="San Luis Potosí")     {print 'selected=true';} echo'>San Luis Potosí</option>
                 <option value="Sinaloa"'; if($alumestado=="Sinaloa")             {print 'selected=true';} echo'>Sinaloa</option>
                 <option value="Sonora"'; if($alumestado=="Sonora")              {print 'selected=true';} echo'>Sonora</option>
                 <option value="Tabasco"'; if($alumestado=="Tabasco")             {print 'selected=true';} echo'>Tabasco</option>
                 <option value="Tamaulipas"'; if($alumestado=="Tamaulipas")          {print 'selected=true';} echo'>Tamaulipas</option>
                 <option value="Tlaxcala"'; if($alumestado=="Tlaxcala")            {print 'selected=true';} echo'>Tlaxcala</option>
                 <option value="Varacruz"'; if($alumestado=="Varacruz")            {print 'selected=true';} echo'>Veracruz</option>
                 <option value="Yucatán"'; if($alumestado=="Yucatán")             {print 'selected=true';} echo'>Yucatán</option>
                 <option value="Zacatecas"'; if($alumestado=="Zacatecas")           {print 'selected=true';} echo'>Zacatecas</option>
                 </select></div>
                </div>



            </div>
			
			<div class="tab-pane col-xs-12 col-md-12" id="tutor"><!--tutor-->
            	<br>
				<div class="col-xs-6 col-md-6"><!-- apellido paterno -->
                   <div><label class="etiquetita">Apellido Paterno</label></div>
                   <div><input type="text" name="tutorpaterno" id="tutorpaterno" class="cajita form-control"  placeholder="Ejemplo: Días" value="'.$alumtpaterno.'"></div>
           		</div>
                 <div class="col-xs-6 col-md-6"><!-- apellido Materno -->
                   <div><label class="etiquetita">Apellido Materno</label></div>
                   <div><input type="text" name="tutormaterno" id="tutormaterno" class="cajita form-control"  placeholder="Ejemplo: Ordaz" value="'.$alumtmaterno.'"></div>
           		</div>   
                <div class="col-xs-6 col-md-6"><!-- Nombre -->
                   <div><label class="etiquetita">Nombre</label></div>
                   <div><input type="text" name="tutornombre" id="tutornombre" class="cajita form-control"  placeholder="Ejemplo: Guztavo" value="'.$alumtnombre.'"></div>
           		</div> 
                <div class="col-xs-6 col-md-6"><!-- domicilio -->
                   <div><label class="etiquetita">Domicilio</label></div>
                   <div><textarea  name="tutordomicilio" id="tutordomicilio" class="cajita form-control"  placeholder="Ejemplo: Juan Alvares #104 col. centro, villahermosa Tabasco" value="'.$alumtdomicilio.'"></textarea></div>
           		</div>                    
                <div class="col-xs-6 col-md-6"><!-- ocupacion -->
                   <div><label class="etiquetita">Ocupación</label></div>
                   <div><input type="text" name="tutorocupacion" id="tutorocupacion" class="cajita form-control"  placeholder="Ejemplo: Contador" value="'.$alumtocupacion.'"></div>
           		</div>
               <div class="col-xs-6 col-md-6"><!-- telefono -->
                   <div><label class="etiquetita">Telefono (Celular)</label></div>
                   <div><input type="text" name="tutorcelular" id="tutorcelular" class="cajita form-control"  placeholder="Ejemplo: 3159988" onKeyPress="return isNumberKey(this);" value="'.$alumtcelular.'"></div>
           		</div> 
                <div class="col-xs-6 col-md-6"><!-- telefono -->
                   <div><label class="etiquetita">Telefono (Casa)</label></div>
                   <div><input type="text" name="tutortelefono" id="tutortelefono" class="cajita form-control"  placeholder="Ejemplo: 3159988" onKeyPress="return isNumberKey(this);" value="'.$alumttelefono.'"></div>
           		</div>                                 
                <div class="col-xs-6 col-md-6"><!-- estudios -->
                   <div><label class="etiquetita">Estudios</label></div>
                   <div><input type="text" name="tutorestudios" id="tutorestudios" class="cajita form-control"  placeholder="Ejemplo: Lic. Administrador Empresarial" value="'.$alumtestudio.'"></div>
           		</div>                
            </div>
			
			
			<div class="tab-pane col-xs-12 col-md-12" id="doc"><!-- documentacion -->
            	<br>
				<div class="col-xs-6 col-md-6"><!-- escuela -->
                   <div><label class="etiquetita">Escuela de Procedencia</label></div>
                   <div><input type="text" name="alumbachiller" id="escuela" class="cajita form-control"  placeholder="Ejemplo: COBATAB Plantel Numero 1" value="'.$alumbachiller.'"></div>
           		</div>
                 <div class="col-xs-6 col-md-6"><!-- promedio -->
                   <div><label class="etiquetita">Promedio de Bachiller</label></div>
                   <div><input type="text" name="alumpromedio" id="promedio" class="cajita form-control" maxlength="3"  placeholder="Ejemplo: 8.8" value="'.$alumpromedio.'"></div>
           		</div>   
                <div class="col-xs-6 col-md-6"><!-- ciclo escolar -->
                   <div><label class="etiquetita">Periodo Escolar</label></div>
                   <div><select class="cajita form-control" name="alumper">
                   		<option value="Seleccione...">Seleccione...</option>';
                        $con=conexion();
                            $sql="select *from periodos order by  per_fecha_fin desc";
                       $res=mysql_query($sql,$con);
                            if(mysql_num_rows($res)==0){
                               echo '<b>No hay registros</b>';
                               }else{
                               while($row=mysql_fetch_array($res)){
								   
                           echo'<option value="'.$row['PER_ID'].'"'; if($alumper==$row['PER_ID']) print 'selected="true"';echo ' >'.$row['PER_FECHA_INI'].' - '.$row['PER_FECHA_FIN'].'</option>';
                           }
                    }
                      echo '</select></div>
           		</div> 
                 <div class="col-xs-6 col-md-6"><!-- ciclo escolar -->
                   <div><label class="etiquetita">Plan de Estudios</label></div>
                   <div><select class="cajita form-control" name="alumplan">
                   		<option value="Seleccione...">Seleccione...</option>';
                        $con=conexion();
                            $sql="select *from plan_estudios";
                       $res=mysql_query($sql,$con);
                            if(mysql_num_rows($res)==0){
                               echo '<b>No hay registros</b>';
                               }else{
                               while($row=mysql_fetch_array($res)){
                           echo'<option value="'.$row['PLAN_ID'].'"';if($alumplan==$row['PLAN_ID']) print 'selected="true"';echo '>'.$row['PLAN_FECHA'].'  '.$row['PLAN_NOMBRE'].'</option>';
                           }
                    }
					echo'</select></div>
           		</div> 
                   
              <div class="col-xs-6 col-md-6"><!-- ocupacion -->
                   <div><label class="etiquetita">Documentos Entregados</label></div>
                   <div>
                     <p>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumacta" id="alumacta" value="1"'; if($alumacta==1) print 'checked="true"'; echo '>
                         Acta de Nacimiento</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumsecundaria" id="alumsecundaria" value="1"'; if($alumsecundaria==1) print 'checked="true"'; echo '>
                         Certificado de Secundaria</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumhbachiller" id="alumhbachiller" value="1"'; if($alumhbachiller==1) print 'checked="true"'; echo '>
                         Certificado de Bachiller</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumfotos" id="alumfotos" value="1"'; if($alumfotos==1) print 'checked="true"'; echo '>
                         (6) Fotografia T/Infantil Blanco y Negro</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alummedico" id="alummedico" value="1"'; if($alummedico==1) print 'checked="true"'; echo '>
                         Certificado Medico</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumhcurp" id="alumhcurp" value="1"'; if($alumhcurp==1) print 'checked="true"'; echo '>
                         CURP</label>
                       <br>
                       <label class="etiquetita">
                         <input type="checkbox" name="alumpago" id="alumpago" value="1"'; if($alumpago==1) print 'checked="true"'; echo '>
                         Pago</label>
                       <br>
                     </p>
                 </div>
           		</div>
                                               
                <div class="col-xs-6 col-md-6"><!-- estudios -->
					<div><label class="etiquetita">Esta Becado?</label></div>
                    <div><select class="cajita form-control" name="alumbeca" id="alumbeca">
                    	<option value="0"';if($alumbeca==0){echo ' selected="true"';}echo'>No</option>
                        <option value="1"';if($alumbeca==1){echo ' selected="true"';}echo'>Si</option>
                    </select></div>
					<br>
                    <div><label class="etiquetita">Fecha de Egreso</label></div>
                    <div><input type="date" name="alumegreso" class="cajita form-control" value="'.$alumegreso.'"></div>
           		</div>
                                
            </div>
			
			';
 
 
 }else 
	if ($actualizar=="Docente" and $curp<>""){/////////////////////forulario para actualizar docentes

      $con=conexion();
      $sql="select * from doc_personas where doc_curp='$curp'";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
			while($row=mysql_fetch_array($res)){
			$doccurp=$row['DOC_CURP'];
            $docmatricula=$row['DOC_MATRICULA'];
			$docpuesto=$row['PST_ID'];
            $docnombre=$row['DOC_NOMBRE'];
            $docpaterno=$row['DOC_PATERNO'];
            $docmaterno=$row['DOC_MATERNO'];
            $docrfc=$row['DOC_RFC'];
            $docife=$row['DOC_IFE'];
            $docimss=$row['DOC_IMSS'];
            $doccorreo=$row['DOC_CORREO'];
            $doctelefono=$row['DOC_TELEFONO'];
            $docsexo=$row['DOC_SEXO'];
            $docnacimiento=$row['DOC_NACIMIENTO'];
            $doccolonia=$row['DOC_COLONIA'];
            $doccalle=$row['DOC_CALLE'];
            $docnumero=$row['DOC_NUMERO'];
            $doccp=$row['DOC_CP'];
            $docciudad=$row['DOC_CIUDAD'];
            $docmunicipio=$row['DOC_MUNICIPIO'];
            $docestado=$row['DOC_ESTADO'];
            $docingreso=$row['DOC_INGRESO'];
			   }
		   }
	
	
		echo '<script type="text/javascript" src="js/x0002.js"></script>';
        echo '<form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
		echo'
		<div class="menu container">
		<input type="hidden" name="doccurp2" id="doccurp2" class="cajita form-control" maxlength="18" value="'.$doccurp.'">
              		<div class="col-xs-6 col-md-4">
						<div><label class="etiquetita">Nombre (s)</label></div>
						<div><input type="nombre" name="docnombre" id="nombre" class="cajita form-control" value="'.$docnombre.'"></div>
                    </div>
                    <div class="col-xs-6 col-md-4">
						<div><label class="etiquetita">Apellido Paterno</label></div>
						<div><input type="text" name="docpaterno" id="paterno" class="cajita form-control" value="'.$docpaterno.'"></div>
                    </div>
                    <div class="col-xs-6 col-md-4">
					   <div><label class="etiquetita">Apellido Materno</label></div>
					   <div><input type="text" name="docmaterno" id="materno" class="cajita form-control" value="'.$docmaterno.'"></div>
           		    </div>
					<div class="col-xs-6 col-md-4">
						  <div><label class="etiquetita">Sexo</label></div>
						  <div><select name="docsexo" id="sexo" class="cajita form-control">
							   <option>Seleccione...</option>
							   <option value="1"';if($docsexo==1) print 'selected=true';echo'>Masculino</option>
							   <option value="0"';if($docsexo==0) print 'selected=true';echo'>Femenino</option>
							   </select></div>
                     </div>     
                     <div class="col-xs-6 col-md-4">     
							 <div><label class="etiquetita">Fecha de Nacimiento</label></div>
							<div><input type="date" name="docnacimiento" id="name"  class="cajita form-control" placeholder="YYYY-MM-dd" value="'.$docnacimiento.'"></div>
                     </div>
                    <div class="col-xs-12 col-md-12">
                         	<div><center><label class="etiquetita">Opciones</label></center></div>
                            <div><center><input type="submit" name="button" id="submit"  value="Guardar">   <input type="reset"></center></div>
					</div>
               </div> 
		
		


<div class="container">

        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#orange" data-toggle="tab">Documentación</a></li>
            <li><a href="#yellow" data-toggle="tab">Domicilio</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            
            <div class="tab-pane active" id="orange"><!--Documentacion-->

               <br/>    
                  <div class="col-xs-6 col-md-4">
                   <div><label class="etiquetita">Matricula</label></div>
                   <div><input type="matricula" name="docmatricula" id="matricula" class="cajita form-control" maxlength="17" value="'.$docmatricula.'"></div>
                 </div>
                 <div class="col-xs-6 col-md-4">
                      <div><label class="etiquetita">CURP</label></div>
                      <div><input type="text" name="doccurp" id="curp" class="cajita form-control" maxlength="18" value="'.$doccurp.'"></div>
                 </div>
                 <div class="col-xs-6 col-md-4">
                    <div><label class="etiquetita">RFC</label></div>
                    <div><input type="text" name="docrfc" id="rfc" class="cajita form-control" maxlength="13" value="'.$docrfc.'"></div>
                 </div>
                 <div class="col-xs-6 col-md-4">
                    <div><label class="etiquetita">Numero de I.N.E</label></div>
                    <div><input type="text" name="docife" id="ife" class="cajita form-control" maxlength="13" value="'.$docife.'"></div>
                 </div>
                 <div class="col-xs-6 col-md-4">
                    <div><label class="etiquetita">Numero del Seguro Medico</label></div>
                    <div><input type="text" name="docimss" id="imss" class="cajita form-control" maxlength="11" value="'.$docimss.'"></div>
                </div>
                <div class="col-xs-6 col-md-4">
                   <div><label class="etiquetita">Correo Electronico</label></div>
                  <div><input type="email" name="doccorreo" id="correo" class="cajita form-control" value="'.$doccorreo.'"></div>
                </div>
                <div class="col-xs-6 col-md-4">
                   <div><label class="etiquetita">Telefono</label></div>
                   <div><input type="tel" name="doctelefono" id="telefono" class="cajita form-control" value="'.$doctelefono.'"></div>
                </div>
                <div class="col-xs-6 col-md-4">
                   <div><label class="etiquetita">Fecha de Ingreso</label></div>
                   <div><input type="date" name="docingreso" id="ingreso" class="cajita form-control"  placeholder="YYYY-MM-dd" value="'.$docingreso.'"></div>
                </div>
                 <div class="col-xs-6 col-md-4">
                   <div><label class="etiquetita">Puesto</label></div>
                   <div><label class="etiquetita" name="docpuesto" id="puesto" value="1">Docente</label></div>
                </div>
              
    
            </div>
            <div class="tab-pane" id="yellow"><!--domicilio-->
            
            <br/>

              <div class="col-xs-6 col-md-4">
                 <div><label class="etiquetita">Colonia</label></div>
                 <div ><input type="text" name="doccolonia" id="colonia" class="cajita form-control" value="'.$doccolonia.'"></div>
             </div>
            <div class="col-xs-6 col-md-4">
                <div><label class="etiquetita">Calle</label></div>
                <div><input type="text" name="doccalle" id="calle" class="cajita form-control" value="'.$doccalle.'"></div>
            </div>
            <div class="col-xs-6 col-md-4">
               <div><label class="etiquetita">Numero</label></div>
               <div><input type="text" name="docnumero" id="numero" class="cajita form-control" minlength="0" maxlength="20" value="'.$docnumero.'"></div>
           </div>
           <div class="col-xs-6 col-md-4">
               <div><label class="etiquetita">Codigo Postal</label></div>
               <div><input type="text" name="doccp" id="cp" class="cajita form-control" maxlength="10" value="'.$doccp.'"></div>
          </div>
         <div class="col-xs-6 col-md-4">
              <div><label class="etiquetita">Municipio</label></div>
              <div><input type="text" name="docmunicipio" id="municipio" class="cajita form-control" value="'.$docmunicipio.'"></div>
         </div>
         <div class="col-xs-6 col-md-4">
             <div><label class="etiquetita">Ciudad</label></div>
             <div><input type="text" name="docciudad" id="ciudad" class="cajita form-control" value="'.$docciudad.'"></div>
         </div>
         <div class="col-xs-6 col-md-4">
            <div><label class="etiquetita">Estado</label></div>
            <div><select name="docestado" id="estado" class="cajita form-control">
                 <option>Seleccione...</option>
                 <option value="Aguas Calientes"'; if($docestado=='Aguas Calientes')      {print 'selected=true';} echo'>Aguas Calientes</option>
                 <option value="Baja California"'; if($docestado=='Baja California')     {print 'selected=true';} echo'>Baja California</option>
                 <option value="Baja California Sur"'; if($docestado=='Baja California Sur') {print 'selected=true';} echo'>Baja California Sur</option>
                 <option value="Campeche"'; if($docestado=='Campeche')            {print 'selected=true';} echo'>Campeche</option>
                 <option value="Coahuila"'; if($docestado=='Coahuila')            {print 'selected=true';} echo'>Coahuila</option>
                 <option value="Colima"'; if($docestado=='Colima')              {print 'selected=true';} echo'>Colima</option>
                 <option value="Chiapas"'; if($docestado=='Chiapas')             {print 'selected=true';} echo'>Chiapas</option>
                 <option value="Chihuahua"'; if($docestado=="Chihuahua")           {print 'selected=true';} echo'>Chihuahua</option>
                 <option value="Distrito Federal"'; if($docestado=="Distrito Federal")    {print 'selected=true';} echo'>Distrito Federal</option>
                 <option value="Durango"'; if($docestado=="Durango")             {print 'selected=true';} echo'>Durango</option>
                 <option value="Guanajuato"'; if($docestado=="Guanajuato")          {print 'selected=true';} echo'>Guanajuato</option>
                 <option value="Guerrero"'; if($docestado=="Guerrero")            {print 'selected=true';} echo'>Guerrero</option>
                 <option value="Hidalgo"'; if($docestado=="Hidalgo")             {print 'selected=true';} echo'>Hidalgo</option>
                 <option value="Jalisco"'; if($docestado=="Jalisco")             {print 'selected=true';} echo'>Jalisco</option>
                 <option value="México"'; if($docestado=="México")              {print 'selected=true';} echo'>México</option>
                 <option value="Michoacan"'; if($docestado=="Michoacan")           {print 'selected=true';} echo'>Michoacán</option>
                 <option value="Morelos"'; if($docestado=="Morelos")             {print 'selected=true';} echo'>Morelos</option>
                 <option value="Nayarit"'; if($docestado=="Nayarit")             {print 'selected=true';} echo'>Nayarit</option>
                 <option value="Nuevo Leon"'; if($docestado=="Nuevo Leon")          {print 'selected=true';} echo'>Nuevo Leon</option>
                 <option value="Oaxaca"'; if($docestado=="Oaxaca")              {print 'selected=true';} echo'>Oaxaca</option>
                 <option value="Puebla"'; if($docestado=="Puebla")              {print 'selected=true';} echo'>Puebla</option>
                 <option value="Querétaro"'; if($docestado=="Querétaro")           {print 'selected=true';} echo'>Querétaro</option>
                 <option value="Quintana Roo"'; if($docestado=="Quintana Roo")        {print 'selected=true';} echo'>Quintana Roo</option>
                 <option value="San Luis Potosí"'; if($docestado=="San Luis Potosí")     {print 'selected=true';} echo'>San Luis Potosí</option>
                 <option value="Sinaloa"'; if($docestado=="Sinaloa")             {print 'selected=true';} echo'>Sinaloa</option>
                 <option value="Sonora"'; if($docestado=="Sonora")              {print 'selected=true';} echo'>Sonora</option>
                 <option value="Tabasco"'; if($docestado=="Tabasco")             {print 'selected=true';} echo'>Tabasco</option>
                 <option value="Tamaulipas"'; if($docestado=="Tamaulipas")          {print 'selected=true';} echo'>Tamaulipas</option>
                 <option value="Tlaxcala"'; if($docestado=="Tlaxcala")            {print 'selected=true';} echo'>Tlaxcala</option>
                 <option value="Varacruz"'; if($docestado=="Varacruz")            {print 'selected=true';} echo'>Veracruz</option>
                 <option value="Yucatán"'; if($docestado=="Yucatán")             {print 'selected=true';} echo'>Yucatán</option>
                 <option value="Zacatecas"'; if($docestado=="Zacatecas")           {print 'selected=true';} echo'>Zacatecas</option>

                 </select></div>
            </div>

            </div>';
		
		
		}else
	if ($actualizar=="Administrativo" and $curp<>""){//////////////formulario para actualizar administrativos
	
      $con=conexion();
      $sql="select * from sec_personas where sec_curp='$curp'";
      $res=mysql_query($sql,$con);
      if(mysql_num_rows($res)==0){
         echo '<b>No hay registros</b>';
           }else{
			while($row=mysql_fetch_array($res)){
			$adcurp=$row['SEC_CURP'];
			$admatricula=$row['SEC_MATRICULA'];
			$adpuesto=$row['PST_ID'];
			$adnombre=$row['SEC_NOMBRE'];
			$adpaterno=$row['SEC_PATERNO'];
			$admaterno=$row['SEC_MATERNO'];
			$adrfc=$row["SEC_RFC"];
			$adife=$row['SEC_IFE'];
			$adimss=$row['SEC_IMSS'];
			$adcorreo=$row['SEC_CORREO'];
			$adtelefono=$row['SEC_TELEFONO'];
			$adsexo=$row['SEC_SEXO'];
			$adnacimiento=$row['SEC_NACIMIENTO'];
			$adcolonia=$row['SEC_COLONIA'];
			$adcalle=$row['SEC_CALLE'];
			$adnumero=$row['SEC_NUMERO'];
			$adcp=$row['SEC_CP'];
			$adciudad=$row['SEC_CIUDAD'];
			$admunicipio=$row['SEC_MUNICIPIO'];
			$adestado=$row['SEC_ESTADO'];
			$adlabora=$row['SEC_LABORA'];
			$adingreso=$row['SEC_INGRESO'];
			$adpermiso=$row['SEC_PERMISO'];
			   }
		   }
	
		echo '<script type="text/javascript" src="js/x0003.js"></script>';
        echo '<form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
		echo '<div class="container">
<section class="main">
<input type="hidden" name="adcurp2" id="adcurp2" class="cajita form-control" maxlength="18" value="'.$adcurp.'" readonly>
<div class="container menu">
              		  <div class="col-xs-6 col-md-4">
						<div><label class="etiquetita">Nombre (s)</label></div>
						<div><input type="nombre" name="adnombre" id="nombre" class="cajita form-control" value="'.$adnombre.'"></div>
                      </div>
                    <div class="col-xs-6 col-md-4">
						<div><label class="etiquetita">Apellido Paterno</label></div>
						<div><input type="text" name="adpaterno" id="paterno" class="cajita form-control" value="'.$adpaterno.'"></div>
                    </div>
                    <div class="col-xs-6 col-md-4">
					   <div><label class="etiquetita">Apellido Materno</label></div>
					   <div><input type="text" name="admaterno" id="materno" class="cajita form-control" value="'.$admaterno.'"></div>
           		    </div>
					<div class="col-xs-6 col-md-4">
						  <div><label class="etiquetita">Sexo</label></div>
						  <div><select name="adsexo" id="sexo" class="cajita form-control">
							   <option>Seleccione...</option>
							   <option value="1"';if($adsexo==1) print 'selected=true';echo'>Masculino</option>
							   <option value="0"';if($adsexo==0) print 'selected=true';echo'>Femenino</option>
							   </select></div>
                     </div>     
                       <div class="col-xs-6 col-md-4">     
								<div><label class="etiquetita">Fecha de Nacimiento</label></div>
								<div><input type="date" name="adnacimiento" id="name"  class="cajita form-control" placeholder="YYYY-MM-dd" value="'.$adnacimiento.'"></div>
                     </div>

					<div class="col-xs-6 col-md-12"><center>
						 <div><label class="etiquetita">Permisos</label></div>
						 <div><input type="radio" name="adlabora" value="0" id="adlabora_0"'; if($adlabora==0) print 'checked=true>';
					   echo' <label>No Labora</label>
							 <input type="radio" name="adlabora" value="1" id="adlabora_1" '; if($adlabora==1) print 'checked=true>';
					   echo' <label>Labora</label></div></center>
           		   
					</div>
					
                    <div class="col-xs-12 col-md-12">
                         	<div><center><label class="etiquetita">Opciones</label></center></div>

                            <div><center><input type="submit" name="button" id="submit"  value="Guardar">   <input type="reset"></center></div>
						</div>
               </div> 



<div id="container">

        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#orange" data-toggle="tab">Documentación</a></li>
            <li><a href="#yellow" data-toggle="tab">Domicilio</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="orange"><!--Documentación-->
              
              <br/>
              <div class="col-xs-6 col-md-4">
                 <div><label class="etiquetita">Matricula</label></div>
                 <div><input type="matricula" name="admatricula" id="matricula" class="cajita form-control" maxlength="17" value="'.$admatricula.'"></div>
              </div>
              <div class="col-xs-6 col-md-4">
                 <div><label class="etiquetita">CURP</label></div>
                 <div><input type="text" name="adcurp" id="curp" class="cajita form-control" maxlength="18" value="'.$adcurp.'"></div>
              </div>
              <div class="col-xs-6 col-md-4">
                 <div><label class="etiquetita">RFC</label></div>
                 <div><input type="text" name="adrfc" id="rfc" class="cajita form-control" maxlength="13" value="'.$adrfc.'"></div>
             </div>
             <div class="col-xs-6 col-md-4">
                <div><label class="etiquetita">Numero de I.F.E</label></div>
                <div><input type="text" name="adife" id="ife" class="cajita form-control" maxlength="13" value="'.$adife.'"></div>
             </div>
             <div class="col-xs-6 col-md-4">
                <div><label class="etiquetita">Numero del IMSS</label></div>
                <div><input type="text" name="adimss" id="imss" class="cajita form-control" maxlength="11" value="'.$adimss.'"></div>
            </div>
            <div class="col-xs-6 col-md-4">
               <div><label class="etiquetita">Correo Electronico</label></div>
               <div><input type="email" name="adcorreo" id="correo" class="cajita form-control" value="'.$adcorreo.'"></div>
            </div>
            <div class="col-xs-6 col-md-4">
               <div><label class="etiquetita">Telefono</label></div>
               <div><input type="tel" name="adtelefono" id="telefono" class="cajita form-control" value="'.$adtelefono.'"></div>
            </div>
            <div class="col-xs-6 col-md-4">
              <div><label class="etiquetita">Fecha de Ingreso</label></div>
              <div><input type="date" name="adingreso" id="ingreso" class="cajita form-control"  placeholder="YYYY-MM-dd" value="'.$adingreso.'"></div>
           </div>
           <div class="col-xs-6 col-md-4">
              <div><label class="etiquetita">Permisos</label></div>
             <div><label>
                 <input type="radio" name="adpermiso" value="0" id="adpermiso_0"'; if($adpermiso==0) print 'checked=true>';
           echo' <label>Escritura</label>
                 <input type="radio" name="adpermiso" value="1" id="adpermiso_1" '; if($adpermiso==1) print 'checked=true>';
           echo' <label>Maestro</label>

              </div>
           		   
		   </div>';
		   
		   	   			
		   
		    echo'
            </div>
            <div class="tab-pane" id="yellow"><!--domicilio-->
             
             
           <br/>
              <div class="col-xs-6 col-md-4">
                 <div><label class="etiquetita">Colonia</label></div>
                 <div ><input type="text" name="adcolonia" id="colonia" class="cajita form-control" value="'.$adcolonia.'"></div>
              </div>
              <div class="col-xs-6 col-md-4">
                 <div><label class="etiquetita">Calle</label></div>
                 <div><input type="text" name="adcalle" id="calle" class="cajita form-control" value="'.$adcalle.'"></div>
              </div>
              <div class="col-xs-6 col-md-4">
                 <div><label class="etiquetita">Numero</label></div>
                 <div><input type="text" name="adnumero" id="numero" class="cajita form-control" minlength="0" maxlength="20" value="'.$adnumero.'"></div>
              </div>
              <div class="col-xs-6 col-md-4">
                 <div><label class="etiquetita">Codigo Postal</label></div>
                 <div><input type="text" name="adcp" id="cp" class="cajita form-control" maxlength="10" value="'.$adcp.'"></div>
              </div>
              <div class="col-xs-6 col-md-4">
                 <div><label class="etiquetita">Municipio</label></div>
                 <div><input type="text" name="admunicipio" id="municipio" class="cajita form-control" value="'.$admunicipio.'"></div>
              </div>
              <div class="col-xs-6 col-md-4">
                 <div><label class="etiquetita">Ciudad</label></div>
                 <div><input type="text" name="adciudad" id="ciudad" class="cajita form-control" value="'.$adciudad.'"></div>
              </div>
              <div class="col-xs-6 col-md-4">
                  <div><label class="etiquetita">Estado</label></div>
                  <div><select name="adestado" id="estado" class="cajita form-control">
                 <option>Seleccione...</option>
                 <option value="Aguas Calientes"'; if($adestado=='Aguas Calientes')      {print 'selected=true';} echo'>Aguas Calientes</option>
                 <option value="Baja California"'; if($adestado=='Baja California')     {print 'selected=true';} echo'>Baja California</option>
                 <option value="Baja California Sur"'; if($adestado=='Baja California Sur') {print 'selected=true';} echo'>Baja California Sur</option>
                 <option value="Campeche"'; if($adestado=='Campeche')            {print 'selected=true';} echo'>Campeche</option>
                 <option value="Coahuila"'; if($adestado=='Coahuila')            {print 'selected=true';} echo'>Coahuila</option>
                 <option value="Colima"'; if($adestado=='Colima')              {print 'selected=true';} echo'>Colima</option>
                 <option value="Chiapas"'; if($adestado=='Chiapas')             {print 'selected=true';} echo'>Chiapas</option>
                 <option value="Chihuahua"'; if($adestado=="Chihuahua")           {print 'selected=true';} echo'>Chihuahua</option>
                 <option value="Distrito Federal"'; if($adestado=="Distrito Federal")    {print 'selected=true';} echo'>Distrito Federal</option>
                 <option value="Durango"'; if($adestado=="Durango")             {print 'selected=true';} echo'>Durango</option>
                 <option value="Guanajuato"'; if($adestado=="Guanajuato")          {print 'selected=true';} echo'>Guanajuato</option>
                 <option value="Guerrero"'; if($adestado=="Guerrero")            {print 'selected=true';} echo'>Guerrero</option>
                 <option value="Hidalgo"'; if($adestado=="Hidalgo")             {print 'selected=true';} echo'>Hidalgo</option>
                 <option value="Jalisco"'; if($adestado=="Jalisco")             {print 'selected=true';} echo'>Jalisco</option>
                 <option value="México"'; if($adestado=="México")              {print 'selected=true';} echo'>México</option>
                 <option value="Michoacan"'; if($adestado=="Michoacan")           {print 'selected=true';} echo'>Michoacán</option>
                 <option value="Morelos"'; if($adestado=="Morelos")             {print 'selected=true';} echo'>Morelos</option>
                 <option value="Nayarit"'; if($adestado=="Nayarit")             {print 'selected=true';} echo'>Nayarit</option>
                 <option value="Nuevo Leon"'; if($adestado=="Nuevo Leon")          {print 'selected=true';} echo'>Nuevo Leon</option>
                 <option value="Oaxaca"'; if($adestado=="Oaxaca")              {print 'selected=true';} echo'>Oaxaca</option>
                 <option value="Puebla"'; if($adestado=="Puebla")              {print 'selected=true';} echo'>Puebla</option>
                 <option value="Querétaro"'; if($adestado=="Querétaro")           {print 'selected=true';} echo'>Querétaro</option>
                 <option value="Quintana Roo"'; if($adestado=="Quintana Roo")        {print 'selected=true';} echo'>Quintana Roo</option>
                 <option value="San Luis Potosí"'; if($adestado=="San Luis Potosí")     {print 'selected=true';} echo'>San Luis Potosí</option>
                 <option value="Sinaloa"'; if($adestado=="Sinaloa")             {print 'selected=true';} echo'>Sinaloa</option>
                 <option value="Sonora"'; if($adestado=="Sonora")              {print 'selected=true';} echo'>Sonora</option>
                 <option value="Tabasco"'; if($adestado=="Tabasco")             {print 'selected=true';} echo'>Tabasco</option>
                 <option value="Tamaulipas"'; if($adestado=="Tamaulipas")          {print 'selected=true';} echo'>Tamaulipas</option>
                 <option value="Tlaxcala"'; if($adestado=="Tlaxcala")            {print 'selected=true';} echo'>Tlaxcala</option>
                 <option value="Varacruz"'; if($adestado=="Varacruz")            {print 'selected=true';} echo'>Veracruz</option>
                 <option value="Yucatán"'; if($adestado=="Yucatán")             {print 'selected=true';} echo'>Yucatán</option>
                 <option value="Zacatecas"'; if($adestado=="Zacatecas")           {print 'selected=true';} echo'>Zacatecas</option>

                 </select></div>
               </div>
             
            </div>';
	 
 
		
		
		}else{
			

			echo'<br/><center><label class="submenu">ERROR ZETA_000X ACCESO RESTRINGIDO</label><br><img src="../img/error.fw.png"></center>';

			
			}
?> 

            </div>
</form>
        </div>




</div>





<?php include('../footer.php');?>
