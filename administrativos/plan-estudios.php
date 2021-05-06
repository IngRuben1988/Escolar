<?php include('validaacceso.php');?>
<?php include('header.php');?>


<br>

<div class="container">
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">         
            <li class="active"><a href="#orange" data-toggle="tab" class="btn btn-primary btn-lg">Planes de Estudio</a></li> 
            <li> <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Semestres">Semestres</a></li>
            <li> <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Materias">Materias</a></li>
            
        </ul>
        
        <div id="my-tab-content" class="tab-content">
            <br/>
            
            <div class="col-xs-12 col-md-12 menu">
				
            	<div align="center" class="col-xs-9 col-md-9">
                	<label class="etiquetita3">Planes de Estudio</label>
                </div>
                <div align="center" class="col-xs-3 col-md-3">
                	<a class="btn"data-toggle="modal" data-target="#Planes">
                    	<img src="../img/nuevo.png" width="85px" height="50px">
                    </a>
                </div>
				
            </div>
            <p>&nbsp;<p>
            
            <div class="tab-pane active" id="orange">
             	<?php include('c-plan-estudios.php') ?>
            </div>
           

        </div>
    </div>
</div>
<?php include('plan-estudios-nuevo.php')?>
<?php include('plan-estudios-completo.php')?>
<?php include('materias.php')?>
<?php include('semestres.php')?> 

  




<?php include('../footer.php');?>