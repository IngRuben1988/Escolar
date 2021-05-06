<?php  
    session_start();

    if(isset($_SESSION["usuario"])) 
    {
        $usr = $_SESSION["usuario"];            
        $sql = "SELECT * FROM usr_nombre WHERE usr_Usuario = '".$usr."'";

        $myclave = mysql_query($sql,$link);
        $nmyclave = mysql_num_rows($myclave);
        if($nmyclave != 0){
            $idUsuario = mysql_result($myclave,0,0);       //   usr_Usuario
            $nombreUsuario = mysql_result($myclave,0,2);   //   usr_Nombre
            $tipousuario = mysql_result($myclave,0,3);     //   usr_TipoUsuario
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

