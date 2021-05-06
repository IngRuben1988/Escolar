<?php include('validaacceso.php');?>
<?php 
function Pagina(){

include('../header.php');

$valor=$_get["sec"];

switch($valor){
	case 1:
     include('alumno.php');
	 echo" pagina alumno";
   break;
   
	case 2:
      include('profesor.php');
	break;	
	
	
	case 3:
     include('administrativo.php');
	 echo" pagina alumno";
   break;

   case 4:
     include('plan-estudios.php');
	 echo" pagina alumno";
   break;
	}
	
include('../footer.php');	
	
echo "<a href='alumno.php?variablePorURL=".$variablePorURL."' target='tuArchivo' onclick=\"window.open(this.href, this.target, ' width=1000, height=800, menubar=no');return false;\"> Contrato </a>";
}
?>