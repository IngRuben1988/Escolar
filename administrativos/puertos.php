<?php include('validaacceso.php');?>
<div class="modal fade" id="Apertura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ventana">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
        <h4 class="modal-title" id="myModalLabel"><center><label class="titulo">Apertura de Calificaciones Bimestrales</label></center></h4>
      </div>
      <div class="modal-body">

<form name="puertos" action="" onsubmit="guardarPuerto(); return false;" onKeyPress="return disableEnterKey(event);">
	<div align="center">
		<div><label class="etiquetita">Captura de Calificaciones de:</label></div>
        <div><select name="parcial" class="cajita form-control">
        		<option value="0"><label class="etiquetita">Selccione...</label></option>
                <option value="Unidad 1">Unidad 1</option>
                <option value="Unidad 2">Unidad 2</option>
                <option value="Unidad 3">Unidad 3</option>
                <option value="Unidad 4">Unidad 4</option>
                <option value="Examen Final">Examen Final</option>
                <option value="Extraordinario 1">Extraordinario 1</option>
                <option value="Extraordinario 1">Extraordinario 2</option>
                <option value="Extraordinario 1">Extraordinario 3</option>
        	 </select>
         </div>
         <br>
    </div>

    <div align="center">
    	<div><label class="etiquetita">Fecha de Apertura de Captura de Calificaciones</label></div>
        <div><input type="date" name="apertura" placeholder="dd/mm/yyyy" class="cajita form-control"></div>
        <br>
    </div>

    <div align="center">
    	<div><label class="etiquetita">Fecha de Clausura de Captura de Calificaciones</label></div>
        <div><input type="date" name="clausura" placeholder="dd/mm/yyyy" class="cajita form-control"></div>
        <br>
    </div>
     
     <div>
      		<center><input type="submit" name='button' id='submit'  value='Guardar'></center>
     </div> 
</form>
 </div>  
      
       <div class="modal-footer">
      			<center><label class="submenu">Puede dar Apertura a Asignar Calificaciones al Alumnado</label></center>
               <div id="mensaje"></div>
      </div>
    
    </div>
  </div>
</div>
