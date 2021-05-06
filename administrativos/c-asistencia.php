<?php include('validaacceso.php');?>
<div class="modal fade" id="Lista" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Lista de Asistencia</label></center></h4>
      </div>
      <div class="modal-body">
      
<form method="post" action="reporte/lista-de-asistencia.php" accept-charset="UTF-8"   onKeyPress="return disableEnterKey(event);">     
<div class="col-xs-12 col-md-12">

                <div class="col-xs-6 col-md-4">
                <br>
         
                  <div><label class="etiquetita">Ciclos Escolares</label></div>
                  <div><select name="cdperiodo" id="cdperiodo" class="cajita form-control"  onChange="return BuscarGruposlista(this);">
                  	   <option>Seleccione...</option>
                    <?php       
					  $con=conexion();
					  $sql=" select p.PER_ID,concat(p.PER_FECHA_INI,' ',p.PER_FECHA_FIN) as PERIODO,
							 pe.PLAN_ID,pe.PLAN_NOMBRE,pe.PLAN_FECHA 
							 from periodos as p,plan_estudios as pe
							 where
							 p.PLAN_ID=pe.PLAN_ID 
							 and now()>=p.PER_FECHA_INI 
							 and now()<=p.PER_FECHA_FIN";
					  $res=mysql_query($sql,$con);
					  if(mysql_num_rows($res)==0){
						 echo '<b>No hay registros</b>';
						   }else{
						 while($row=mysql_fetch_array($res)){

					echo "<option value=".$row['PER_ID'].">".$row['PERIODO']."</option>";
				
				  }
				}
				?>
                  </select></div>
                </div>

                 <div class="col-xs-6 col-md-4">
                 	<br>
                      <div><label class="etiquetita">Grupos</label></div>
                      <div id="ResultGrupos"></div>
                  	<br>
                </div>
                <div class="col-md-2"></div>

				<div class="col-xs-12 col-md-12" id="ListaGrupos">
               
                </div>
               <p>&nbsp;<p>

</div>
</form>
</div>

       <div class="modal-footer">
      			<center><label class="submenu">Imprima Lista de Asistencia</label></center>
                
      </div>
    
    </div>
  </div>
</div>

