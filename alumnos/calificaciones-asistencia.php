
<?php 
include('validaacceso.php');
 include('header.php')?>

<div class="container"><br>
<table width="100%" border="1">
  <tr>
  	<td colspan="3" class="menu">
    	<center><label class="etiquetita">ESCUELA "ROSARIO GUTIERREZ ESKILDSEN LICENCIATURA EN EDUCACIÓN PREESCOLAR"</label></center>    
    </td>
  </tr>
  <tr>
    <td><center><label class="etiquetita">Nombre del Alumno: <?php echo $Nombre;?></label></center></td>
    <td><center><label class="etiquetita">Matricula: <?php echo $Matricula;?></label></center></td>
    <td><center><label class="etiquetita">Estatus: <?php switch ($Estatus) {
	    case 1:
			echo "Inscrito";
			break;
		case 2:
			echo "Reprobado";
			break;
		case 3:
			echo "Repetidor";
			break;
		case 4:
			echo "Baja Definitiva";
			break;
		case 5:
			echo "Baja Temporal";
			break;
		case 6:
			echo "Egrasado";
			break;
	}?></label></center></td>
  </tr>
  <tr>
  <?php 
  $con=conexion();
     $sql="select pe.PLAN_ID,pe.PLAN_NOMBRE,pe.PLAN_FECHA,pe.PLAN_SEMESTRE from alum_personas as ap,plan_estudios as pe
		 where ap.PLAN_ID=pe.PLAN_ID and ap.alum_curp='".$CURP."'";
         $res=mysql_query($sql,$con);
		 if(mysql_num_rows($res)==0){
			 echo '<b>No hay registros</b>';
		   }else{
			 while($row=mysql_fetch_array($res)){
					$plan=$row['PLAN_NOMBRE'];
					$planfecha=$row['PLAN_FECHA'];
					$plansemestre=$row['PLAN_SEMESTRE'];
				 }
			echo '<td colspan="2"><center><label class="etiquetita">Plan de Estudios: '.$plan.'</label></center></td>';
			echo '<td><center><label class="etiquetita">Fecha del Plan: '.$planfecha.'</label></center></td>';
		  }
	?>	 
  </tr>
</table>
<br>
<center>
<?php		 

$con2=conexion();

$sql2="select s.SEM_ID,s.SEM_MATERIA,s.SEM_GRADO_NUMERO,s.SEM_GRADO_LETRA 
from semestres as s,plan_estudios as p
where s.PLAN_ID=p.PLAN_ID and p.PLAN_ID=".$PlanEstudio;
		 $res2=mysql_query($sql2,$con2);
		 if(mysql_num_rows($res2)==0){
			 echo '<b>No hay registros</b>';
		   }else{
			 while($row2=mysql_fetch_array($res2)){
			
				echo'<table width="50%" border="1">
					  <tr height="40px">
						<td width="40%" class="menu"><center>';
						echo'<a href="semestral.php?curp='.$CURP.'&semestre='.$row2['SEM_GRADO_NUMERO'].'&semestre2='.$row2['SEM_GRADO_LETRA'].'" target="horarios-alumno" onclick="window.open(this.href, this.target, " width=1000, height=600, menubar=no,directories=no,location=0,resizable=no");return false;" class="submenu">Grado: '.$row2['SEM_GRADO_NUMERO']." ".$row2['SEM_GRADO_LETRA']."</a></center></td>";
						
					  echo'</tr>
					</table>';	
				  					
					
					$row2['SEM_MATERIA'];
				 }

		  }

?>                
</center>
</div>

<?php include('../footer.php')?>