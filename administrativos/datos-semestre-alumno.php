<?php include('validaacceso.php');?>
<?php include('header.php')?>



<div class="container">


<div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a class="btn btn-primary btn-lg" href="#red" data-toggle="tab">Matricula del Alumno</a></li>
            <li><a class="btn btn-primary btn-lg" href="#orange" data-toggle="tab">Informacion del Semestre En Curso</a></li>
            <li><a class="btn btn-primary btn-lg" href="#yellow" data-toggle="tab">Coleccion de Datos</a></li>
            <li><a class="btn btn-primary btn-lg" href="#green" data-toggle="tab">Adicional</a></li>

        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
			
            	<form method="post" action="zeta_x0001.php"  onKeyUp="return validarFormAlumnoDOS(this);"  onKeyPress="return disableEnterKey(event);" onSubmit="return validarForm(this)">
                <div class="col-xs-12 col-md-12">
                  <br>

                    <center><div><label class="etiquetita">Alumno</label></div></center>
                    <center><div><input type="text" name="alumcurp" id="busquedaalum" class="cajita" value="<?php ?>"></div></center>
                    
                    
                    <div id="resultadoalum" class="container">
                        <br>
                    </div>
                    
                </div>

            </div>
            <div class="tab-pane" id="orange">

					<div class="col-xs-6 col-md-4">
                    <br>
                            <div><label class="etiquetita">Plan de Estudio</label></div>
                            <div><select name="planid" id="plan" class="cajita">
                                           <option>Seleccione...</option>
                                           <?php $con=conexion();
                                                $sql="select *from plan_estudios ";
                                           $res=mysql_query($sql,$con);
                                                if(mysql_num_rows($res)==0){
                                                   echo '<b>No hay registros</b>';
                                                   }else{
                                                   while($row=mysql_fetch_array($res)){
                                               echo'<OPTION VALUE="'.$row['PLAN_ID'].'">'.$row['PLAN_NOMBRE'].'</OPTION>';
                                               }
                                        }?>
                                           </select></div>
                        </div>
                        
                     <div class="col-xs-6 col-md-4">
                     <br>
                            <div><label class="etiquetita">Semestre</label></div>
                            <div><select name="semid" id="semestre" class="cajita">
                                           <option>Seleccione...</option>
                                           <?php $con=conexion();
                                                $sql="select *from semestres order by sem_grado_numero";
                                           $res=mysql_query($sql,$con);
                                                if(mysql_num_rows($res)==0){
                                                   echo '<b>No hay registros</b>';
                                                   }else{
                                                   while($row=mysql_fetch_array($res)){
                                               echo'<OPTION VALUE="'.$row['SEM_ID'].'">'.$row['SEM_GRADO_LETRA'].'</OPTION>';
                                               }
                                        }?>
                                           </select></div>
                        </div>
                                                
                        <div class="col-xs-6 col-md-4">
                        <br>
                            <div><label class="etiquetita">Grupo</label></div>
                            <div><select name="grupoid" id="grupo" class="cajita">
                                           <option>Seleccione...</option>
                                           <?php $con=conexion();
                                                $sql="select *from asig_grupos order by GRUPO_NOMBRE ";
                                           $res=mysql_query($sql,$con);
                                                if(mysql_num_rows($res)==0){
                                                   echo '<b>No hay registros</b>';
                                                   }else{
                                                   while($row=mysql_fetch_array($res)){
                                               echo'<OPTION VALUE="'.$row['GRUPO_ID'].'">'.$row['GRUPO_NOMBRE'].'</OPTION>';
                                               }
                                        }?>
                                           </select></div>
                        </div>
                        
                        
                        
                        <div class='wrapper-file-input col-xs-12 col-md-12'>
                        <br>
                             <center><div><label class='etiquetita'>Opciones</label></div></center>
                             <center><input type=submit name='button' id='submit'  value='Guardar'>   <input type='reset'></center> 
                        </div>
                   </form>
                   
                   
            </div>
            <div class="tab-pane" id="yellow">
            
            <form method="post"  onKeyUp="return validarFormAlumnoTRES(this);"  onKeyPress="return disableEnterKey(event);">
                   <div class="col-xs-6 col-md-4"> 
                    <center><div><label class="etiquetita">Alumno</label></div></center>
                    <center><div><input type="text" name="alumcurp" id="busquedaalumno" class="cajita"></div></center>
                    
                    
                    <div id="resultadoalumno" class="container">
                       <br>
                    </div>
				  </div>
                </form>  
            </div>
            <div class="tab-pane" id="green">



            </div>

        </div>
    </div>



    
   
    
</div>

<?php include('../footer.php')?>