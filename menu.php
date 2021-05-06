<? session_start();
  if(!isset($_SESSION['usuarioactual']))
  {
    echo"<script>alert('Inicie session');
               window.location.href=\"index.php\"</script>";      
     exit();
  }
  if($_SESSION['tipo']!="0")
  {
     echo"<script>alert('el usuario no tiene los privilegios para accesar a este sitio');
               window.location.href=\"index.php\"</script>";      
     header('location: index.php');
     exit();
  }
 ?>
 <?php
      include('conexion/conexion.php');
      $user = $_SESSION['usuarioactual'];
      $sql = mysql_query("SELECT * FROM USR_USUARIOS WHERE usr_nombre =  '".$user."'",$link);      
      $noregistros = mysql_num_rows($sql);      
      if($noregistros <= 0){
        echo "<script>alert('El usuario no se encuentra registrado'); window.location.href=\"index.php\"</script>";      
        exit();        
      }
      else{        
        $row = mysql_fetch_assoc($sql);        
        $Usuario = $row["usr_usuario"];
        $nombreusuario   = $row["usr_Nombre"];
        echo "Usuario: ".$Usuario."  Nombre: ".$nombreusuario;
      }
 ?>
 
<html lang="es">
<head>
  <title>Escurla Normal Preescolar - Control Escolar </title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="Sistema para Administración de Control Escolar de la Escuela Normal" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="favicon.png" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />    
</head>

<body>

  <h1> Sistema para Administración de Control Escolar de la Escuela Normal </h1>
  <a href="cerrar.php"> salir</a></td>
</body>

</html>