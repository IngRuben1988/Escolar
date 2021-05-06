<?php ?>
<!doctype html>

<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>SAEN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.css">
    <link href="css/Hoja_formaulario.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/Escudo_Normal_Preescolar.ico"> 
    <script language="javascript" type="text/javascript" src="js/Validador.js"></script>

</head>

<body class="fondocuerpo">


<body oncontextmenu="return false">
<br/>
<br/>
<br/>
<div class="container" align="center">
<section class="main">

  <form method="post" action="control.php" class="formulaire" onSubmit="retun validarForm(this);">       
  <div class="container">
  		<div><center><img src="img/Escudo_Normal_Preescolar.fw.png" width="30%" height="30%"></center></div>
        <br/>
  		<div class="col-xs-12 col-md-12">
        		<div><center><label class="etiquetita">Control de Acceso</label></center></div>
                <br/>
        </div>

        <div class="col-md-4"></div>
        <div class="col-xs-12 col-md-4">
            <center><input name="id" type="text" placeholder="Introduzca su Matricula" class="cajita form-control"></center>
        </div>
        
        <div class="col-xs-12 col-md-12"><br/></div>
            
         <div class="col-md-4"></div>
         <div class="col-xs-12 col-md-4">
            <center><input name="contrasena" type="password" placeholder="Introduzca su Contraseña" class="cajita form-control"></center>
            <br/>
         </div>
         <div class="col-xs-4 col-md-4"></div>
            <br/> 
  
       
              
           
         <div class="col-xs-12 col-md-12">
         		<center><input type="submit" name="button" id="button" value="ingresar"></center>
         </div>
  </div>
  </form>

</section>
</div>

<?php 
include('administrativos/footer.php')
?>