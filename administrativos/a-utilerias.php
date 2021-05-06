<?php include('validaacceso.php');?>
<?php include('header.php');


$actualizar=base64_decode($_GET['SKYNET']);
$ides= base64_decode($_GET['MATRIX']);

    if ($actualizar=="PEstudios" and $ides<>""){////////////////formulario para actualizaer planes de estudios
        
		$con=conexion();
		$sql='select*from plan_estudios where plan_id="'.$ides.'"';
		$res=mysql_query($sql,$con);
		if(mysql_num_rows($res)==0){
			echo"<b>No hay registros</b>";
			}
		else{
				
				while($row=mysql_fetch_array($res)){
					$planid=$row['PLAN_ID'];
					$plannombre=$row['PLAN_NOMBRE'];
					$plansemestre=$row['PLAN_SEMESTRE'];
					$planfecha=$row['PLAN_FECHA'];

			   }
				
				}
       
	    echo'<script type="text/javascript" src="js/p0001.js"></script>';
        echo'<form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
		echo'<input type="hidden" name="planid" id="planid" value="'.$planid.'" readonly> ';
		echo'   	<div class="container">
						<div id="content">
						<br/>
							<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#red" data-toggle="tab" class="btn btn-primary btn-lg">Plan de Estudios</a></li>					
							</ul>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="red">
							   
								  <br/>
								   <div class="col-xs-6 col-md-4">
										 <div><label class="etiquetita">Plan de Estudios</label></div>
										 <div><input type="text" name="anio" id="textfield" class="cajita form-control" onkeypress="return isNumberKey(this)" maxlength="4" value="'.$planfecha.'"></div>
								   </div>
					
								   <div class="col-xs-6 col-md-4">
										<div><label class="etiquetita">Numero de Semestres</label></div>
										<div><input type="number" name="semestre" id="textfield"  class="cajita form-control" min="1" max="12" value="'.$plansemestre.'"></div>
								   </div>
								   <div class="col-xs-6 col-md-4">
										<div><label class="etiquetita">Nombre Carrera</label></div>
										<div><input type="text" name="carrera" id="textfield" class="cajita form-control" value="'.$plannombre.'"></div>     
								   </div>
								   
                                      <div class="conatainer">
										 <section class="col-md-12">
										   <article class="col-xs-12 col-md-12">
										   <br/>
											 <center><input type=submit name="button" id="submit"  value="Guardar"> <input type="reset"></center>
										  </article> 
										</section>
										</div>
										  
								</div>

					
							</div>
						</div>';
        }else 
	if ($actualizar=="Materias" and $ides<>""){/////////////////////forulario para actualizar Materias

		$con=conexion();
		$sql="select*from materias where asig_id=".$ides;
		$res=mysql_query($sql,$con);
		if(mysql_num_rows($res)==0){
			echo '<b>No hay registros</b>';}
			else{
				while ($row=mysql_fetch_array($res)){
						$asigid=$row['ASIG_ID'];
						$asigsem=$row['ID_SEM'];
						$asignombre=$row['ASIG_NOMBRE'];
						$asigmatricula=$row['ASIG_MATRICULA'];
						$asigclasificacion=$row['ASIG_CLASIFICACION'];
						$asighora=$row['ASIG_HORAS'];
						$asigcredito=$row['ASIG_CREDITOS'];
						$asiglink=$row['ASIG_LINK'];
						$asigorden=$row['ASIG_ORDEN'];
						$asigunidad=$row['ASIG_UNIDAD'];
						}
				}
		
		echo'<script type="text/javascript" src="js/m0001.js"></script>
        <center>      <form method="POST" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
		
		echo'<input type="hidden" name="asigid" id="asigid" value="'.$asigid.'" readonly> 
		<div class="container">
		<form name="materias" action="zeta_x0001.php" method="post"   onKeyPress="return disableEnterKey(event);">
              <div class="col-xs-12 col-md-4">
                   <div> <label class="etiquetita">Materia</label></div>
                   <div> <input type="text" name="matmateria"  class="cajita form-control" placeholder="Ejemplo: Historia Universal" value="'.$asignombre.'"></div>
              	   <br/>
              </div>
              <div class="col-xs-12 col-md-4">
                  <div> <label class="etiquetita">Clasificación</label></div>
                  <div><select class="cajita form-control" name="matcalsificacion">
                  	<option value="sin clasificar">Seleccione...</option>
                    <option value="Psicopedagógico"';if($asigclasificacion=="Psicopedagógico"){echo 'selected="true"';}echo'>Psicopedagógico</option>
                    <option value="Preparación para la Enseñanza y el Aprendizaje"';if($asigclasificacion=="Preparación para la Enseñanza y el Aprendizaje"){echo 'selected="true"';}echo'>Preparación para la Enseñanza y el Aprendizaje</option>
                    <option value="Lengua Adicional y Tecnologías de la Información y la Comunicación" ';if($asigclasificacion=="Lengua Adicional y Tecnologías de la Información y la Comunicación"){echo 'selected="true"';}echo'>Lengua Adicional y Tecnologías de la Información y la Comunicación</option>
                    <option value="Práctica Profesional" ';if($asigclasificacion=="Práctica Profesional"){echo 'selected="true"';}echo'>Práctica Profesional</option>
                    <option value="Optativos" ';if($asigclasificacion=="Optativos"){echo 'selected="true"';}echo'>Optativos</option>
                </select></div>
                  <br/>
             </div>
             <div class="col-xs-12 col-md-4">
                  <div> <label class="etiquetita">Matricula</label></div>
                  <div><input type="text" name="matmatricula" class="cajita form-control" placeholder="Ejemplo: CVE12700000" value="'.$asigmatricula.'"></div>
                  <br/>
             </div>
    		 
             <div class="col-xs-12 col-md-4">
                  <div> <label class="etiquetita">Horas Asignadas</label></div>
                  <div><input type="text" name="mathoras" class="cajita form-control" onKeyPress="return isNumberKey(event)" placeholder="Ejemplo: 2 hrs" value="'.$asighora.'"></div>
                  <br/>
             </div>
             <div class="col-xs-12 col-md-4">
                  <div> <label class="etiquetita">Creditos</label></div>
                  <div><input type="text" name="matcreditos" class="cajita form-control" onKeyPress="return isNumberKey(event)" max="3"  placeholder="Ejemplo: 100" value="'.$asigcredito.'"></div>
                  <br/>
             </div>
             <div class="col-xs-12 col-md-4">
                  <div> <label class="etiquetita">Enlace</label></div>
                  <div><input type="text" name="matlink" class="cajita form-control" placeholder="Ejemplo: www.segob.edu.mx/etc..." value="'.$asiglink.'"></div>
                  <br/>
             </div>
             <div class="col-xs-12 col-md-4">
                  <div> <label class="etiquetita">Orden</label></div>
                  <div><input type="text" name="matorden" class="cajita form-control" onKeyPress="return isNumberKey(event)" placeholder="Ejemplo: 2do lugar" value="'.$asigorden.'"></div>
                  <br/>
             </div>
             
             <div class="col-xs-12 col-md-4">
                  <div> <label class="etiquetita">Numero de Unidades</label></div>
                  <div><select name="matunidad" class="cajita form-control" >
                  		<option>Seleccione...</option>
                        <option value="1"'; if($asigorden==1){echo 'selected="true"';} echo'>1 Unidades</option>
                        <option value="2"'; if($asigorden==2){echo 'selected="true"';} echo'>2 Unidades</option>
                        <option value="3"'; if($asigorden==3){echo 'selected="true"';} echo'>3 Unidades</option>
                        <option value="4"'; if($asigorden==4){echo 'selected="true"';} echo'>4 Unidades</option>

                  </select></div>
                  <br/>
             </div>

             
               <div  class="col-xs-12 col-md-6" id="ResultadoSemestres"></div>
               </div>
                          <div class="conatainer">
							 <section class="col-md-12">
							   <article class="col-xs-12 col-md-12">
							   <br/>
								 <center><input type=submit name="button" id="submit"  value="Guardar"> <input type="reset"></center>
							  </article> 
							</section>';
		
		
		}else
	if ($actualizar=="Horarios" and $ides<>""){//////////////formulario para actualizar Horarios
	        
		
			$con=conexion();
			$sql="select * from horarios where hor_id=".$ides;
			$res=mysql_query($sql,$con);
			if(mysql_num_rows($res)==0){
			    
				echo '<b>No hay registros</b>';
				}
		else{
			
				while ($row=mysql_fetch_array($res)){
						$horid=$row['HOR_ID'];
						$horhora=$row['HOR_HORA'];
	
					
					}
					}
		echo'<script type="text/javascript" src="js/h0001.js"></script>';
        echo'<form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
		echo'<input type="hidden" name="horid" id="horid" value="'.$horid.'" readonly> ';
					echo'<div class="container">
					<div id="content">
						<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
							<li class="active"><a href="#red" data-toggle="tab">Nuevo Horario</a></li>			
						</ul>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="red">
							<br/>
								 <div class="col-xs-6 col-md-6">
								  <div><label class="etiquetita">Hora</label></div>
								  <div><input type="time" name="hhorario" id="textfield" class="cajita form-control" value="'.$horhora.'"></div>
							   </div>
				
								   <div class="conatainer">
									 <section class="col-md-12">
									   <article class="col-xs-12 col-md-6">
									   <br/>
										 <center><input type=submit name="button" id="submit"  value="Guardar"> <input type="reset"></center>
									  </article> 
									</section>';

		}else
	if ($actualizar=="Semestres" and $ides<>""){//////////////formulario para actualizar Semestres
	    

		$con=conexion();
		$sql="select * from semestres where sem_id=".$ides;
		$res=mysql_query($sql,$con);
		if(mysql_num_rows($res)==0){
			    
				echo '<b>No hay registros</b>';
				}
		else{
			
				while ($row=mysql_fetch_array($res)){
						$semid=$row['SEM_ID'];
						$semplan=$row['PLAN_ID'];
						$semnumero=$row['SEM_GRADO_NUMERO'];
						$semletra=$row['SEM_GRADO_LETRA'];
						$semat=$row['SEM_MATERIA'];
					
					}
					}
        
		echo' <script type="text/javascript" src="js/s0001.js"></script>

			<form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
		echo '<div class="container">
			 <input type="hidden" name="semid" id="semids" value="'.$semid.'" readonly> 
			    <div id="content">
					<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
						<li class="active"><a href="#red" data-toggle="tab">Semestres</a></li>
					</ul>
					<div id="my-tab-content" class="tab-content">
						<div class="tab-pane active" id="red">
							  <div class="col-xs-6 col-md-4">
							
								<div><label class="etiquetita">Plan de Estudio</label></div>
								<div><select id="semplan" name="semplan" class="cajita form-control" onClick="return BuscarCiclos(this);">
                  		<option>Seleccione...</option>';
				
					 	  $con=conexion();
                          $sql="select*from plan_estudios order by PLAN_FECHA DESC";
                          $res=mysql_query($sql,$con);
                          if(mysql_num_rows($res)==0){
                             echo '<b>No hay registros</b>';
                               }else{
                             while($row=mysql_fetch_array($res)){
                        echo'<option value="'.$row['PLAN_ID'].'" ';if($semplan==$row['PLAN_ID']){echo'selected=true';} echo' >'.$row['PLAN_FECHA'].' ' .$row['PLAN_NOMBRE'].'</option>'; 
						}	
						}echo'   
							</select></div>
							</div>
							  <div class="col-xs-6 col-md-4">
							
								<div><label class="etiquetita">Semestre Numero</label></div>
								<div><input type="number" name="semestrenumero" id="semestrenumero" min="1"  max="12" class="cajita form-control" value='.$semnumero.'></div>
							
							  </div>
							  <div class="col-xs-6 col-md-4">
								
								<div><label class="etiquetita">Semestre Letra</label></div>
								<div><input type="text" name="semestreltra" id="semestreltra" class="cajita form-control" value="'.$semletra.'"></div>
								
							  </div> 
							  <div class="col-xs-6 col-md-4">
								
								<div><label class="etiquetita">Numero de Materias</label></div>
								<div><input type="text" name="semat" id="semat" class="cajita form-control" value="'.$semat.'"></div>
								
							  </div> 
							  <div class="conatainer">
								 <section class="col-md-12">
								   <article class="col-xs-12 col-md-12">
								   <br/>
									 <center><input type=submit name="button" id="submit"  value="Guardar"> <input type="reset"></center>
								  </article> 
								</section>
								</div>       ';
		

		}else
	  if ($actualizar=="Estatus" and $ides<>""){//////////////formulario para actualizar estatus
	    

		$con=conexion();
		$sql="select * from estatus where est_id=".$ides;
		$res=mysql_query($sql,$con);
		if(mysql_num_rows($res)==0){
			    
				echo '<b>No hay registros</b>';
				}
		else{
			
				while ($row=mysql_fetch_array($res)){
						$estid=$row['EST_ID'];
						$estestatus=$row['EST_ESTATUS'];
					
					}
					}
        
		echo' <script type="text/javascript" src="js/s0001.js"></script>

			<form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
		echo '<div class="container">
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#red" data-toggle="tab">Información de Estatus</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
  <br>
                    <center>
					<input type="hidden" name="estid" id="estid" value="'.$estid.'" readonly> 
                    <div class="col-xs-6 col-md-4"><label class="etiquetita">Estatus</label></div>
                    <div class="col-xs-6 col-md-3"><input type="text" name="estestatus" id="textfield" class="cajita form-control" value="'.$estestatus.'"></div>
                    </center>
                    
                    <div class="conatainer">
                 <section class="col-md-12">
				 <br/>
                   <article class="col-xs-12 col-md-12">
                     <center><input type=submit name="button" id="submit"value="Guardar"> <input type="reset">
                     </center>
                   </article> 
                 </section> </div>     ';
		

		}else
	if ($actualizar=="Puestos" and $ides<>""){//////////////formulario para actualizar puestos
	    

		$con=conexion();
		$sql="select * from puestos where pst_id=".$ides;
		$res=mysql_query($sql,$con);
		if(mysql_num_rows($res)==0){
			    
				echo '<b>No hay registros</b>';
				}
		else{
			
				while ($row=mysql_fetch_array($res)){
						$pstid=$row['PST_ID'];
						$pstnombre=$row['PST_NOMBRE'];
						$pstabreviatura=$row['PST_ABREVIATURA'];
					
					}
					}
        
		echo' <script type="text/javascript" src="js/pu0001.js"></script>

			<form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
		echo '<div class="container">
		<div id="content">
			<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
				<li class="active"><a href="#red" data-toggle="tab">Información de los Puestos</a></li>
			</ul>
			<div id="my-tab-content" class="tab-content">
				<div class="tab-pane active" id="red">
	
				  <div class="col-xs-6 col-md-4">
				         <input type="hidden" name="pstid" id="estid" value="'.$pstid.'" readonly> 
					<div><label class="etiquetita">Nombre del Puesto</label></div>
					<div><input type="text" name="nompuesto" id="textfield" class="cajita form-control" value="'.$pstnombre.'"></div>
				  </div>
				  
				  <div class="col-xs-6 col-md-4">
					<div><label class="etiquetita">Abeviatura</label></div>
					<div><input type="text" name="abpuesto" id="textfield2" class="cajita form-control" value="'.$pstabreviatura.'"></div>
				  </div>
	
				 <div class="conatainer">
				 <section class="col-md-12">
				 <br/>
				   <article class="col-xs-12 col-md-12">
					 <center><input type=submit name="button" id="submit"value="Guardar"> <input type="reset">
					 </center>
				   </article> 
				 </section></div>

       ';
		

		}else
	if ($actualizar=="Documentos" and $ides<>""){//////////////formulario para actualizar Documentos
	    

		$con=conexion();
		$sql="select * from Documentos where doc_id=".$ides;
		$res=mysql_query($sql,$con);
		if(mysql_num_rows($res)==0){
			    
				echo '<b>No hay registros</b>';
				}
		else{
			
				while ($row=mysql_fetch_array($res)){
						$docid=$row['DOC_ID'];
						$nomdoc=$row['DOC_NOMBRE'];
					
					}
					}
        
		echo' <script type="text/javascript" src="js/doc0001.js"></script>

			<form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
		echo '<div class="container">
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
		
            <li class="active"><a href="#red" data-toggle="tab">Información de Documentos</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
               
               <br>
               <div class="col-xs-6 col-md-4">
			   <input type="hidden" name="docid" id="ddocid" value="'.$docid.'" readonly> 
                   <div><label class="etiquetita">Documento</label></div>
                   <div><input class="cajita form-control" name="nomdocumento" id="documento" value="'.$nomdoc.'"></div>
               </div>
               
                <div class="wrapper-file-input col-xs-6 col-md-8">
                     <center><div><label class="etiquetita">Opciones</label></div></center>
                     <center>
                     <input type=submit name="button" id="submit"  value="Guardar">   <input type="reset">
                     </center> 
                 </div>
                </form> 
            </div>
 

        </div>
    </div>
</div>


       ';
		

		}else
	if ($actualizar=="Periodos" and $ides<>""){//////////////formulario para actualizar Documentos
	    

		$con=conexion();
		$sql="select * from periodos where per_id=".$ides;
		$res=mysql_query($sql,$con);
		if(mysql_num_rows($res)==0){
			    
				echo '<b>No hay registros</b>';
				}
		else{
			
				while ($row=mysql_fetch_array($res)){
						$perid=$row['PER_ID'];
						$perini=$row['PER_FECHA_INI'];
						$perfin=$row['PER_FECHA_FIN'];
						$planid=$row['PLAN_ID'];
					}
					}
        
		echo' <script type="text/javascript" src="js/pe0001.js"></script>

			<form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
		echo '<div class="container">
  <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#red" data-toggle="tab">Informacion del Periodo</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
            
            <br> <form method="post" action="zeta_x0001.php" onsubmit="return validarForm(this);">
                  <div class="col-xs-6 col-md-4">
				  <input type="hidden" name="perid" id="ddocid" value="'.$perid.'" readonly>
                    <div><label class="etiquetita">Fecha de Inicio</label></div>
                    <div><input name="periodoini"type="date" placeholder="yyyy-mm-dd" class="cajita form-control" value="'.$perini.'"></div>
                  </div>
    
                 <div class="col-xs-6 col-md-4">
                    <div><label class="etiquetita">Fecha Fin</label></div>
                    <div><input name="periodofin" type="date" placeholder="yyyy-mm-dd" class="cajita form-control" value="'.$perfin.'"></div>
                  </div>

				<div class="col-xs-6 col-md-4">
                	<div><label class="etiquetita">Periodo Escolar</label></div>
                    <div><select name="planid" id="planid" class="cajita form-control">
                       <option>Seleccione...</option>';
                        $con=conexion();
                            $sql="select *from plan_estudios ";
                       $res=mysql_query($sql,$con);
                            if(mysql_num_rows($res)==0){
                               echo '<b>No hay registros</b>';
                               }else{
                               while($row=mysql_fetch_array($res)){
                           echo'<OPTION VALUE="'.$row['PLAN_ID'].'"';if($planid==$row['PLAN_ID']) print 'selected=true';echo'>'.$row['PLAN_NOMBRE'].' </OPTION>';
                           }
                    }echo'
                       </select></div>
                </div>
				
                <div class="wrapper-file-input col-xs-6 col-md-8">
                     <center><div><label class="etiquetita">Opciones</label></div></center>
                     <center>
                     <input type=submit name="button" id="submit"  value="Guardar">   <input type="reset">
                     </center> 
                 </div>
                
               </form>

            </div>

 

        </div>
    </div>
</div>


       ';
		

		}else
		if ($actualizar=="Grupos" and $ides<>""){//////////////formulario para actualizar Documentos
	    

		$con=conexion();
		$sql="select * from asig_grupos where GRUPO_ID=".$ides;
		$res=mysql_query($sql,$con);
		if(mysql_num_rows($res)==0){
			    
				echo '<b>No hay registros</b>';
				}
		else{
			
				while ($row=mysql_fetch_array($res)){
						$grupoid=$row['GRUPO_ID'];
						$gruponombre=$row['GRUPO_NOMBRE'];
						$perid=$row['PER_ID'];
					
					}
					}
        
		echo' <script type="text/javascript" src="js/g0001.js"></script>

			<form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" onKeyPress="return disableEnterKey(event);">';
		echo '<div class="container">

	<div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#red" data-toggle="tab">Información del Grupo</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
				
               <form method="post" action="zeta_x0002.php" onsubmit="return validarForm(this);" accept-charset="UTF-8">
                <br>
                <div class="col-xs-6 col-md-4">
					<input type="hidden" name="grupoid" id="grupoid" value="'.$grupoid.'" readonly>
                    <div><label class="etiquetita">Nombre del Grupo</label></div>
                    <div><input type="text" name="gruponombre" class="cajita form-control" value="'.$gruponombre.'"></label></div>
                </div>
                <div class="col-xs-6 col-md-4">
                	<div><label class="etiquetita">Periodo Escolar</label></div>
                    <div><select name="periodogrupo" id="periodogrupo" class="cajita form-control">
                       <option>Seleccione...</option>';
                        $con=conexion();
                            $sql="select *from periodos ";
                       $res=mysql_query($sql,$con);
                            if(mysql_num_rows($res)==0){
                               echo '<b>No hay registros</b>';
                               }else{
                               while($row=mysql_fetch_array($res)){
                           echo'<OPTION VALUE="'.$row['PER_ID'].'"';if($perid==$row['PER_ID']) print 'selected=true';echo'>'.$row['PER_FECHA_INI'].' - '.$row['PER_FECHA_FIN'].'</OPTION>';
                           }
                    }echo'
                       </select></div>
                </div>
                
                
                
                <div class="wrapper-file-input col-xs-6 col-md-8">
                     <center><div><label class="etiquetita">Opciones</label></div></center>
                     <center>
                     <input type=submit name="button" id="submit"  value="Guardar">   <input type="reset">
                     </center> 
                 </div>
				</form>
            </div>

 

        </div>
    </div>
</div>


       ';
		

		}else
				
	 if ($actualizar=="" and $dies==""){ 

		echo'<br/><center><label class="submenu">ERROR ZETA_000X ACCESO RESTRINGIDO</label><br><img src="../img/error.fw.png"></center>';

	 }
?> 

            </div>
</form>
        </div>


</section>

</div>
</center>
<?php include('../footer.php');?>
