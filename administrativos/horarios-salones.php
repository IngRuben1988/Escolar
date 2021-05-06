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

           
                <div class="col-xs-2 col-md-2" align="right" >
                	<img src="../img/Escudo_Normal_Preescolar2.fw.png" width="80%" height="80%">
                </div>
               
                <div class="col-xs-5 col-md-6" align="left">
                   
            			<img src="../img/escuela.fw.png" width="70%" height="60%">
                    </div>

                <div class="col-xs-5 col-md-4" align="right">
                <img src="img/graficos2.png" width="80%" height="80%" ALIGN="left">'
                </div>
     	</div>
		
     </header>
<form method="post" action="zeta_x0001.php" name="Horarios" onSubmit="return HorariosSalones(this);">
<?php 
$materia=$_GET['materia'];
$dia=$_GET['dia'];
$con=conexion();
?>
<br>
<div class="container">
<center>
<input type="hidden" name="hormateria" value="<?php echo $materia?>"/>
<input type="hidden" name="hordia" value="<?php echo $dia?>"/>

<center><label id="titulo_tabla">Seleccione Un Ciclo Escolar</label>
<label class="etiquetita">
<select class="cajita form-control" name="horciclo" id="horciclos" onChange="return HorarioSalones(this);">
			<option>Seleccione...</option>
<?php 
	$sql="select*from periodos order by PER_FECHA_INI DESC";
	$res=mysql_query($sql,$con);
	if(mysql_num_rows($res)==0){echo "No Hay Ciclos Escolares Disponibles";}else
	{ 
	   while($row=mysql_fetch_array($res)){
		echo "<option value='".$row['PER_ID']."'>".$row['PER_FECHA_INI']." - ".$row['PER_FECHA_FIN']."</option>";		
		}
	}
?>
</select></label></center>
<br>
<table width="100%" border="1">
  <tr id="fondo_tabla" height="30px">
    <td width="20%"><center><label id="titulo_tabla">Materia</label></center></td>
    <td width="10%"><center><label id="titulo_tabla">Día</label></center></td>
    <td width="20%"><center><label id="titulo_tabla">Docente</label></center></td>
    <td width="15%"><center><label id="titulo_tabla">Salon</label></center></td>
    <td width="15%"><center><label id="titulo_tabla">Hora Inicio</label></center></td>
    <td width="15%"><center><label id="titulo_tabla">Hora Fin</label></center></td>
  </tr>
  <tr height="80px">
    <td><center><label class="etiquetita"><?php 
	
	$sql="select*from materias where ASIG_ID=".$materia;
	$res=mysql_query($sql,$con);
	if(mysql_num_rows($res)==0){echo "No Hay Materias Disponibles";}else
	{ 
	   while($row=mysql_fetch_array($res)){
		echo $row['ASIG_NOMBRE'];		
		}
	}
	?></label></center></td>
    <td><center><label class="etiquetita"><?php echo $dia;?></label></center></td>
    
    <td><center><label class="etiquetita"><select name="hordocente" id="hordocentes" class="cajita form-control">
    <option >Seleccione...</option>
	<?php 	
	$sql="select*from doc_personas where DOC_LABORA=1";
	$res=mysql_query($sql,$con);
	if(mysql_num_rows($res)==0){echo "No Hay Maestros Disponibles";}else
	{ 
	   while($row=mysql_fetch_array($res)){
		echo "<option value='".$row['DOC_CURP']."'>".$row['DOC_NOMBRE']." ".$row['DOC_PATERNO']." ".$row['DOC_PATERNO']."</option>";		
		}
	} ?></select></label></center></td>
    <td><center><label class="etiquetita"><div id="hor"></div></label></center></td>
    <td><center><label class="etiquetita"><select name="horhora1" id="horhora1" class="cajita form-control">
    <option>Seleccione...</option>
	<option>Sin Clases</option>
	<?php 	
	$sql="select*from horarios order by HOR_HORA";
	$res=mysql_query($sql,$con);
	if(mysql_num_rows($res)==0){echo "No Hay Horas Disponibles";}else
	{ 
	   while($row=mysql_fetch_array($res)){
		echo "<option value='".$row['HOR_HORA']."'>".$row['HOR_HORA']."</option>";		
		}
	} ?></select></label></center></td>
    
    <td><center><label class="etiquetita"><select name="horhora2" id="horhora2" class="cajita form-control">
    <option>Seleccione...</option>
	<option>Sin Clases</option>
	<?php 	
	$sql="select*from horarios order by HOR_HORA";
	$res=mysql_query($sql,$con);
	if(mysql_num_rows($res)==0){echo "No Hay Horas Disponibles";}else
	{ 
	   while($row=mysql_fetch_array($res)){
		echo "<option value='".$row['HOR_HORA']."'>".$row['HOR_HORA']."</option>";		
		}
	} ?></select></label></center></td>
  </tr>
</table>
</center>
</div>
<br>
<div class="container">
  <center>
	<table width="30%" border="1">
    	 <tr id="fondo_tabla" height="30px">
         	<td><center><label id="titulo_tabla">Guardar</label></center></td>
            <td><center><label id="titulo_tabla">Restablecer</label></center></td>
         </tr>
         <tr height="60px">
         	<td><center><input type="submit" value="Guardar"/></center></td>
            <td><center><input type="reset" value="Limpiar"/></center></td>
         </tr>
    </table>
  </center>
</div>
</form>
<?php include('footer.php')?>