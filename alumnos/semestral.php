<?php include('validaacceso.php'); ?>
<!doctype html>
<?php include('../conexion/conexion.php')?>
<?php include('../conexion/conexion2.php');
$semestre=$_GET['semestre'];
$semestre2=$_GET['semestre2'];?>

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
                <a><img src="img/alumnos.fw.png" width="80%" height="60%" ></a>
                </div>
     	</div>
		
     </header>
<body>
 <div class="container">
 <br>
<?php
$con=conexion();
$sql="select * from conjunto_datos where alum_curp='".$CURP."' and SEM_ID=".$semestre;
			$res=mysql_query($sql,$con);
			  if(mysql_num_rows($res)==0){

				   }else{
				 while($row=mysql_fetch_array($res)){
					 
			echo'<table width="100%" border="1">
				  <tr class="menu" height="30px">
					<td><center><label class="etiquetita">Nombre del Alumno</label></center></td>
					<td><center><label class="etiquetita">Grado</label></center></td>
					<td><center><label class="etiquetita">Salon</label></center></td>
				  </tr>
				  <tr>
					<td><center><label class="etiquetita">',$Nombre,'</label></center></td>
					<td><center><label class="etiquetita">',$semestre.'° '.$semestre2,'</label></center></td>
					<td><center><label class="etiquetita">',$row['DATO_CLAVE'],'</label></center></td>
				  </tr>
				</table>';
				$salon=$row['DATO_CLAVE'];

   }
}
?>
<br>
<div class="col-xs-10 col-md-12 col-lg-12"> 
<table width="100%" border="1">
  <tr height="30px" class="menu">
