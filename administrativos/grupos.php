<?php include('validaacceso.php');?>
<div class="modal fade" id="Grupos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Grupos</label></center></h4>
      </div>
      <div class="modal-body">


	<div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#nuevogrupo" data-toggle="tab">Información del Grupo</a></li>
            <li><a href="#colecciongrupos" data-toggle="tab"><label>Coleccion de Grupos</label></a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="nuevogrupo">
				<center><br/>
               <form method="post" action="zeta_x0001.php" onsubmit="return validarFormGrupos(this);" accept-charset="UTF-8">
                <br>
                <div class="col-xs-12 col-md-12">
                    <div><label class="etiquetita">Nombre del Grupo</label></div>
                    <div><input type="text" name="gruponombre" class="cajita form-control" placeholder="Ejemplo: A ó B"></label></div>
                </div>
                <br/>
                <div class="col-xs-12 col-md-12">
                	<div><label class="etiquetita">Periodo Escolar</label></div>
                    <div><select name="periodogrupo" class="cajita form-control">
                       <option>Seleccione...</option>
                       <?php $con=conexion();
                            $sql="select *from periodos ";
                       $res=mysql_query($sql,$con);
                            if(mysql_num_rows($res)==0){
                               echo '<b>No hay registros</b>';
                               }else{
                               while($row=mysql_fetch_array($res)){
                           echo'<OPTION VALUE="'.$row['PER_ID'].'">'.$row['PER_FECHA_INI'].' - '.$row['PER_FECHA_FIN'].'</OPTION>';
                           }
                    }?>
                       </select></div>
                </div>
                
                
                
                <div>
                <p>&nbsp;</p>   
                     <center><input type=submit name='button' id='submit'  value='Guardar'> <input type='reset'></center>
                    <br/>
                 
                </div>
            
				</form></center>
            </div>
            <div class="tab-pane" id="colecciongrupos">
				
				<?php include('c-grupos.php')?>

            </div>


        </div>
    </div>
   
		
	</div>  
      
       <div class="modal-footer">
       			<center><label class="submenu">Puede Agregar Nuevos Grupos o Editar Los Grupos Ya Existentes</label></center>
      			
      </div>
    
    </div>
  </div>
</div>



