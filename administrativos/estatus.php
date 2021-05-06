<?php include('validaacceso.php');?>
<?php include('header.php');?>


<form method="POST" action="zeta_x0001.php" onsubmit="return validarForm(this);">
<div class="container">
<br/>
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a class="btn btn-primary btn-lg" href="#red" data-toggle="tab">Información de Estatus</a></li>
            <li><a class="btn btn-primary btn-lg" href="#orange" data-toggle="tab">Colección de Estatus</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
  <br>
                    <center>
                    <div class="col-xs-6 col-md-4"><label class="etiquetita">Estatus</label></div>
                    <div class="col-xs-6 col-md-3"><input type="text" name="estestatus" id="textfield" class="cajita"></div>
                    </center>
                    
                 <div class='conatainer'>
                     <section class='col-md-12'>
                     <br/>
                       <article class='col-xs-12 col-md-12'>
                         <center><input type=submit name='button' id='submit'  value='Guardar'><input type='reset'>
                         </center>
                       </article> 
                     </section>
</form>
            	</div>

           
        </div>
            <div class="tab-pane" id="orange">
       			<?php include ('c-estatus.php');?>
       
            </div>
    </div>
</div>




<div class="container">
  <div class="main">
  
    
    
  </div>
</div>

<?php include('../footer.php');?>