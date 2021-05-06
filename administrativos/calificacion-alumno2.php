<?php  include('../conexion/conexion2.php');

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
			  echo'<center><b>Seleccione una Materia</b></center>';
			  }
			  else{
				  while($row=mysql_fetch_array($res)){ 
				  
				  $unidades=$row['ASIG_UNIDAD'];
				  $materia=$row['ASIG_NOMBRE'];	
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
			 <tr>
</thead>';
			 		echo'<td width="20%"><center><label id="etiquetita">'.$materia.'</label></center></td>';
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////					
					$sql2="select*from calif_parciales where ASIG_ID=".$b1." and ALUM_CURP='".$b2."' and DATO_CLAVE='".$b3."'";
					$res2=mysql_query($sql2,$con);
					  if(mysql_num_rows($res2)==0){
						
						  }
						  else{
							  while($row2=mysql_fetch_array($res2)){
$CP1=$row2['CALIF_PARCIAL1']; $CA1=$row2['CALIF_ASISTENCIA1']; $EXTRA1=$row2['CALIF_EXTRA1']; $EXTRAFECHA1=$row2['CALIF_EXTRA_FECHA1'];
$CP2=$row2['CALIF_PARCIAL2']; $CA2=$row2['CALIF_ASISTENCIA2']; $EXTRA2=$row2['CALIF_EXTRA2']; $EXTRAFECHA2=$row2['CALIF_EXTRA_FECHA2'];
$CP3=$row2['CALIF_PARCIAL3']; $CA3=$row2['CALIF_ASISTENCIA3']; $EXTRA3=$row2['CALIF_EXTRA3']; $EXTRAFECHA3=$row2['CALIF_EXTRA_FECHA3'];
$CP4=$row2['CALIF_PARCIAL4'];   $CA4=$row2['CALIF_ASISTENCIA4'];    $califglobal=$row2['CALIF_GLOBAL'];
$CP5=$row2['CALIF_PARCIAL5'];   $CA5=$row2['CALIF_ASISTENCIA5'];    $asisglobal=$row2['CALIF_ASISTENCIA_FINAL'];
$CP6=$row2['CALIF_PARCIAL6'];   $CA6=$row2['CALIF_ASISTENCIA6'];    $eer=$row2['CALIF_EER']; $CF=$row2['CALIF_EXAMEN_FINAL'];

								if($unidades==1){
								  /////////////////////////////////////////
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CP1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  /////////////////////////////////////////
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  /////////////////////////////////////////
								      }else
									  
									  
								if($unidades==2){
								  /////////////////////////////////////////
    							  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia2'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA2==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  /////////////////////////////////////////
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial2'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  
								  
								      }else 
									  
								if($unidades==3){
								  /////////////////////////////////////////
  							     echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia2'>"; 								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA2==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia3'>"; 								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA3==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  
								  ////////////////////////////////////////
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial2'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial3'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP3==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";								  
								  /////////////////////////////////////////
								      }else
								   if($unidades==4){
								  /////////////////////////////////////////			  
								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>"	;				  								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia2'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA2==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia3'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA3==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia4'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA4==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  /////////////////////////////////////////


								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial2'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial3'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP3==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial4'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP4==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  								  
								      }else
									  
								////////////////////////////////////////////////	  
								 if($unidades==5){
								  /////////////////////////////////////////
								 echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>"	;				  								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia2'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA2==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia3'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA3==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia4'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA4==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia5'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA5==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  /////////////////////////////////////////
								  
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial2'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial3'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP3==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial4'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP4==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial5'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP5==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  ////////////////////
								      }else
									  
									  ////////////////////////////////////////////////	  
								 if($unidades==6){
								 //////////////////////////////////////////////////
								 echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>"	;				  								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia2'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA2==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia3'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA3==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia4'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA4==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia5'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA5==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia6'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($CA6==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";								 
								  
                                  /////////////////////////////
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial2'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial3'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP3==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial4'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP4==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial5'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP5==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial6'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($CP6==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
                                 /////////////////////////////								  								  
								 }
								  
								   }
							echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='cfinal'>"; 
								  for($if=5;$if<=10;$if++){
									  echo"<option value='".$if."'";if($CF==$if){echo" selected='true' ";}echo" >".$if."</option>";
									  } 
							echo"</select></label></center></td>";
							echo'<td class="'; 
		if(($califglobal>5) && (
		($CA1>85||$CA1==0) && ($CA2>85||$CA2==0 )&& ($CA3>85||$CA3==0) && ($CA4>85||$CA4==0)) && 
		(($CP1>5||$CP1==0) && ($CP2>5||$CP2==0)  && ($CP3>5||$CP3==0)  && ($CP4>5||$CP4==0))	)
						{echo'celda_aprobado etiquetita';}else 
						    if(($califglobal==5) ||
		(($CA1>0 && $CA1<85 && $CA1>65) || ($CA2>0 && $CA2<85 && $CA2>65) || ($CA3>0 && $CA3<85 && $CA3>65) || ($CA4>0 && $CA4<85 && $CA4>65) )||  
							
		(($CP1>0 && $CP1<6) || ($CP2>0 && $CP2<6) || ($CP3>0 && $CP3<6) || ($CP4>0 && $CP4<6))
	){echo 'celda_reprobado etiquetita';}
							echo'"><center><label id="etiquetita">';
							if(($califglobal>=6) ||
						(($CA1>84 || $CA1==0) && ($CA2>84 || $CA2==0) && ($CA3>84 || $CA3==0) && ($CA4>84 || $CA4==0)) && 
						(($CP1>=6 || $CP1==0) && ($CP2>=6 || $CP2==0) && ($CP3>=6 || $CP3==0) && ($CP4>=6 || $CP4==0))	)
							{echo $califglobal;}else{echo '5';} echo'</label></center></td>';
							
							echo'<td class="'; if(($asisglobal>=85) && 
							(($CA1>=85||$CA1==0) && ($CA2>=85||$CA2==0) && ($CA3>=85||$CA3==0) && ($CA4>=85||$CA4==0))){echo'celda_aprobado etiquetita';}else if($asisglobal<>0 && ( $CA1<85 || $CA2<85 || $CA3<85 || $CA4<85)){echo 'celda_reprobado etiquetita';}
							echo'"><center><label id="etiquetita">'.$asisglobal.'%</label></center></td>';
							echo'<td><center><label id="etiquetita"><input type="checkbox" value="1" name="eer" ';if($eer==1){echo "checked='true'";} echo'></label></center></td>';
			 echo"</tr>";
			 echo'</table><br><center>';
			 
if(	(
    ($CA1>0  && $CA1<50) || 
	($CA2>0  && $CA2<50) || 
	($CA3>0  && $CA3<50) ||  
	($CA4>0  && $CA4<50)
	) || (
	($CP1>0 && $CP1<6) || 
    ($CP2>0 && $CP2<6) || 
    ($CP3>0 && $CP3<6) ||   
    ($CP4>0 && $CP4<6)
   ) )
{
			  echo'<center><br><table width="100%" border="0" class="footable">
			  		<thead>
			  			<tr id="fondo_tabla" height="30px">
							<td colspan="2"><center><label id="titulo_tabla">Extra Ordinario 1</label></center></td>
							<td colspan="2"><center><label id="titulo_tabla">Extra Ordinario 2</label></center></td>
							<td colspan="2"><center><label id="titulo_tabla">Extra Ordinario 3</label></center></td>
							
						</tr>
					</thead>
						<tr>';
			  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra1'>"; 
			  					echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($EXTRA1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
			 echo"<td><center><label class='etiquetita2'><input type='date' value='".$EXTRAFECHA1."' name='extrafecha1'></label></center></td>";
			  			 
}else 
if(	($CA1<65 && $CA1>50) || 
	($CA2<65 && $CA2>50) || 
	($CA3<65 && $CA3>50) ||  
	($CA4<65 && $CA4>50) ||  
	
    ($CP1>0 && $CP1<6) || 
    ($CP2>0 && $CP2<6) || 
    ($CP3>0 && $CP3<6) ||   
    ($CP4>0 && $CP4<6)
	)
{
			  echo'<center><br><table width="100%" border="0" class="footable">
			  			<thead>
						<tr id="fondo_tabla" height="30px">
							<td colspan="2"><center><label id="titulo_tabla">Extra Ordinario 1</label></center></td>
							<td colspan="2"><center><label id="titulo_tabla">Extra Ordinario 2</label></center></td>
							<td colspan="2"><center><label id="titulo_tabla">Extra Ordinario 3</label></center></td>
							
						</tr>
						</thead>
						<tr>';
			  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra1'>"; 
			  					echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($EXTRA1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
			 echo"<td><center><label class='etiquetita2'><input type='date' value='".$EXTRAFECHA1."' name='extrafecha1'></label></center></td>";
			  
			  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra2'>"; 
			  					echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($EXTRA2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
			   echo"<td><center><label class='etiquetita2'><input type='date' value='".$EXTRAFECHA2."' name='extrafecha2'></label></center></td>";
			  
			 
}else 
if(	($CA1<85 && $CA1>65) || 
	($CA2<85 && $CA2>65) || 
	($CA3<85 && $CA3>65) ||  
	($CA4<85 && $CA4>65) ||  
	
    ($CP1>0 && $CP1<6) || 
    ($CP2>0 && $CP2<6) || 
    ($CP3>0 && $CP3<6) ||   
    ($CP4>0 && $CP4<6)
	)
{
	  echo'<center><br><table width="100%" border="0" class="footable"> 
	  					<thead>
			  			<tr id="fondo_tabla" height="30px">
							<td colspan="2"><center><label id="titulo_tabla">Extra Ordinario 1</label></center></td>
							<td colspan="2"><center><label id="titulo_tabla">Extra Ordinario 2</label></center></td>
							<td colspan="2"><center><label id="titulo_tabla">Extra Ordinario 3</label></center></td>
							
						</tr>
						</thead>
						<tr>';
			  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra1'>"; 
			  					echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($EXTRA1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
			 echo"<td><center><label class='etiquetita2'><input type='date' value='".$EXTRAFECHA1."' name='extrafecha1'></label></center></td>";
			  
			  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra2'>"; 
			  					echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($EXTRA2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
			   echo"<td><center><label class='etiquetita2'><input type='date' value='".$EXTRAFECHA2."' name='extrafecha2'></label></center></td>";
			   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra3'>"; 
			  						echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($EXTRA3==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
			  echo"<td><center><label class='etiquetita2'><input type='date' value='".$EXTRAFECHA3."' name='extrafecha3'></label></center></td>";
			  
			 echo"</tr></table><br><center>";

	
	}
								   }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////					
					}
    echo '<div><center><input type="submit" name="button" id="submit"  value="Guardar">   <input type="reset"></center></div>';		
			  }

	} 
	
?>