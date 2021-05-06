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
              <div class="col-xs-3 col-md-2" align="right"><a>
                	<img src="../img/Escudo_Normal_Preescolar2.fw.png" width="80%" height="60%"></a>
                </div>
               
                <div class="col-xs-4 col-md-3" align="left">
                   
            			<img src="../img/escuela.fw.png" width="100%" height="80%">
                    </div>
				<div class="col-md-4" align="left"></div>
                
                <div class="col-xs-3 col-md-2" align="right">
                <a><img src="img/controlescolar.fw.png" width="80%" height="60%"></a>
                </div>
     	</div>
		
     </header>
<form method="post" action="reporte/cuadros-evaluacion.php" >
<div class="container">
<br>
	<div class="col-xs-12 col-md-6 col-lg-6">
       <center>
       <div><label>Materias</label></div>
       <div><label><select class="form-control" name="materia">
        <?php
			 $salon=$_GET['salon'];
	         $semestre=$_GET['semestre'];
	 
        echo '<option>Seleccione..</option>';
		$con=conexion();
		$sql='select * from materias where ID_SEM='.$semestre;
		 $res=mysql_query($sql,$con);
					  if(mysql_num_rows($res)==0){
					   }else{
						 while($row=mysql_fetch_array($res)){

					echo "<option value=".$row['ASIG_ID'].">".$row['ASIG_NOMBRE']."</option>";
				
				  }
					   }
        echo '<option value="todo">Todas las Materias</option>';
        ?>
        </select></label></div>
        <div><input type="hidden" name="salon" value="<?php echo $salon;?>"></div>
        </center>
        
    </div>
  
    <div class="col-xs-12 col-md-6 col-lg-6">
    	<center>
        <div><label>Opciones</label></div>
        <div><input type="submit" value="Imprimir"/> <input type="reset" value="Borrar Opciones"/></div>
        </center>
    </div>
</div>
</form>