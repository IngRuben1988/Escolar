<?php include('validaacceso.php');?>
<?php include('header.php')?>


<div class="container">
<br/>
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a class="btn btn-primary btn-lg" href="#red" data-toggle="tab">Información de Documentos</a></li>
            <li><a class="btn btn-primary btn-lg" href="#orange" data-toggle="tab">Colección de Documentos</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
               
               <br>
               <form method='POST' action='zeta_x0001.php' onSubmit="return validarForm(this);" accept-charset='UTF-8'>
               <div class="col-xs-6 col-md-4">
                   <div><label class="etiquetita">Documento</label></div>
                   <div><input class="cajita" name="nomdocumento" id="documento"></div>
               </div>
               
                <div class="wrapper-file-input col-xs-6 col-md-8">
                     <center><div><label class="etiquetita">Opciones</label></div></center>
                     <center>
                     <input type=submit name="button" id="submit"  value="Guardar">   <input type="reset">
                     </center> 
                 </div>
                </form> 
            </div>
            <div class="tab-pane" id="orange">
                <?php include('c-documento.php')?>
                
            </div>

        </div>
    </div>
</div>



<?php include('../footer.php')?>