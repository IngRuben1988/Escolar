<?php include('validaacceso.php');?>
<?php include('header.php')?>


<br/>

<div class="container">
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#orange" data-toggle="tab" class="btn btn-primary btn-lg">Ciclos Escolares</a></li>
			<li> <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Grupos">Grupos</a></li>
        </ul>
        
        <div id="my-tab-content" class="tab-content">

            <div class="tab-pane active" id="orange">
            
                        <br/>
            
            <div class="col-xs-12 col-md-12 menu">
				
            	<div align="center" class="col-xs-9 col-md-9">
                	<label class="etiquetita3">Ciclos Escolares</label>
                </div>
                <div align="center" class="col-xs-3 col-md-3">
                	<a class="btn"data-toggle="modal" data-target="#Ciclos">
                    	<img src="../img/nuevo.png" width="85px" height="50px">
                    </a>
                </div>
				
            </div>
            <p>&nbsp;<p>
                <?php include('c-periodos.php')?>
            </div>


        </div>
    </div>
</div>
<?php include('periodos-nuevo.php')?>
<?php include('grupos.php')?>

<?php include('../footer.php')?>