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
                <a><img src="img/controlescolar.fw.png" width="80%" height="60%" ></a>
                </div>
     	</div>
		
     </header>
<div class="menu">
    <div class="container">
                        
                            <div class="col-xs-12 col-md-9">
                                <label class="submenu">Usuario:</label>
                                <label class="submenu"><?php echo $Nombre;?></label>
                            </div>   
                            <div class="col-xs-6 col-md-1 ">
                            	<center><a class="submenu" href="index.php">Inicio</a></center>
                            </div> 
                            <div class="col-xs-6 col-md-2 ">
                           		<center><a class="submenu" href="../cerrar.php">Salir</a></center>
                            </div>
                    

    </div>
</div>

