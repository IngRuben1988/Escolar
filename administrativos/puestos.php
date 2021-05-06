<?php include('validaacceso.php');?>
<? include('../header.php')?>
<div class="container">


<form method="post" action="zeta_x0001.php" onsubmit="return validarForm(this);" accept-charset="UTF-8">
<div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#red" data-toggle="tab">Información de los Puestos</a></li>
            <li><a href="#orange" data-toggle="tab">Coleccion de Puestos</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">

                  <div class="col-xs-6 col-md-4">
                    <div><label class="etiquetita">Nombre del Puesto</label></div>
                    <div><input type="text" name="nompuesto" id="textfield" class="cajita"></div>
                  </div>
                  
                  <div class="col-xs-6 col-md-4">
                    <div><label class="etiquetita">Abeviatura</label></div>
                    <div><input type="text" name="abpuesto" id="textfield2" class="cajita"></div>
                  </div>

                     <div class="conatainer">
                     <section class="col-md-12">
                     <br/>
                       <article class="col-xs-12 col-md-12">
                         <center><input type=submit name="button" id="submit"value="Guardar"> <input type="reset">
                         </center>
                       </article> 
                     </section></div>
</form>
            </div>
            <div class="tab-pane" id="orange">
            
            <? include('c-puestos.php')?>


            </div>



        </div>
    </div>
  

  
</div>
<? include('../footer.php')?>