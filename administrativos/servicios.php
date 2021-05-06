<?PHP include('validaacceso.php');?>
<?php include('header.php')?>


<?php 

$con=conexion();
$sql="";

?>
<div class="container">
<br>
		<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        	<li class="active"><a class="btn btn-primary btn-lg" href="#blue" data-toggle="tab">Servicios En Espera</a></li>
            <li><a class="btn btn-primary btn-lg" href="#red" data-toggle="tab">Solicitud Servicios</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            
            <div class="tab-pane active" id="blue">
			<br>
            <div class="col-xs-12 col-md-12">	
            <table width="100%" border="1" class="footable">
            <thead>
              <tr>
                <td>
                    <center><label id="titulo_tabla">ESCUELA "ROSARIO GUTIERREZ ESKILDSEN LICENCIATURA EN EDUCACIÓN PREESCOLAR"</label></center>
                </td> 
              </tr>
             </thead>
            </table>
            <br>
            </div>
            <div class="col-xs-9 col-md-9">
            <table width="100%" border="0" class="footable">
              <thead>
              <tr>
                <td class=""><center><label id="titulo_tabla">Nombre del Administrativo</label></center></td>
                
              </tr>
              <tr>
                <td class="menu">
                    <center><label id="titulo_tabla"><?php echo $Nombre?></label></center>
                </td> 
              </tr>
              </thead>
            </table>  
            </div>
            <div class="col-xs-3 col-md-3">
            <table width="100%" border="0" class="footable">
            <thead>
              <tr>
                <td class=""><center><label id="titulo_tabla">Matricula</label></center></td>
                
              </tr>
              <tr>
                <td class="menu">
                    <center><label id="titulo_tabla"><?php echo $Matricula?></label></center>
                </td> 
              </tr>
             </thead>
            </table>
            <br> 
            </div>
            
            
             
            
            <form method="post" action="zeta_x0001.php" accept-charset="UTF-8"   onKeyPress="return disableEnterKey(event);">
            
            <table width="100%" border="0"  class="footable scrolling">
                <thead>
                <tr height="30px" id="fondo_tabla">
                    <td width="15%"><center><label id="titulo_tabla">Matricula Alumno</label></center></td>
                    <td width="30%"><center><label id="titulo_tabla">Nombre Alumno</label></center></td>
                    <td width="30%"><center><label id="titulo_tabla">Nombre del Servicio</label></center></td>
                    <td width="20%"><center><label id="titulo_tabla">Fecha de Solicitud</label></center></td>
                    <td width="15%"><center><label id="titulo_tabla">Atender Solicitud</label></center></td>
                </tr>
                </thead>
            <?php
                  $con=conexion();
                  $sql="select * from consulta_servicios where serv_solicitado=1";
                  $res=mysql_query($sql,$con);
                  if(mysql_num_rows($res)==0){
                    
                       }else{
                     while($row=mysql_fetch_array($res)){
                echo "<tr>";
            
                echo "<td><center><label class='etiquetita'>".$row['matricula']."</label></center></td>";
				echo "<td><center><label class='etiquetita'>".$row['nombre']."</label></center></td>";
                echo "<td><label class='etiquetita'>".$row['SERV_NOMBRE']."</label></center></td>";
                echo "<td><center><label class='etiquetita'>".$row['SERV_FECHA']."</label></center></td>";
               
               echo '<td><center><a href="buscar-servicio.php?alumno='.$row['matricula'].'&servicio='.$row['SERV_NOMBRE'].'" target="buscar-servicio" onclick="window.open(this.href, this.target, width=1200, height=760, menubar=no,directories=no,location=0,resizable=no );return= false;"><img src="../img/2000px-Blue_circle_for_diabetes.svg_.png" width="20%" height="20%"></a></center></td>';
                echo "</tr>";
            
              }
            }
            ?>    
             <input type="hidden" name="muestra" id="muestra" value="alumno" readonly>  
            </table>
            
            </form>           
                        
            
            
            
            </div>
            <div class="tab-pane" id="red">
            <br>
             <form name="alumno" action="" accept-charset="UTF-8"   onKeyPress="return disableEnterKey(event);">
                      
                  <div class="container">
                  	<div class="col-xs-6 col-md-6">
                        <div><label class="etiquetita">Curp/Matricula del Alumno</label></div>
                        <div><input type="text" name="matricula" id="matricula" class="cajita form-control" maxlength="20"  placeholder="Ejemplo: 132700220000"/></div>  
                    </div>
                    
                    <div class="col-xs-6 col-md-6">
                        <div><label class="etiquetita">Nombre</label></div>
                        <div><input type="text" name="nombre" id="nombre" class="cajita form-control" maxlength="20" placeholder="Ejemplo: Juan Eduardo" /></div>  
                    </div>
                    
                    <div class="col-xs-6 col-md-6">
                        <div><label class="etiquetita">Apellido Paterno</label></div>
                        <div><input type="text" name="paterno" id="paterno" class="cajita form-control" maxlength="20" placeholder="Ejemplo: Escutia" /></div>  
                    </div>
                    
                    <div class="col-xs-6 col-md-6">
                        <div><label class="etiquetita">Apellido Materno</label></div>
                        <div><input type="text" name="materno" id="materno" class="cajita form-control" maxlength="20" placeholder="Ejemplo: Escobar" /></div>  
                    </div>
                    
                    <div class="col-xs-12 col-md-12">
						<br/>
                        <div><center><input type="button" class="button" onClick="return BuscarAlumnosServicios(this);" name="busqueda" id="busqueda" value="Buscar"/> <input type="reset"></center></div>   
                        <br/>
                    </div>
                     
                  </div>
              
            
                <div id="resultado">
                    <br>
                </div>
                    

             </form>
            
            
            </div>
            
        </div>

      
</div>

<!---------------------------------------------------------------------------->
	<?php include('../footer.php')?>