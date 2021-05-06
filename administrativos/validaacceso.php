
<?php
include('../conexion/conexion.php'); 
    @session_start();

    if(isset($_SESSION["usuario"])) 
    {
        $usr = $_SESSION["usuario"];            
        $sql = "select usr.USR_USUARIO,usr.USR_PASSWORD,usr.USR_NOMBRE,usr.ALUM_CURP,usr.DOC_CURP,usr.SEC_CURP,usr.USR_TIPOUSUARIO,
				p.SEC_MATRICULA,concat(p.SEC_NOMBRE,' ',p.SEC_PATERNO,' ',p.SEC_MATERNO)as nombre ,p.SEC_CURP
				
				from usr_usuarios as usr,sec_personas as p
				where
				usr.SEC_CURP=p.SEC_CURP and usr.USR_USUARIO='".$usr."'";

        $myclave = mysql_query($sql,$link);
        $nmyclave = mysql_num_rows($myclave);
        if($nmyclave != 0){
            $idUsuario = mysql_result($myclave,0,0);       //   usr_Usuario
            $nombreUsuario = mysql_result($myclave,0,2);   //   usr_Nombre
            $tipousuario = mysql_result($myclave,0,6);     //   usr_TipoUsuario
			$Matricula = mysql_result($myclave,0,7);     //   curp Completo
			$Nombre = mysql_result($myclave,0,8);     //   usrCombre Completo
			$CURP= mysql_result($myclave,0,9);     //   usrCURP Completo
			
			if ($tipousuario<>1){
				echo" <script>
				alert('No Tiene Permiso Para Ingresar A Este Modulo');
				window.location.href='../index.php';
				</script>";
                exit();
				}
		}
		 else{
				echo" <script>
				alert('No Tiene Permiso Para Ingresar A Este Modulo');
				window.location.href='../index.php';
				</script>"; 
            exit();     
        }
		
    }
    else
    {
				echo" <script>
				alert('No Tiene Permiso Para Ingresar A Este Modulo');
				window.location.href='../index.php';
				</script>";
        exit();
    }         
?>

