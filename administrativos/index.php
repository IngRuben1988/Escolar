<?php include('validaacceso.php');
include('header.php');
?>


<center>
<div class="col-xs-12 col-md-12 menu">
	<br>
    
 
        <div class="col-xs-2 col-md-2"><a href="" data-toggle="modal" data-target="#Lista"><img src="../img/asistencia.fw.png" width="50%" height="50%"/></a></div>
        <div class="col-xs-2 col-md-2"><a href="horarios-docentes.php"><img src="../img/verhorarios.fw.png" width="50%" height="50%"/></a></div>
        <!--<div class="col-xs-2 col-md-1"><img src="../img/horarios-grupos.png" width="80%" height="80%"/></div>-->
        <!--<div class="col-xs-2 col-md-1"><img src="../img/servicios.fw.png" width="100%" height="100%"/></div>-->
        <div class="col-xs-2 col-md-2"><a href="servicios.php"><img src="../img/servicios.fw.png" width="50%" height="50%"/></a></div>
        <div class="col-xs-2 col-md-2"><a href="" data-toggle="modal" data-target="#Apertura"><img src="../img/aperturas.fw.png" width="50%" height="80%"></a></div>
        <div class="col-xs-2 col-md-2"><a href="calificacion.php"><img src="../img/calificaciones.fw.png"  width="50%" height="50%"/></a></div>
        <div class="col-xs-2 col-md-2"><a href="registros.php"><img src="../img/bitacora.fw.png"  width="50%" height="50%"/></a></div>
  
    <div class="col-xs-12 col-md-12"><br></div>

</div>
 

</center>  
<div class="container" id="centrar">
<br/>
      <center>
        <div class="col-xs-4 col-md-3" ><br>

          <a href="plan-estudios.php"><img src="../img/planes_estudios.fw.png" alt="" width="50%" height="50%"/></a>

        </div>
        
        <div class="col-xs-4 col-md-3"><br>

           <a href="periodos.php"><img src="../img/ciclos_escolares.fw.png" alt="" width="50%" height="50%"/></a>
      		
        </div>
        
         <div class="col-xs-4 col-md-3"><br>
           
           <a href="alumno-grupo.php"><img src="../img/grupos.fw.png" alt="" width="50%" height="50%"/></a>
           
         </div>
 
      	 <div class="col-xs-4 col-md-3"><br>
         
           <a href="horarios.php"><img src="../img/horarios.fw.png"  alt="" width="50%" height="50%"/></a>

        </div>
                
       <div class="col-xs-4 col-md-3"><br>

           <a href="alumno.php"><img src="../img/alumno.fw.png" alt="" width="50%" height="50%"/></a>
      		
        </div>
        
       <div class="col-xs-4 col-md-3"><br>

           <a href="docente.php"><img src="../img/maestros.fw.png" alt="" width="50%" height="50%"/></a>
      		
        </div>
        

        
        <div class="col-xs-4 col-md-3"><br>
           
           <a href="administrativo.php"><img src="../img/administrativos.fw.png" alt="" width="50%" height="50%"/></a>
      		
        </div>

        <div class="col-xs-4 col-md-3"><br>

           <a href="" data-toggle="modal" data-target="#USR"><img src="../img/usuarios.fw.png" alt="" width="50%" height="50%"/></a>
      		
        </div>
        </center>
</div>

<?php include('c-asistencia.php')?>
<?php include('puertos.php')?> 
<?php include('wp-usr.php')?>



<?php
include('footer.php');
?>