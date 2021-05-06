<?php    
     include('conexion/conexion.php');
     $myusuario = mysql_query("SELECT usr_Nombre FROM usr_usuarios WHERE usr_nombre =  '".htmlentities($_POST["id"])."'",$link) or die(mysql_error());;
     $nmyusuario = mysql_num_rows($myusuario);

     if($nmyusuario != 0){
          $sql = "SELECT usr_Usuario, usr_TipoUsuario FROM usr_usuarios WHERE usr_nombre = '".htmlentities($_POST["id"])."' and usr_Password = '".htmlentities($_POST["contrasena"])."'";
          $myclave = mysql_query($sql,$link);
          $nmyclave = mysql_num_rows($myclave);

          if($nmyclave != 0){
               session_start();
               
               $_SESSION["usuario"] = mysql_result($myclave,0,0);
               $tipo = mysql_result($myclave,0,1);

              //if($tipo == 0){ header("location:menu.php"); } // Menú Administrador 
              if($tipo == 1){ header("location:administrativos/"); }              
              if($tipo == 2){ header("location:docentes/"); } // Menú Profesor
              if($tipo == 3){ header("location:alumnos/"); } // Menú Alumno
          }
          else{
               echo"<script>alert('El Password del usuario no es correcta.');
               window.location.href=\"index.php\"</script>"; 
          }
     }else{
          echo"<script>alert('El usuario no existe.');window.location.href=\"index.php\"</script>";
     }
?>