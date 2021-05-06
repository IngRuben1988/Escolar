<?php include('validaacceso.php');?>
<?php include('header.php')?>
<div class="container">
<?php   



echo '
	<div id="content">
		
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">';
		
		 $con=conexion();
		  $sql="select*from Materias";
			
		  $res=mysql_query($sql,$con);
		  if(mysql_num_rows($res)==0){
			 echo '<b>No hay registros</b>';
			   }else{
			 while($row=mysql_fetch_array($res)){
		echo "<tr>";
		echo "<td><center><label class='etiquetita'>".$row['ALUM_CURP']."</label></center></td>";
		echo "<td><center><label class='etiquetita'>".$row['ALUM_MATRICULA']."</label></center></td>";
		echo "<td><center><label class='etiquetita'>".$row['ALUM_NOMBRE']."</label></center></td>";
		echo "<td><center><label class='etiquetita'>".$row['ALUM_PATERNO']."</label></center></td>";
		echo "<td><center><label class='etiquetita'>".$row['ALUM_MATERNO']."</label></center></td>";
				
		echo'
		
            <li class="active"><a href="#red" data-toggle="tab">Lista de Grupos</a></li>
            <li><a href="#orange" data-toggle="tab">Orange</a></li>
            <li><a href="#yellow" data-toggle="tab">Yellow</a></li>
            <li><a href="#green" data-toggle="tab">Green</a></li>
            <li><a href="#blue" data-toggle="tab">Blue</a></li>
			
        ','</ul>
		
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
				
                <div class="col-xs-6 col-md-4">
                	<div><label class="etiquetita">Materias</label></div>
                    <div><select class="cajita" name="materias">
                    
                    </select></div>
                </div>

                <div class="col-xs-6 col-md-4">
                	<div><label class="etiquetita">Semestre</label></div>
                    <div><select class="cajita" name="semestres">
                    
                    </select></div>
                </div>
                
                <div class="col-xs-6 col-md-4">
                	<div><label class="etiquetita">Periodo</label></div>
                    <div><select class="cajita" name="periodos">
                    
                    </select></div>
                </div>
                
                <div class="col-xs-6 col-md-4">
                	<div><label class="etiquetita">Grupo</label></div>
                    <div><select class="cajita" name="grupos">
                    
                    </select></div>
                </div>                               

            </div>
            <div class="tab-pane" id="orange">


            </div>
            <div class="tab-pane" id="yellow">


            </div>
            <div class="tab-pane" id="green">


            </div>
            <div class="tab-pane" id="blue">


            </div>
        </div>
    </div>';}}?>


</div>

<?php include('footer.php')?>