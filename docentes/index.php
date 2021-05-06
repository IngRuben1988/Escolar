<?php 
include('validaacceso.php');
include('header.php');
?>

<p>&nbsp;</p> 
<div class="container" id="centrar">
<br/>
      <center>
      <!---docentes-->
        <div class="col-md-1"></div>
        <div class="col-xs-4 col-md-3">

          <a href="horarios.php"><img src="../img/horarios.fw.png" alt="" width="50%" height="50%" usemap="#Map" class="imgmenu"/></a>

        </div>
        
        <div class="col-xs-4 col-md-3">

           <a href="asistencia.php"><img src="../img/asistencia.fw.png" alt="" width="50%" height="50%" usemap="#Map" class="imgmenu"/></a>
      		
        </div>
        
         <div class="col-xs-4 col-md-3">
           
           <a href="calificacion-asistencia.php"><img  src="../img/calificaciones.fw.png"  alt="" width="50%" height="50%" usemap="#Map" class="imgmenu"/></a>
      		
         </div>
       <div class="col-md-2"></div>
        

        </center>
</div>


<?php
include('footer.php');
?>