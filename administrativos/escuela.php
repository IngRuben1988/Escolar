<?php include('validaacceso.php');?>
<?php include('header.php');?>
<!--**************formulario de Materias**************************
***************************************************************-->


<hr>
<form method="POST" action="zeta_x0001.php" onsubmit="return validarForm(this);">
<center>
<div class="container">
  <div class="container-fluid col-xs-6 col-md-4">
    
    <div>Nombre</div>
    <div><input type="text" name="escnombre" id="textfield"></div>
    
  </div>
  <div class="container-fluid col-xs-6 col-md-4">
  
    <div>Dirección</div>
    <div><input type="text" name="escdireccion" id="escdireccion"></div>
    
  </div>
  <div class="container-fluid col-xs-6 col-md-4">
  
    <div>Ciudad</div>
    <div><input type="text" name="escciudad" id="escciudad"></div>
    
  </div>
  <div class="container-fluid col-xs-6 col-md-4">
  
    <div>Estado</div>
    <div><input type="text" name="escestado" id="escestado"></div>
    
  </div>
  <div class="container-fluid col-xs-6 col-md-4">
  
    <div>Lema</div>
    <div><input type="text" name="esclema" id="esclema"></div>
    
  </div>
  <div class="container-fluid col-xs-6 col-md-4">
  
    <div>Objetivo</div>
    <div><input type="text" name="escobjetivo" id="escobjetivo"></div>
    
  </div>
  <div class="container-fluid col-xs-6 col-md-4">
  
    <div>Misión</div>
    <div><input type="text" name="escmision" id="escmision"></div>
    
  </div>
  <div class="container-fluid col-xs-6 col-md-4">
  
    <div>Visión</div>
    <div><input type="text" name="escvision" id="escvision"></div>
    
  </div>
  <hr>
  <div class="container col-xs-12 col-md-12">
   <hr>
    <div>Logo de la Institucional</div>
    <div><input type="file" name="esclogo" id="esclogo"></div>

    <div>Escudo Estatal</div>
    <div><input type="file" name="escescudo" id="escescudo"></div>

    <div>Logo Estatal</div>
    <div><input type="file" name="escstatal" id="escstatal"></div>
    
  </div>

  
</div>
</center>
<hr>
<div class='conatainer'><div class='conatainer-fluid'>
 <section class='col-md-12'>
   <article class='col-xs-12 col-md-12'>
     <center><input type=submit name='button' id='submit'  value='Guardar'><input type='reset'>
     </center>
   </article> 
 </section>
 </div>
 </div>
</form>

<?php include('../footer.php');?>