<td width="30%"><center><label class="etiquetita">Materias</label></center></td>
     <td width=""><center><label class="etiquetita">A1</label></center></td>
     <td width=""><center><label class="etiquetita">A2</label></center></td>
     <td width=""><center><label class="etiquetita">A3</label></center></td>
     <td width=""><center><label class="etiquetita">A4</label></center></td>
     <td width=""><center><label class="etiquetita">AG</label></center></td>
     <td width=""><center><label class="etiquetita">U1</label></center></td>
     <td width=""><center><label class="etiquetita">U2</label></center></td>
     <td width=""><center><label class="etiquetita">U3</label></center></td>
     <td width=""><center><label class="etiquetita">U4</label></center></td>
     <td width=""><center><label class="etiquetita">Examen Final</label></center></td>
     <td width=""><center><label class="etiquetita">RG</label></center></td>
	 <td width=""><center><label class="etiquetita">EE1</label></center></td>
     <td width=""><center><label class="etiquetita">EE2</label></center></td>
     <td width=""><center><label class="etiquetita">EE3</label></center></td>
     <td width=""><center><label class="etiquetita">E.E.R.</label></center></td>
  </tr>
  
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
					$sql2="select*from consulta_calificaciones where alum_curp='".$CURP."'and dato_clave='".$salon."' and ASIG_ID=".$row['ASIG_ID'];
					$res2=mysql_query($sql2,$con);
					if(mysql_num_rows($res2)==0){

					   }else{
					 while($row2=mysql_fetch_array($res2)){
						 
						 	echo '<td width="5%" height="40px"  class="';if($row2['CALIF_ASISTENCIA1']>84){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_ASISTENCIA1']<85&&$row2['CALIF_ASISTENCIA1']>0){echo 'celda_reprobado etiquetita';}} 
							echo'"><center>';if($row2['CALIF_ASISTENCIA1']>0){echo $row2['CALIF_ASISTENCIA1']."%";}echo'</center></td>';	
				
							echo '<td width="5%" height="40px"  class="';if($row2['CALIF_ASISTENCIA2']>84){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_ASISTENCIA2']>0&&$row2['CALIF_ASISTENCIA2']<85){echo 'celda_reprobado etiquetita';}} 
							echo'"><center>';if($row2['CALIF_ASISTENCIA2']>0){echo $row2['CALIF_ASISTENCIA2']."%";}echo'</center></td>';
							
							echo '<td width="5%" height="40px"  class="';if($row2['CALIF_ASISTENCIA3']>84){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_ASISTENCIA3']>0&&$row2['CALIF_ASISTENCIA3']<85){echo 'celda_reprobado etiquetita';}} 
							echo'"><center>';if($row2['CALIF_ASISTENCIA3']>0){echo $row2['CALIF_ASISTENCIA3']."%";}echo'</center></td>';	
													
							echo '<td width="5%" height="40px"  class="';if($row2['CALIF_ASISTENCIA4']>84){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_ASISTENCIA4']>0&&$row2['CALIF_ASISTENCIA4']<85){echo 'celda_reprobado etiquetita';}} 
							echo'"><center>';if($row2['CALIF_ASISTENCIA4']>0){echo $row2['CALIF_ASISTENCIA4']."%";}echo'</center></td>';
							
							echo '<td width="5%" height="40px" class="celda_gobal"><center>'.$row2['CALIF_ASISTENCIA_FINAL'].'%</center></td>';
							
						 
							 echo '<td width="5%" height="40px" class="';if($row2['CALIF_PARCIAL1']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_PARCIAL1']>0&&$row2['CALIF_PARCIAL1']==5){echo 'celda_reprobado etiquetita';}} 
							 echo'"><center>';if($row2['CALIF_PARCIAL1']>0){echo $row2['CALIF_PARCIAL1'];}echo'</center></td>';							 
							 
							 echo '<td width="5%" height="40px"  class="';if($row2['CALIF_PARCIAL2']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_PARCIAL2']>0&&$row2['CALIF_PARCIAL2']==5){echo 'celda_reprobado etiquetita';}} 
							 echo'"><center>';if($row2['CALIF_PARCIAL2']>0){echo $row2['CALIF_PARCIAL2'];}echo'</center></td>';							
							 
							 echo '<td width="5%" height="40px"  class="';if($row2['CALIF_PARCIAL3']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_PARCIAL3']>0&&$row2['CALIF_PARCIAL3']==5){echo 'celda_reprobado etiquetita';}} 
							 echo'"><center>';if($row2['CALIF_PARCIAL3']>0){echo $row2['CALIF_PARCIAL3'];}echo'</center></td>';
						 
							 echo '<td width="5%" height="40px"  class="';if($row2['CALIF_PARCIAL4']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_PARCIAL4']>0&&$row2['CALIF_PARCIAL4']==5){echo 'celda_reprobado etiquetita';}} 
							 echo'"><center>';if($row2['CALIF_PARCIAL4']>0){echo $row2['CALIF_PARCIAL4'];}echo'</center></td>';
							 
							 echo '<td width="5%" height="40px"  class="';if($row2['CALIF_EXAMEN_FINAL']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_EXAMEN_FINAL']>0&&$row2['CALIF_EXAMEN_FINAL']==5){echo 'celda_reprobado etiquetita';}} echo'"><center>'.$row2['CALIF_EXAMEN_FINAL'].'</center></td>';
							 
							 
							 echo '<td width="5%" height="40px" class="celda_gobal"><center>'.$row2['CALIF_GLOBAL'].'</center></td>';
							 
							 
							 echo '<td width="5%" height="40px" class="';if($row2['CALIF_EXTRA1']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_EXTRA1']>0&&$row2['CALIF_EXTRA1']==5){echo 'celda_reprobado etiquetita';}} echo'"><center>';if($row2['CALIF_EXTRA1']>0){echo $row2['CALIF_EXTRA1'];}echo '</center></td>';
							 
							 echo '<td width="5%" height="40px" class="';if($row2['CALIF_EXTRA2']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_EXTRA2']>0&&$row2['CALIF_EXTRA2']==5){echo 'celda_reprobado etiquetita';}} echo'"><center>';if($row2['CALIF_EXTRA2']>0){echo $row2['CALIF_EXTRA2'];}echo '</center></td>';
							 
							 echo '<td width="5%" height="40px" class="';if($row2['CALIF_EXTRA3']>=6){echo'celda_aprobado etiquetita';}else{if($row2['CALIF_EXTRA3']>0&&$row2['CALIF_EXTRA3']==5){echo 'celda_reprobado etiquetita';}} echo'"><center>';if($row2['CALIF_EXTRA3']>0){echo $row2['CALIF_EXTRA3'];}echo '</center></td>';
							 
							 echo '<td width="5%" height="40px" class="';if($row2['CALIF_EER']==0){echo'eerno etiquetita';}else{if($row2['CALIF_EER']==1){echo 'eersi etiquetita';}} echo'"><center>';if($row2['CALIF_EER']==0){echo"No";}else{echo"Si";}echo'</center></td>';
							 $PROMEDIO=$PROMEDIO+$row2['CALIF_GLOBAL'];
							}
						
						 }	   
			 echo '</tr>';		
	 } 

} 
?>
</table><br>

<center><table width="100%" border="0">
  <tr height="30px" class="menu">
  	 <td><center><label class="etiquetita">Promedio Semestral</label></center></td>
     <td width="7%"  class="celda_gobal"><center><label><?php echo number_format($PROMEDIO/$materia,1)?></label></center></td>
  </tr>
</table></center>
</div>
<br>
<center><table width="40%" border="1">
  <tr height="30px" class="menu">
  	 <td><center><label class="etiquetita">Nivel de Desempeño</label></center></td>
     <td width="7%"  class="celda_gobal"><center><label>Equivalencia Numérica</label></center></td>
  </tr>
    <tr height="30px">
  	 <td><center><label class="etiquetita">Competente</label></center></td>
     <td width="7%"  class="celda_aprobado"><center><label>10</label></center></td>
  </tr>
    <tr height="30px">
  	 <td><center><label class="etiquetita">Satisfactorio</label></center></td>
     <td width="7%"  class="celda_aprobado"><center><label>9</label></center></td>
  </tr>
    <tr height="30px">
  	 <td><center><label class="etiquetita">Suficiente</label></center></td>
     <td width="7%"  class="celda_aprobado"><center><label>8</label></center></td>
  </tr>
    <tr height="30px">
  	 <td><center><label class="etiquetita">Regular</label></center></td>
     <td width="7%"  class="celda_aprobado"><center><label>7</label></center></td>
  </tr>
    <tr height="30px">
  	 <td><center><label class="etiquetita">Básico</label></center></td>
     <td width="7%"  class="celda_aprobado"><center><label>6</label></center></td>
  </tr>
    <tr height="30px">
  	 <td><center><label class="etiquetita">No se Muestra</label></center></td>
     <td width="7%"  class="celda_reprobado"><center><label>5</label></center></td>
  </tr>
</table></center>
<br>
</body>
