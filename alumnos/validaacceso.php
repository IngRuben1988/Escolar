<?php  
    @session_start();
    include('../conexion/conexion.php');
    if(isset($_SESSION["usuario"])) 
    {
        $usr = $_SESSION["usuario"];            
        $sql = "select usr.USR_USUARIO,usr.USR_PASSWORD,usr.USR_NOMBRE,usr.ALUM_CURP,usr.DOC_CURP,usr.SEC_CURP,usr.USR_TIPOUSUARIO,
				p.ALUM_MATRICULA,concat(p.ALUM_NOMBRE,' ',p.ALUM_PATERNO,' ',p.ALUM_MATERNO)as nombre,p.ALUM_CURP,p.EST_ID,p.PLAN_ID
				
				from usr_usuarios as usr,alum_personas as p
				where
				usr.ALUM_CURP=p.ALUM_CURP and usr.USR_USUARIO='".$usr."'";

        $myclave = mysql_query($sql,$link);
        $nmyclave = mysql_num_rows($myclave);
        if($nmyclave != 0){
            $idUsuario = mysql_result($myclave,0,0);       //   usr_Usuario
            $nombreUsuario = mysql_result($myclave,0,2);   //   usr_Nombre
            $tipousuario = mysql_result($myclave,0,6);     //   usr_TipoUsuario
			$Matricula = mysql_result($myclave,0,7);     //   usrCombre Completo
			$Nombre = mysql_result($myclave,0,8);     //   usrCombre Completo
			$CURP = mysql_result($myclave,0,9);     //   usrCombre Completo
			$Estatus = mysql_result($myclave,0,10);     //   estatus del Alumno
			$PlanEstudio = mysql_result($myclave,0,11);     //   Plan Al que pertenece
			if ($tipousuario<>3){
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

