<?php



function evaluar($s,$d,$c1,$c2,$c3,$c4,$c5,$c6,$a1,$a2,$a3,$a4,$a5,$a6,$ef){ 

$con33=conexion();
$sql33="select*from puertos where CURRENT_DATE()>=fecha_apertura and CURRENT_DATE()<=fecha_clausura";

$res33=mysql_query($sql33,$con33);
if(mysql_num_rows($res33)==0){
		
		   }else{
		 while($row33=mysql_fetch_array($res33)){

	$parcial=$row33['PARCIAL'];
	$materia=$row33['ASIG_ID'];
	$ciclo=$row33['PER_ID'];
	$apertura=$row33['FECHA_APERTURA'];
	$clausura=$row33['FECHA_CLAUSURA'];

  }

}

	if($s==1){
								  if($parcial=="Unidad 1"){
								  /////////////////////////////////////////
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  /////////////////////////////////////////
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>"; 
								  echo'<option>0</option>';
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  }
								  echo"</select></label></center></td>";
								  /////////////////////////////////////////
								   }else{
									
										 echo'<td><center><label class="etiquetita">'.$a1.'%</label></center>
										 <input type="hidden" name="asistencia1" value="'.$a1.'"></td>';
										 echo'<td><center><label class="etiquetita">'.$c1.'</label></center>
										 <input type="hidden" name="parcial1" value="'.$c1.'"></td>';
										 }
								/////////////////////////////
								}else
									  
									  
	if($s==2){
									if($parcial=="Unidad 1"){
								  /////////////////////////////////////////
    							  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 								
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
									}else{echo'<td><center><label class="etiquetita">'.$a1.'%</label></center>
									<input type="hidden" name="asistencia1" value="'.$a1.'"></td>';}
								  
								  if($parcial=="Unidad 2"){
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia2'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a2==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  }else{echo'<td><center><label class="etiquetita">'.$a2.'%</label></center>
								  <input type="hidden" name="asistencia2" value="'.$a2.'"></td>';}
								  /////////////////////////////////////////
								  
								  if($parcial=="Unidad 1"){
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>"; 
								  echo'<option>0</option>';
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  }
								  echo"</select></label></center></td>";
								  }else{echo'<td><center><label class="etiquetita">'.$c1.'</label></center>
								  <input type="hidden" name="parcial1" value="'.$c1.'"></td>';} 
								  
								  if($parcial=="Unidad 2"){
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial2'>"; 
								  echo'<option>0</option>';
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  }else{echo'<td><center><label class="etiquetita">'.$c2.'</label></center>
								  <input type="hidden" name="parcial2" value="'.$c2.'"></td>';}
								  /////////////////////////////////////								
								  
								      }else 
									  
	if($s==3){
									if($parcial=="Unidad 1"){
								  /////////////////////////////////////////
  							     echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$a1.'%</label></center>
								  <input type="hidden" name="asistencia1" value="'.$a1.'"></td>';}
								  
								  if($parcial=="Unidad 2"){							  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia2'>"; 								                                  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a2==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$a2.'%</label></center>
								  <input type="hidden" name="asistencia2" value="'.$a2.'"></td>';}
								  
								  if($parcial=="Unidad 3"){
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia3'>"; 								                                  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a3==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";}
								   else{echo'<td><center><label class="etiquetita">'.$a3.'%</label></center>
								   <input type="hidden" name="asistencia3" value="'.$a3.'"></td>';}
								  ////////////////////////////////////////
								  
								  if($parcial=="Unidad 1"){
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>"; 
								  echo'<option>0</option>';
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$c1.'</label></center>
								  <input type="hidden" name="parcial1" value="'.$c1.'"></td>';}
								  
								  if($parcial=="Unidad 2"){
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial2'>";
								   echo'<option>0</option>'; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$c2.'</label></center>
								  <input type="hidden" name="parcial2" value="'.$c2.'"></td>';}
								  
								  if($parcial=="Unidad 3"){
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial3'>"; 
								   echo'<option>0</option>';
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c3==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$c3.'</label></center>
								  <input type="hidden" name="parcial3" value="'.$c3.'"></td>';}								  
								  /////////////////////////////////////////
								  
								      }else
	if($s==4){
								  /////////////////////////////////////////			  
								  
							      if($parcial=="Unidad 1"){
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>"	;}
								  else{echo'<td><center><label class="etiquetita">'.$a1.'%</label></center>
								  <input type="hidden" name="asistencia1" value="'.$a1.'"></td>';}	
								  			  								  
								  if($parcial=="Unidad 2"){
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia2'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a2==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  }
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$a2.'%</label></center>
								  <input type="hidden" name="asistencia2" value="'.$a2.'"></td>';}	
								  
								  if($parcial=="Unidad 3"){
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia3'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a3==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$a3.'%</label></center>
								  <input type="hidden" name="asistencia3" value="'.$a3.'"></td>';}	
								  
								  if($parcial=="Unidad 4"){
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia4'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a4==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$a4.'%</label></center>
								  <input type="hidden" name="asistencia4" value="'.$a4.'"></td>';}	
								  /////////////////////////////////////////

								  if($parcial=="Unidad 1"){
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>";
								  echo'<option>0</option>'; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$c1.'</label></center>
								  <input type="hidden" name="parcial1" value="'.$c1.'"></td>';}
								  
								  if($parcial=="Unidad 2"){
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial2'>"; 
								  echo'<option>0</option>';
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$c2.'</label></center>
								  <input type="hidden" name="parcial2" value="'.$c2.'"></td>';}
								  
								  if($parcial=="Unidad 3"){
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial3'>"; 
								  echo'<option>0</option>';
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c3==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$c3.'</label></center>
								  <input type="hidden" name="parcial3" value="'.$c3.'"></td>';}
								  
								  if($parcial=="Unidad 4"){								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial4'>";
								  echo'<option>0</option>'; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c4==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";}
								  else{echo'<td><center><label class="etiquetita">'.$c4.'</label></center>
								  <input type="hidden" name="parcial4" value="'.$c4.'"></td>';}
								  	////////////////////////////////////
									
										 					  
								      }else
									  
								////////////////////////////////////////////////	  
	if($s==5){
								  /////////////////////////////////////////
								 echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>"	;				  								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia2'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a2==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia3'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a3==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia4'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a4==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia5'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a5==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  /////////////////////////////////////////
								  
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial2'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial3'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c3==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial4'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c4==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial5'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c5==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  ////////////////////
								      }else
									  
									  ////////////////////////////////////////////////	  
	if($s==6){
								 //////////////////////////////////////////////////
								 echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia1'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a1==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>"	;				  								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia2'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a2==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia3'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a3==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia4'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a4==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia5'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a5==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='asistencia6'>"; 
								  for($i2=0;$i2<=100;$i2++){
									  echo"<option value='".$i2."'";if($a6==$i2){echo" selected='true' ";}echo" >".$i2."%</option>";
									  } 
								  echo"</select></label></center></td>";								 
								  
                                  /////////////////////////////
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial1'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial2'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial3'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c3==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial4'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c4==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";								  
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial5'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c5==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
								  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='parcial6'>"; 
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($c6==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
                                 /////////////////////////////								  								  
								 }
								 
								if($parcial=="Examen Final"){ 
								echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='cfinal'>"; 
								  for($if=5;$if<=10;$if++){
									  echo"<option value='".$if."'";if($ef==$if){echo" selected='true' ";}echo" >".$if."</option>";
									  } 
							echo"</select></label></center></td>";}
							else{echo'<td><center><label class="etiquetita">'.$ef.'</label></center>
							<input type="hidden" name="cfinal" value="'.$ef.'"></td>';}
							
if($parcial=="Examen Final" || $parcial=="parcial 1"|| $parcial=="parcial 2"|| $parcial=="parcial 3"|| $parcial=="parcial 4"|| $parcial=="Extraordinario 1"|| $parcial=="Extraordinario 2"|| $parcial=="Extraordinario 3" ){ 				
          echo '<div><br><center><input type="submit" name="button" id="submit"  value="Guardar">   <input type="reset"></center></br></div>';
			}
}

?>



<?php 
function extraordinarios($e1,$e2,$e3,$fe1,$fe2,$fe3,$ca1,$ca2,$ca3,$ca4,$cp1,$cp2,$cp3,$cp4){ 

$con33=conexion();
$sql33="select*from puertos where CURRENT_DATE()>=fecha_apertura and CURRENT_DATE()<=fecha_clausura";

$res33=mysql_query($sql33,$con33);
if(mysql_num_rows($res33)==0){
		
		   }else{
		 while($row33=mysql_fetch_array($res33)){

	$parcial=$row33['PARCIAL'];
	$materia=$row33['ASIG_ID'];
	$ciclo=$row33['PER_ID'];
	$apertura=$row33['FECHA_APERTURA'];
	$clausura=$row33['FECHA_CLAUSURA'];

  }

}


/////////////////////////////////////////
if(	(
    ($ca1>0  && $ca1<50) || 
	($ca2>0  && $ca2<50) || 
	($ca3>0  && $ca3<50) ||  
	($ca4>0  && $ca4<50)
	) || (
	($cp1>0 && $cp1<6) || 
    ($cp2>0 && $cp2<6) || 
    ($cp3>0 && $cp3<6) ||   
    ($cp4>0 && $cp4<6)
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
						if($parcial=="Extraordinario 1"){
			  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra1'>"; 
			  					echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($e1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
			 echo"<td><center><label class='etiquetita2'><input type='date' value='".$fe1."' name='extrafecha1'></label></center></td>";
						}else{
			 echo"<td><center><label class='etiquetita2'>".$e1."</label></center>
			 <input type='hidden' name='extra1' value=".$e1."></td>";
			 echo"<td><center><label class='etiquetita2'>".$fe1."</label></center>
			 <input type='hidden' value='".$fe1."' name='extrafecha1'></td>";				
							}
}else 
if(	($ca1<65 && $ca1>50) || 
	($ca2<65 && $ca2>50) || 
	($ca3<65 && $ca3>50) ||  
	($ca4<65 && $ca4>50) ||  
	
    ($cp1>0 && $cp1<6) || 
    ($cp2>0 && $cp2<6) || 
    ($cp3>0 && $cp3<6) ||   
    ($cp4>0 && $cp4<6)
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
						if($parcial=="Extraordinario 2"){
			  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra1'>"; 
			  					echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($e1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
			 echo"<td><center><label class='etiquetita2'><input type='date' value='".$fe1."' name='extrafecha1'></label></center></td>";
			  
			  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra2'>"; 
			  					echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($e2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
			   echo"<td><center><label class='etiquetita2'><input type='date' value='".$fe2."' name='extrafecha2'></label></center></td>";
			  						}else{
			 //////////////////////////////////////////////////////////////////							
			 echo"<td><center><label class='etiquetita2'>".$e1."</label></center>
			 <input type='hidden' name='extra1' value=".$e1."></td>";
			 echo"<td><center><label class='etiquetita2'>".$fe1."</label></center>
			 <input type='hidden' value='".$fe1."' name='extrafecha1'></td>";
			 //////////////////////////////////////////////////////////////////						
			echo"<td><center><label class='etiquetita2'>".$e2."</label></center>
			 <input type='hidden' name='extra2' value=".$e2."></td>";
			 echo"<td><center><label class='etiquetita2'>".$fe2."</label></center>
			 <input type='hidden' value='".$fe2."' name='extrafecha2'></td>";	
			 //////////////////////////////////////////////////////////////////			
							}
			 
}else 
if(	($ca1<85 && $ca1>65) || 
	($ca2<85 && $ca2>65) || 
	($ca3<85 && $ca3>65) ||  
	($ca4<85 && $ca4>65) ||  
	
    ($cp1>0 && $cp1<6) || 
    ($cp2>0 && $cp2<6) || 
    ($cp3>0 && $cp3<6) ||   
    ($cp4>0 && $cp4<6)
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
						if($parcial=="Extraordinario 3"){
			  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra1'>"; 
			  					echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($e1==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
			 echo"<td><center><label class='etiquetita2'><input type='date' value='".$fe1."' name='extrafecha1'></label></center></td>";
			  
			  echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra2'>"; 
			  					echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($e2==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 
								  echo"</select></label></center></td>";
			   echo"<td><center><label class='etiquetita2'><input type='date' value='".$fe2."' name='extrafecha2'></label></center></td>";
			   echo"<td><center><label class='etiquetita2'><select class='cajita form-control' name='extra3'>"; 
			  						echo "<option>0</option>";
								  for($i2=5;$i2<=10;$i2++){
									  echo"<option value='".$i2."'";if($e3==$i2){echo" selected='true' ";}echo" >".$i2."</option>";
									  } 									  
			echo"</select></label></center></td>";
			  echo"<td><center><label class='etiquetita2'><input type='date' value='".$fe3."' name='extrafecha3'></label></center></td>";
			 
			 }else{
			 //////////////////////////////////////////////////////////////////							
			 echo"<td><center><label class='etiquetita2'>".$e1."</label></center>
			 <input type='hidden' name='extra1' value=".$e1."></td>";
			 echo"<td><center><label class='etiquetita2'>".$fe1."</label></center>
			 <input type='hidden' value='".$fe1."' name='extrafecha1'></td>";
			 //////////////////////////////////////////////////////////////////						
			echo"<td><center><label class='etiquetita2'>".$e2."</label></center>
			 <input type='hidden' name='extra2' value=".$e2."></td>";
			 echo"<td><center><label class='etiquetita2'>".$fe2."</label></center>
			 <input type='hidden' value='".$fe2."' name='extrafecha2'></td>";	
			 //////////////////////////////////////////////////////////////////	
			echo"<td><center><label class='etiquetita2'>".$e3."</label></center>
			<input type='hidden' name='extra3' value=".$e3."></td>";
			echo"<td><center><label class='etiquetita2'>".$fe3."</label></center>
			<input type='hidden' value='".$fe3."' name='extrafecha3'></td>";
			 //////////////////////////////////////////////////////////////////	
			} 
			 echo"</tr></table><br><center>";

/////////////////////////////////////////

   }

}


?>