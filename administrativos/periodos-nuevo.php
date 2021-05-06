<?php include('validaacceso.php');?>
<div class="modal fade" id="Ciclos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Ciclo Escolar</label></center></h4>
      </div>
      <div class="modal-body">



        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#red" data-toggle="tab" class="btn btn-primary btn-lg">Ciclo Escolar</a></li>

        </ul>
        
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
           
            <br/> 
            <form method="post" action="zeta_x0001.php" onsubmit="return validarFormPeriodos(this);">
                  <div>
                    <div><label class="etiquetita">Plan de Estudios</label></div>
                    <div><select class="cajita form-control" name="periodoplan">
                      <option value="0">seleccione...</option>
                       <?php 
					 	  $con=conexion();
                          $sql="select*from plan_estudios order by plan_fecha desc";
                          $res=mysql_query($sql,$con);
                          if(mysql_num_rows($res)==0){
                             echo '<b>No hay registros</b>';
                               }else{
                             while($row=mysql_fetch_array($res)){
                        echo'<option value="'.$row['PLAN_ID'].'">'.$row['PLAN_FECHA'].' '.$row['PLAN_NOMBRE'].'</option>'; 
						}
						}?>    
                    </select></div>
                    <br/>
                  </div>
                  <div>
                    <div><label class="etiquetita">Fecha de Inicio</label></div>
                    <div><input name="periodoini"type="date" placeholder="yyyy-mm-dd" class="cajita form-control"></div>
                    <br/>
                  </div>
    
                 <div>
                    <div><label class="etiquetita">Fecha Fin</label></div>
                    <div><input name="periodofin" type="date" placeholder="yyyy-mm-dd" class="cajita form-control"></div>
                    <br>
                  </div>
                  <div>
                   		<br/><center><input type=submit name='button' id='submit'  value='Guardar'> <input type='reset'></center>
                  </div> 

			
                
               </form>
				
            </div>



        </div>

      </div>  
      
       <div class="modal-footer">
      			<center><label class="submenu">Puede Agregar Nuevo Ciclo Escolar</label></center>
                <div id="mensaje"></div>
      </div>
    
    </div>
  </div>
</div>

