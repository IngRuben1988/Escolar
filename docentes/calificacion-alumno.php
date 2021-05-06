<?php include('validaacceso.php'); ?>
<!doctype html>
<?php include('../conexion/conexion.php')?>
<?php include('../conexion/conexion2.php');?>

<html lang="es">
<head>
<!--[if IE]>
este contenido solo se muestra en IE
<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>SAEN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.css">
    <link href="css/Hoja_formaulario.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/Escudo_Normal_Preescolar.ico">
 
	<?php include('../javascripts.php')?>

</head>

<body>

<!--cabeza del contenido-->
     <header>
        <!--nombre de la escuela -->
        <div class="container">
     	<!--logo de la escuela-->

           
                <div class="col-xs-3 col-md-2" align="right" ><a href="index.php">
                	<img src="../img/Escudo_Normal_Preescolar2.fw.png" width="80%" height="60%"></a>
                </div>
               
                <div class="col-xs-4 col-md-3" align="left">
                   
            			<img src="../img/escuela.fw.png" width="100%" height="80%">
                    </div>
				<div class="col-md-4" align="left"></div>
                
                <div class="col-xs-3 col-md-2" align="right">
                <a><img src="img/docentes.fw.png" width="80%" height="60%" ></a>
                </div>
     	</div>
		
     </header>


<div class="col-xs-12 col-md-12">
<br/>
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">

            <li class="active"><a class="btn btn-primary btn-lg" href="#orange" data-toggle="tab">Calificacion del Alumno</a></li>
            <li><a class="btn btn-primary btn-lg" href="#yellow" data-toggle="tab">Insertar la Calificacion</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">

			<div class="tab-pane active" id="orange">
<?php
$alumno=$_GET['alumno'];
$salones=$_GET['salon'];
$semestre=$_GET['semestre'];
$nombre=$_GET['nombre'];
$paterno=$_GET['paterno'];
$materno=$_GET['materno'];
$con=conexion();
$sql="select * from conjunto_datos where alum_curp='".$alumno."' and SEM_ID='".$semestre."'";
			$res=mysql_query($sql,$con);
			  if(mysql_num_rows($res)==0){

				   }else{
				 while($row=mysql_fetch_array($res)){
					 
			echo'<br><center><table width="50%" border="0" class="footable">
			    <thead>
				  <tr height="30px">
					<td><center><label id="titulo_tabla">Nombre del Alumno</label></center></td>
					<td><center><label id="titulo_tabla">Grado</label></center></td>
					<td><center><label id="titulo_tabla">Salon</label></center></td>
				  </tr>
				 </thead>
				  <tr>
					<td><center><label class="etiquetita">'.$paterno.' '.$materno.' '.$nombre.'</label></center></td>
					<td><center><label class="etiquetita">',$semestre.'° '.$semestre2,'</label></center></td>
					<td><center><label class="etiquetita">',$row['DATO_CLAVE'],'</label></center></td>
				  </tr>
				</table></center>';
				$salon=$row['DATO_CLAVE'];

   }
}
?>
<br>
<table width="100%" border="0" class="footable">
 <thead>
  <tr height="30px">
  	 <td width="30%"><center><label id="titulo_tabla">Materias</label></center></td>
     <td width=""><center><label id="titulo_tabla">A1</label></center></td>
     <td width=""><center><label id="titulo_tabla">A2</label></center></td>
     <td width=""><center><label id="titulo_tabla">A3</label></center></td>
     <td width=""><center><label id="titulo_tabla">A4</label></center></td>
     <td width=""><center><label id="titulo_tabla">AG</label></center></td>
     <td width=""><center><label id="titulo_tabla">U1</label></center></td>
     <td width=""><center><label id="titulo_tabla">U2</label></center></td>
     <td width=""><center><label id="titulo_tabla">U3</label></center></td>
     <td width=""><center><label id="titulo_tabla">U4</label></center></td>
     <td width=""><center><label id="titulo_tabla">Examen Final</label></center></td>
     <td width=""><center><label id="titulo_tabla">RG</label></center></td>
	 <td width=""><center><label id="titulo_tabla">EE1</label></center></td>
     <td width=""><center><label id="titulo_tabla">EE2</label></center></td>
     <td width=""><center><label id="titulo_tabla">EE3</label></center></td>
     <td width=""><center><label id="titulo_tabla">E.E.R.</label></center></td>
  </tr>
 </thead>
  
<?php	
$sql="select s.SEM_MATERIA,s.SEM_ID,m.ASIG_NOMBRE,m.ASIG_UNIDAD,m.ASIG_ID from semestres as s, materias as m
where s.SEM_ID=m.ID_SEM and s.SEM_ID=".$semestre;


