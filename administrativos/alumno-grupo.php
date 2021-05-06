<?php include('validaacceso.php');?>
<?php include('header.php')?>


<form name="water">
<div class="container">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">         
            <li class="active"><a href="#orange" data-toggle="tab" class="btn btn-primary btn-lg">Alumnos y Grupos</a></li> 
        </ul>
        
        <div id="my-tab-content" class="tab-content">
            
            <div class="tab-pane active" id="orange">
            <br>
            
             <div class="col-xs-12 col-md-12 menu">
				
            	<div align="center" class="col-xs-9 col-md-9">
                	<label class="etiquetita3">Grupos</label>
                </div>
                <div align="center" class="col-xs-3 col-md-3">
                	<a class="btn"data-toggle="modal" data-target="#Grupo">
                    	<img src="../img/nuevo.png" width="85px" height="50px">
                    </a>
                </div>
				
            </div>
            <p>&nbsp;<p>
           
				<div class="col-xs-12 col-md-12 table-bordered cajita" style="background-color:#FFFF99;">
                
                	<center>
                    <div><h4 style=" font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:#AD3436">Nota:</h4></div>
                    <div><p class="etiquetita">La Información que se Expresa en esta Sección es para Crear un Concentrado de Relaciones entre Alumnos y sus Respectivos Salones</p></div>
                    </center>
                </div>
                
                
           		<div class="col-md-2"></div>
                <div class="col-xs-6 col-md-4">
                <br>
         
                  <div><label class="etiquetita">Ciclos Escolares</label></div>
                  <div><select name="cdperiodo" id="cdperiodo" class="cajita form-control"  onChange="return BuscarGruposVacios(this);">
                  	   <option>Seleccione...</option>
                    <?php       
					  $con=conexion();
					  $sql=" select p.PER_ID,concat(p.PER_FECHA_INI,' ',p.PER_FECHA_FIN) as PERIODO,
							 pe.PLAN_ID,pe.PLAN_NOMBRE,pe.PLAN_FECHA 
							 from periodos as p,plan_estudios as pe
							 where
							 p.PLAN_ID=pe.PLAN_ID";
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
                  <div id="ResultadoGrupos"></div>
                  <br>
                </div>
                <div class="col-md-2"></div>
                
                
				<div class="col-xs-12 col-md-12" id="misgrupos">
               
                </div>
               
            <p>&nbsp;<p>
            

           

        </div>
    </div>
</div>
</form>
<?php include('alumno-grupo-nuevo.php')?>

<?php include('../footer.php')?>