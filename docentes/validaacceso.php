<?php  
	@session_start();
 include('../conexion/conexion.php');
   if(isset($_SESSION["usuario"])) 
    {
        $usr = $_SESSION["usuario"];            
        $sql = "select usr.USR_USUARIO,usr.USR_PASSWORD,usr.USR_NOMBRE,usr.ALUM_CURP,usr.DOC_CURP,usr.SEC_CURP,usr.USR_TIPOUSUARIO,
				p.DOC_MATRICULA,concat(p.DOC_NOMBRE,' ',p.DOC_PATERNO,' ',p.DOC_MATERNO)as nombre
				
				from usr_usuarios as usr,doc_personas as p
				where
				usr.DOC_CURP=p.DOC_CURP and usr.USR_USUARIO='".$usr."'";

        $myclave = mysql_query($sql,$link);
        $nmyclave = mysql_num_rows($myclave);
        if($nmyclave != 0){
            $idUsuario = mysql_result($myclave,0,0);       //   usr_Usuario
            $nombreUsuario = mysql_result($myclave,0,2);   //   usr_Nombre
			$CURP = mysql_result($myclave,0,4);   //   usr_Nombre
            $tipousuario = mysql_result($myclave,0,6);     //   usr_TipoUsuario
			$Nombre = mysql_result($myclave,0,8);     //   usrCombre Completo
			if ($tipousuario<>2){
				echo" <script>
				alert('No Tiene Permiso Para Ingresar A Este Modulo');
				window.location.href='../index.php';
				</script>";
                exit();
				}
        }
        else{
            header('Location: ../index.php'); 
            exit();     
        }
    }
    else
    {
        header('Location: ../index.php'); 
        exit();
    }        
?>