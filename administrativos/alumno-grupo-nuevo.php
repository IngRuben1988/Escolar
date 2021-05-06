<?php include('validaacceso.php');?>
<div class="modal fade" id="Grupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Grupo Nuevo</label></center></h4>
      </div>
      <div class="modal-body">


<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">         
            <li class="active"><a href="#orange" data-toggle="tab" class="btn btn-primary btn-lg">Grupo</a></li> 
        </ul>
        
        <div id="my-tab-content" class="tab-content">
            
            <div class="tab-pane active" id="orange">
            <br>
    <form name="gruponuevo" method="post" action="zeta_x0001.php" onKeyPress="return disableEnterKey(event);" onSubmit="return ValidarGrupo(this);" >
	
         <div>
                  <div><label class="etiquetita">  Plan de Estudios</label></div>

                  <div class="col-xs-12 col-md-6"><select id="plan" name="plang" class="cajita form-control" onClick="return BuscarCiclos(this);">
                  		<option>Seleccione...</option>
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

           </div>
                  

           <div>
					<br>
                  <div id="ResultadoCiclos"></div>
                  <div><br></div>
                  <div id="ResultadoGrupos2"></div>
         </div>
         </div>
       

       </form>
       </div>
  

</div>      
       <div class="modal-footer">
      			<center><label class="submenu">Puede Agregar Nuevos Alumnos</label></center>
                <div id="mensaje"></div>
      </div>
    
    </div>
  </div>
</div>