$res=mysql_query($sql,$con);
if(mysql_num_rows($res)==0){

   }else{
 while($row=mysql_fetch_array($res)){
	 $materia=$row['SEM_MATERIA'];
	 $unidades=$row['ASIG_UNIDAD'];	
	 
	 	 	 echo '
			 <tr>
			 	   <td>'.$row['ASIG_NOMBRE'].'</td>';
					$sql2="select*from consulta_calificaciones where alum_curp='".$alumno."'and dato_clave='".$salon."' and ASIG_ID=".$row['ASIG_ID'];
					$res2=mysql_query($sql2,$con);
					if(mysql_num_rows($res2)==0){
				
					   }else{
					 while($row2=mysql_fetch_array($res2)){
							 echo '<td width="5%" height="40px"  class="';if($row2['CALIF_ASISTENCIA1']>84){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_ASISTENCIA1']<>0){echo 'celda_reprobado etiquetita';}} echo'"><center>';
if($row2['CALIF_ASISTENCIA1']<>0){echo $row2['CALIF_ASISTENCIA1'].'%';}echo'</center></td>';	
						  
							 echo '<td width="5%" height="40px"  class="';if($row2['CALIF_ASISTENCIA2']>84){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_ASISTENCIA2']<>0){echo 'celda_reprobado etiquetita';}} echo'"><center>';
if($row2['CALIF_ASISTENCIA2']<>0){echo $row2['CALIF_ASISTENCIA2'].'%';}echo'</center></td>';	
			 
							 echo '<td width="5%" height="40px"  class="';if($row2['CALIF_ASISTENCIA3']>84){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_ASISTENCIA3']<>0){echo 'celda_reprobado etiquetita';}} echo'"><center>';
if($row2['CALIF_ASISTENCIA3']<>0){echo $row2['CALIF_ASISTENCIA3'].'%';}echo'</center></td>';

							 echo '<td width="5%" height="40px"  class="';if($row2['CALIF_ASISTENCIA4']>84){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_ASISTENCIA4']<>0){echo 'celda_reprobado etiquetita';}} echo'"><center>';
if($row2['CALIF_ASISTENCIA4']<>0){echo $row2['CALIF_ASISTENCIA4'].'%';}echo'</center></td>';
                             echo '<td width="5%" height="40px" class="celda_gobal"><center>'./*number_format(*/$row2['CALIF_ASISTENCIA_FINAL']/*,1)*/.'%</center></td>';

							 echo '<td width="5%" height="40px" class="';if($row2['CALIF_PARCIAL1']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_PARCIAL1']<>0){echo 'celda_reprobado etiquetita';}} echo'"><center>';
if($row2['CALIF_PARCIAL1']<>0){echo $row2['CALIF_PARCIAL1'];}echo'</center></td>';
							 
							echo '<td width="5%" height="40px"  class="';if($row2['CALIF_PARCIAL2']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_PARCIAL2']<>0){echo 'celda_reprobado etiquetita';}} echo'"><center>';
if($row2['CALIF_PARCIAL2']<>0){echo $row2['CALIF_PARCIAL2'];}echo'</center></td>';
							 
							 echo '<td width="5%" height="40px"  class="';if($row2['CALIF_PARCIAL3']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_PARCIAL3']<>0){echo 'celda_reprobado etiquetita';}} echo'"><center>';
if($row2['CALIF_PARCIAL3']<>0){echo $row2['CALIF_PARCIAL3'];}echo'</center></td>';

							 echo '<td width="5%" height="40px"  class="';if($row2['CALIF_PARCIAL4']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_PARCIAL4']<>0){echo 'celda_reprobado etiquetita';}} echo'"><center>';
if($row2['CALIF_PARCIAL4']<>0){echo $row2['CALIF_PARCIAL4'];}echo'</center></td>';


echo '<td width="5%" height="40px"  class="';
if(($row2['CALIF_EXAMEN_FINAL']>=6) && 
    (   
    ($row2['CALIF_ASISTENCIA1']==0 || $row2['CALIF_ASISTENCIA1']>84) && 
    ($row2['CALIF_ASISTENCIA2']==0 || $row2['CALIF_ASISTENCIA2']>84) && 
    ($row2['CALIF_ASISTENCIA3']==0 || $row2['CALIF_ASISTENCIA3']>84) &&   
    ($row2['CALIF_ASISTENCIA4']==0 || $row2['CALIF_ASISTENCIA4']>84)
	) &&
	(   
    ($row2['CALIF_PARCIAL1']==0 || $row2['CALIF_PARCIAL1']>5) && 
    ($row2['CALIF_PARCIAL2']==0 || $row2['CALIF_PARCIAL2']>5) && 
    ($row2['CALIF_PARCIAL3']==0 || $row2['CALIF_PARCIAL3']>5) &&   
    ($row2['CALIF_PARCIAL4']==0 || $row2['CALIF_PARCIAL4']>5)
	)
 )
 {echo'celda_aprobado etiquetita';}else{
	 
if( ($row2['CALIF_EXAMEN_FINAL']<>0 )&&
	( 
	($row2['CALIF_ASISTENCIA1']>0 && $row2['CALIF_ASISTENCIA1']<85) || 
	($row2['CALIF_ASISTENCIA2']>0 && $row2['CALIF_ASISTENCIA2']<85) || 
	($row2['CALIF_ASISTENCIA3']>0 && $row2['CALIF_ASISTENCIA3']<85) ||  
	($row2['CALIF_ASISTENCIA4']>0 && $row2['CALIF_ASISTENCIA4']<85)
	)||
	(   
    ($row2['CALIF_PARCIAL1']>0 && $row2['CALIF_PARCIAL1']<6) || 
    ($row2['CALIF_PARCIAL2']>0 && $row2['CALIF_PARCIAL2']<6) || 
    ($row2['CALIF_PARCIAL3']>0 && $row2['CALIF_PARCIAL3']<6) ||   
    ($row2['CALIF_PARCIAL4']>0 && $row2['CALIF_PARCIAL4']<6)
	)
	)
	{echo 'celda_reprobado etiquetita';}
	
	} echo'"><center>';
	
	
if(($row2['CALIF_EXAMEN_FINAL']<>0 )&& 
	(
	($row2['CALIF_ASISTENCIA1']>0 && $row2['CALIF_ASISTENCIA1']<85) || 
	($row2['CALIF_ASISTENCIA2']>0 && $row2['CALIF_ASISTENCIA2']<85) || 
	($row2['CALIF_ASISTENCIA3']>0 && $row2['CALIF_ASISTENCIA3']<85) ||  
	($row2['CALIF_ASISTENCIA4']>0 && $row2['CALIF_ASISTENCIA4']<85)
	)
	||
	(   
    ($row2['CALIF_PARCIAL1']>0 && $row2['CALIF_PARCIAL1']<6) || 
    ($row2['CALIF_PARCIAL2']>0 && $row2['CALIF_PARCIAL2']<6) || 
    ($row2['CALIF_PARCIAL3']>0 && $row2['CALIF_PARCIAL3']<6) ||   
    ($row2['CALIF_PARCIAL4']>0 && $row2['CALIF_PARCIAL4']<6)
	)
	){echo'5';}else{echo $row2['CALIF_EXAMEN_FINAL'];}echo'</center></td>';						 
							 echo '<td width="5%" height="40px" class="celda_gobal"><center>'.$row2['CALIF_GLOBAL'].'</center></td>';
							 
												 
							 echo '<td width="5%" height="40px"><center>';
if($row2['CALIF_EXTRA1']<>0){echo $row2['CALIF_EXTRA1'];}echo'</center></td>';
					 
							 echo '<td width="5%" height="40px"><center>';
if($row2['CALIF_EXTRA1']<>0){echo $row2['CALIF_EXTRA2'];}echo'</center></td>';
					 
							 echo '<td width="5%" height="40px"><center>';
if($row2['CALIF_EXTRA1']<>0){echo $row2['CALIF_EXTRA3'];}echo'</center></td>';
							 
							 echo '<td width="5%" height="40px" class="';if($row2['CALIF_EER']==0){echo"eerno";}else{echo"eersi";}echo'"><center>';if($row2['CALIF_EER']==0){echo"No";}else{echo"Si";}echo'</center></td>';
							 $PROMEDIO=$PROMEDIO+$row2['CALIF_GLOBAL']/8;
							}
						
						 }	   
			 echo '</tr>';	
			 
	 } 
echo'<tr><td class="celda_gobal"><label id="titulo_tabla">Promedio Semestral: '.number_format($PROMEDIO,1).'</label></td></tr>';	
} 
?>  </table><br>                                       
            </div>



<!-- otro tab -->
            <div class="tab-pane col-xs-12 col-md-12" id="yellow"><!--Documentación-->
            
            <br/>
<form method="post" action="zeta_x0002.php" onsubmit="EnviarCalificacion(); return false;" name="Calificaciones" onKeyPress="return disableEnterKey(event);">
<?php
$alumno=$_GET['alumno'];
$salones=$_GET['salon'];
$nombre=$_GET['nombre'];
$paterno=$_GET['paterno'];
$materno=$_GET['materno'];
$docente=$_GET['maestro'];
if($alumno<>"" && $salones<>""){
	TablaCalificaciones($salones,$alumno);
	CalifSemestrales($salones,$alumno,$paterno,$materno,$nombre,$CURP);
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////	
function TablaCalificaciones($salon,$curp){
	$con=conexion();
	$sql="select*from Consulta_Calificaciones where DATO_CLAVE='".$salon."' and ALUM_CURP='".$curp."'";	
	$res=mysql_query($sql,$con);
  if(mysql_num_rows($res)==0){
	  echo'<center><b>No Hay Registros</b></center>';
	  }
	  else{
		  while($row=mysql_fetch_array($res)){ 
		   	$semestres=$row['SEM_ID'];
			$alumcurp=$row['ALUM_CURP'];
			$alumsalon=$row['DATO_CLAVE'];
			}
/////////////////////////////////////////////////////////////////////////////////////////////////////	 
	$sql2="select*from consulta_ciclos_escolares where  DATO_CLAVE='".$alumsalon."'  limit 1";	
	$res2=mysql_query($sql2,$con);
  if(mysql_num_rows($res2)==0){
	  echo'<center><b>No Hay Registros</b></center>';
	  }
	  else{
		  while($row2=mysql_fetch_array($res2)){ 
		   	$carrera=$row2['PLAN_NOMBRE'];
			$plan=$row2['PLAN_FECHA'];
			$ciclo=$row2['ini']." - ".$row2['fin'];
			}
		}
		  
echo'<br/>';
echo '<input type="hidden" value="'.$alumcurp.'" id="califcurp" name="califcurp"/>
      <input type="hidden" value="'.$alumsalon.'" id="califdato" name="califdato"/>';
echo '<center><table width="70%" border="0" class="footable">
      <thead>
			<tr id="fondo_tabla" height="30px">
			    	<td width="20%"><center><label id="titulo_tabla">Salon</label></center></td>
					<td width="15%"><center><label id="titulo_tabla">Ciclo Escolar</label></center></td>
					<td width="30%"><center><label id="titulo_tabla">Carrera</label></center></td>
					<td width="15%"><center><label id="titulo_tabla">Plan de Estudios</label></center></td>
					<td width="15%"><center><label id="titulo_tabla">Turno</label></center></td>
			</tr>
      </thead>
			<tr>
					<td><center><label id="etiquetita">'.$alumsalon.'</label></center></td>
					<td><center><label id="etiquetita">'.$ciclo.'</label></center></td>
					<td><center><label id="etiquetita">'.$carrera.'</label></center></td>
					<td><center><label id="etiquetita">'.$plan.'</label></center></td>
					<td><center><label id="etiquetita">Vespertino</label></center></td>
			</tr>
	  </table><br></center>';
	
	  }
/////////////////////////////////////////////////////////////////////////////////////////////////////
}
$ciclo;
function CalifSemestrales($salon,$curp,$p,$m,$n,$d){
$con3=conexion();  
$sql3="select * from Consulta_Calificaciones where dato_clave='".$salon."' and alum_curp='".$curp."'";

		$res3=mysql_query($sql3,$con3);
		  if(mysql_num_rows($res3)==0){
			  echo'<center><b>No Hay Registros</b></center>';
			  }
			  else{	
			  echo '<center>
<table width="70%" border="0" class="footable">
 <thead>
	<tr height="50px" id="fondo_tabla">
		<td><center><label id="titulo_tabla">Nombre del Alumno</label></center></td>
    	<td><center><label id="titulo_tabla">Materia</label></center></td>
    </tr>
  </thead>';			 				  
			  echo "<tr>";
			  echo'<td><center><label id="etiquetita">'.$p.' '.$m.' '.$n.'</label></center></td>';	  
				   echo "<td><center><label class='etiquetita'>
				   <select  class='cajita form-control' id='materias' name='califmat' onChange='return unidades(this);'>";
							echo'<option value="-1">Seleccione una Materia</option>';	
							$sql4="select*from consulta_docente_grupo where dato_clave='".$salon."' and doc_curp='".$d."'";	
							$res4=mysql_query($sql4,$con3);			
				  while($row4=mysql_fetch_array($res4)){ 	
					       echo "<option value='".$row4['ASIG_ID']."'>".$row4['ASIG_NOMBRE']."</option>";
					}
					
					echo"</select>
					</label></center></td>";
					
			  echo '</tr> 
			  </table></center>';	  
		  }	
		 
} 

//////////////////////////////////////////////////////////////////////////
echo '<input type="hidden" name="alumno" value="'.$alumno.'">';
echo '<input type="hidden" name="salon" value="'.$salones.'">';
echo '<input type="hidden" name="nombre" value="'.$nombre.'">';
echo '<input type="hidden" name="paterno" value="'.$paterno.'">';
echo '<input type="hidden" name="materno" value="'.$materno.'">';
echo '<input type="hidden" name="semestre" value="'.$semestre.'">';
?>
 <div id="misunidades" class="container"></div>

</form>	</div>

</div>


</div>
<?php include('../footer.php');?>