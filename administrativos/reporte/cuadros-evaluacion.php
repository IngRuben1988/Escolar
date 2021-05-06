<?php include('../../conexion/conexion.php');
include('../../conexion/conexion2.php');

$salon=$_POST['salon'];
$materia=$_POST['materia'];

header("Content-type: image/jpg");
header('Content-type: image/png');

header('Content-type: application/vnd.ms-excel');
header ("Content-Type: multipart/mixed; boundary=outer"); 
header ("Content-Description: multipart-1"); 

header("Content-Disposition: attachment; filename=nombre_del_archivo.xls");
header("Pragma: no-cache");
header("Expires: 0");

$con=conexion();
$sql='select*from consulta_boletas_salon where ASIG_ID='.$materia.' AND DATO_CLAVE="'.$salon.'" order by DATO_CONSECUTIVO';

$res=mysql_query($sql,$con);
if(mysql_num_rows($res)==0){
	   echo '<b>No hay registros</b>';
	   }else{
/**********************************************************/
	$sql2='select*from consulta_boletas_salon where ASIG_ID='.$materia.' AND DATO_CLAVE="'.$salon.'"';
	$res2=mysql_query($sql2,$con);
	if(mysql_num_rows($res2)==0){
		   echo '<b>No hay registros</b>';
		   }else{	   
		while($row2=mysql_fetch_array($res2)){
		$UNIDAD=$row2['ASIG_UNIDAD'];
		$CURSO=	$row2['ASIG_NOMBRE'];
		$GRADO=	$row2['SEM_GRADO_NUMERO'];
		$GRUPO=	$row2['GRUPO_NOMBRE'];   
		}}
/**********************************************************/
echo '
<div>
<div><img src="http://localhost/normal/img/logo.fw.png" width="',47+321+(($UNIDAD+1)*33)+(($UNIDAD+2)*33),'" heigth="250">
</div>
<br><br><br><br><br><br><br>		

	    <div><center><h3>NOMBRE DEL CURSO: '.utf8_decode($CURSO).'</h3></center></td>

		<div><center><h4>CICLO ESCOLAR: '.'     SEMESTRE: "'.utf8_decode($GRADO).'"     GRUPO:"'.utf8_decode($GRUPO).'"</h4></center></div>

</div>
<br>';
echo '
<table cellspacing="1" cellpadding="0" border="1">
 <tr>
     <th rowspan="3" width="47"><div>NUM</div><div>PROG.</div></th>
	 <th rowspan="3" width="321"><center>NOMBRE DEL ALUMNO</center></th>
	 <th colspan="',$UNIDAD+1,'" rowspan="2" width="',($UNIDAD+1)*33,'"><center>% DE ASISTENCIA  POR UNIDAD</center></th>
	 <th colspan="',$UNIDAD+2,'" rowspan="2" width="',($UNIDAD+2)*33,'"><center>EVALUACION POR UNIDAD</center></th>
 </tr>
   <tr></tr>
   
   
 <tr>';
  
	 for ($i=1; $i<=$UNIDAD; $i++)
	 {
		 echo'<th width="33"><center>'.$i.'</center></th>';
	 }
	 echo'<th width="33"><center>%G</center></th>';

	 for ($i=1; $i<=$UNIDAD; $i++)
	 {
		 echo'<th width="33"><center>'.$i.'</center></th>';
	 }
	 echo'<th width="33"><center>E.F</center></th>';
	 echo'<th width="33"><center>R.G</center></th>';
	 
echo '</tr>';
/**********************************************************/
	   while($row=mysql_fetch_array($res)){
	
 echo '<tr>';
	 echo '<td><h4>'.utf8_decode($row['DATO_CONSECUTIVO']).'</h4></td>';
	 echo '<td><h3>'.utf8_decode($row['Nombre']).'</h3></td>';
	 
	  	 for ($i=1; $i<=$UNIDAD; $i++)
	 {
		 echo '<td><center><h4>'.utf8_decode($row['CALIF_ASISTENCIA'.$i]).'</h4></center></td>';
	 }
	 echo '<td><center><h4>'.utf8_decode($row['CALIF_ASISTENCIA_FINAL']).'</h4></center></td>';

	  	 for ($i=1; $i<=$UNIDAD; $i++)
	 {
		 echo '<td><center><h4>'.utf8_decode($row['CALIF_PARCIAL'.$i]).'</h4></center></td>';
	 }
     echo '<td><center><h4>'.utf8_decode($row['CALIF_EXAMEN_FINAL']).'</h4></center></td>';
	 echo '<td><center><h4>'.utf8_decode($row['CALIF_GLOBAL']).'</h4></center></td>';
	 
 echo '</tr>';
   }
/**********************************************************/
   
 echo'</table>';
}

?>   