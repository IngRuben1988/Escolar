
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 
 
function AlumnoGrupo(){
  divResultado = document.getElementById('mensaje');
  cg=document.alumnosgrupos.datoclave.value;
  cvg=document.alumnosgrupos.consecutivo.value;
  mg=document.alumnosgrupos.matriculagrupo.value;
  
  ajax=objetoAjax();
  ajax.open("POST", "zeta_x0002.php",true);
  ajax.onreadystatechange=function() {
  	if (ajax.readyState==4) {
		divResultado.innerHTML = ajax.responseText
		BuscarGrupos();
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

if (cvg=="Seleccione..."){
	alert('Seleccione un Numero Consecutivo');
	document.alumnosgrupos.consecutivo.focus();
}else if (mg==""){
	alert('Escriba una Matricula Aceptable');
	document.alumnosgrupos.matriculagrupo.focus();
}else{
ajax.send(
  "consecutivo="+cvg+"&datoclave="+cg+"&matriculagrupo="+mg  );
 alert('El Registro a sido Guardado');
 
}
}
function LimpiarCampos(){
document.alumnosgrupos.matriculass.value="";
document.alumnosgrupos.matriculagrupo.value="";
document.alumnosgrupos.matriculass.focus();


 
}
