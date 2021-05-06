<?php include('validaacceso.php');?>
<?php  include('header.php')?>

<div class="container">
    <div id="content">
  <br/>      
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            
             <li  class="active"><a class="btn btn-primary btn-lg" href="#docente" data-toggle="tab">Ver Horarios de Salones</a></li>
        </ul>
        
        <div id="my-tab-content" class="tab-content">

			
            <div class="tab-pane active" id="docente">
            
                  <div class="col-xs-6 col-md-6"><br>
                  <div><center><label class="etiquetita">Ciclo Escolar</label></center></div>
                  <div><select class="cajita form-control" name="hor" id="hor" onchange="return SalonesCHorario(this);">
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
                    <div class="col-xs-6 col-md-6" id="horariosalon"></div><BR>
					<div class="col-xs-12 col-md-12" id="horario"></div>
                    </div>

            </div>

			
      </div>
 </div>



       

<?php  include('../footer.php')?>