<?php 
include('validaacceso.php');
 include('../conexion/conexion2.php');

require('puertas.php');

$unidad=$_POST['unidad'];
$grupo=$_POST['grupo'];
$curp=$_POST['curp'];
if($unidad<>"" || $grupo<>"" || $curp<>""){
	unidades($unidad,$curp,$grupo);
	}
	
	
function unidades($b1,$b2,$b3){	  
$con=conexion();
$sql="select*from materias where ASIG_ID=".$b1;
/* and ALUM_CURP='".$b2."' and DATO_CLAVE='".$b3."'";*/
		$res=mysql_query($sql,$con);
		  if(mysql_num_rows($res)==0){
			  echo'<center><b>No Hay Registros</b></center>';
			  }
			  else{
				  while($row=mysql_fetch_array($res)){ 
				  
				  $unidades=$row['ASIG_UNIDAD'];
				  $materia=$row['ASIG_NOMBRE'];	
				  $asig_id=$row['ASIG_ID'];
echo'<center><br><table width="100%" border="0" class="footable">
                     <thead>
			            <tr id="fondo_tabla" height="30px">
			    			<td width="20%"><center><label id="titulo_tabla">Materia</label></center></td>';
					for($i=1;$i<=$unidades;$i++){
						echo '<td><center><label id="titulo_tabla">A'.$i.'</label></center></td>';
						}
					for($i=1;$i<=$unidades;$i++){
						echo '<td><center><label id="titulo_tabla">U'.$i.'</label></center></td>';
						}
					echo '<td width="10%"><center><label id="titulo_tabla">Examen Final</label></center></td>';
					echo '<td width="7%"><center><label id="titulo_tabla">Calificacion Global</label></center></td>';
					echo '<td width="7%"><center><label id="titulo_tabla">Asistencia Global</label></center></td>';
					echo '<td width="7%"><center><label id="titulo_tabla">E.E.R.</label></center></td>';					
			     echo'</tr>
			       </thead>
			 <tr>';
			 		echo'<td width="20%"><center><label id="etiquetita">'.$materia.'</label></center></td>';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////					
					$sql2="select*from calif_parciales where ASIG_ID=".$b1." and ALUM_CURP='".$b2."' and DATO_CLAVE='".$b3."'";
					$res2=mysql_query($sql2,$con);
					  if(mysql_num_rows($res2)==0){
						  echo'<center><b>No Hay Registros</b></center>';
						  }
						  else{
							  while($row2=mysql_fetch_array($res2)){
								  
$CP1=$row2['CALIF_PARCIAL1'];   $CA1=$row2['CALIF_ASISTENCIA1'];    $EXTRA1=$row2['CALIF_EXTRA1'];    $EXTRAFECHA1=$row2['CALIF_EXTRA_FECHA1'];
$CP2=$row2['CALIF_PARCIAL2'];   $CA2=$row2['CALIF_ASISTENCIA2'];    $EXTRA2=$row2['CALIF_EXTRA2'];    $EXTRAFECHA2=$row2['CALIF_EXTRA_FECHA2'];
$CP3=$row2['CALIF_PARCIAL3'];   $CA3=$row2['CALIF_ASISTENCIA3'];    $EXTRA3=$row2['CALIF_EXTRA3'];    $EXTRAFECHA3=$row2['CALIF_EXTRA_FECHA3'];
$CP4=$row2['CALIF_PARCIAL4'];   $CA4=$row2['CALIF_ASISTENCIA4'];    $califglobal=$row2['CALIF_GLOBAL']; $CF=$row2['CALIF_EXAMEN_FINAL'];
$CP5=$row2['CALIF_PARCIAL5'];   $CA5=$row2['CALIF_ASISTENCIA5'];    $asisglobal=$row2['CALIF_ASISTENCIA_FINAL'];
$CP6=$row2['CALIF_PARCIAL6'];   $CA6=$row2['CALIF_ASISTENCIA6'];    $eer=$row2['CALIF_EER'];
							
		evaluar($unidades,$asig_id,$CP1,$CP2,$CP3,$CP4,$CP5,$CP6,$CA1,$CA2,$CA3,$CA4,$CA5,$CA6,$CF);
															  
								   }	
							echo'<td class="';
							if(($califglobal>5) && (
		($CA1>85||$CA1==0) && ($CA2>85||$CA2==0 )&& ($CA3>85||$CA3==0) && ($CA4>85||$CA4==0)) && 
		(($CP1>5||$CP1==0) && ($CP2>5||$CP2==0)  && ($CP3>5||$CP3==0)  && ($CP4>5||$CP4==0))	
									)
						{echo'celda_aprobado etiquetita';}else 
if(($califglobal==5) ||	(($CA1>0 && $CA1<85 && $CA1>65) || ($CA2>0 && $CA2<85 && $CA2>65) || ($CA3>0 && $CA3<85 && $CA3>65) || ($CA4>0 && $CA4<85 && $CA4>65) )|| (($CP1>0 && $CP1<6) || ($CP2>0 && $CP2<6) || ($CP3>0 && $CP3<6) || ($CP4>0 && $CP4<6)))
                        {echo 'celda_reprobado etiquetita';}
                         echo'"><center><label id="etiquetita">'. $califglobal.'</label></center></td>';
						 echo'<td class="';
if(($asisglobal>=85) && (($CA1>=85||$CA1==0) && ($CA2>=85||$CA2==0) && ($CA3>=85||$CA3==0) && ($CA4>=85||$CA4==0)))
                        {echo'celda_aprobado etiquetita';}
						
				   else if($asisglobal<>0 && ( $CA1<85 || $CA2<85 || $CA3<85 || $CA4<85))
						{echo 'celda_reprobado etiquetita';}
						 echo'"><center><label id="etiquetita">'.$asisglobal.'%</label></center></td>';
							
echo'<td><center><label id="etiquetita"><input type="checkbox" value="1" name="eer" ';if($eer==1){echo "checked='true'";} echo'></label></center></td>';
			 echo"</tr>";
			 echo'</table><br><center>';

//////////////////////////						
				extraordinarios($EXTRA1,$EXTRA2,$EXTRA3,$EXTRAFECHA1,$EXTRAFECHA2,$EXTRAFECHA3,$CA1,$CA2,$CA3,$CA4,$CP1,$CP2,$CP3,$CP4);
					
								   }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////					
					}
			  }
					   		
	} 
	
?>