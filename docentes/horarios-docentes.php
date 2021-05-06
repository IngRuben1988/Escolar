<?php include('validaacceso.php'); include('header.php');?>

<div class="container">

	<div class="col-xs-6 col-md-6">
    <BR>
    	<div><center><label class="etiquetita">Ciclo Escolar</label></center></div>
        <div><center>
        <label class="etiquetita"><select name="plan" id="plans" class="cajita form-control">
        		<option>Seleccione...</option>
                <?php 
				$con=conexion();
				$sql="select*from periodos";
				$res=mysql_query($sql,$con);
					if(mysql_num_rows($res)==0){
					   echo '<b>No hay registros</b>';
					   }else{
					   while($row=mysql_fetch_array($res)){
				   echo'<option value="'.$row['PER_ID'].'">'.$row['PER_FECHA_INI'].'  '.$row['PER_FECHA_FIN'].'</option>';
                           }
                    }
				?>
        </select></label>
        </center></div>
    </div>
    
    <div class="col-xs-6 col-md-6">
    <BR>
    	<div><center><label class="etiquetita">Docentes</label></center></div>
        <div class="col-xs-9 col-md-9"><center>
        <label class="etiquetita"><select name="doc" id="docs" class="cajita form-control">
        		<option>Seleccione...</option>
		<?php 
		$con=conexion();
		$sql="select*from doc_personas where doc_crup='".$CURP."'";
		$res=mysql_query($sql,$con);
					if(mysql_num_rows($res)==0){
					   echo '<b>No hay registros</b>';
					   }else{
					   while($row=mysql_fetch_array($res)){
				   echo'<option value="'.$row['DOC_CURP'].'">'.$row['DOC_NOMBRE'].'  '.$row['DOC_PATERNO'].' '.$row['DOC_MATERNO'].'</option>';
                           }
                    }		
		?>
        </select></label>
        </center></div>
        <div class="col-xs-3 col-md-3"><center><label class="etiquetita">
        <input type="button"  id="busqueda" class="button" value="Buscar" onClick="return BuscarDocenteHorarios(this);"></button></label></center></div>
    </div>
    <div class="col-xs-12 col-md-12" id="horarios"></div>
</div>

<?php include('footer.php');?>