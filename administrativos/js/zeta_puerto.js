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


function guardarPuerto(){
  divResultado = document.getElementById('mensaje');
  par =document.puertos.parcial.value;
  aper=document.puertos.apertura.value;
  clau=document.puertos.clausura.value;
  ajax=objetoAjax();
 
  ajax.open("POST", "zeta_x0001.php",true);
 
  ajax.onreadystatechange=function() {
  	if (ajax.readyState==4) {
		divResultado.innerHTML = ajax.responseText
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
if (par=="0"){
	alert('Seleccione un Parcial');
	
}else if (aper==""){
	alert('Seleccione una fecha de Apertura');

}else if (clau==""){
	alert('Seleccione una fecha de Clausura');

}else{
ajax.send("parcial="+par+"&apertura="+aper+"&clausura="+clau );
	alert('El Registro a sido Guardado');
 
}
}
function LimpiarCampos(){
document.puertos.parcial.value="0";
document.puertos.apertura.value="";
document.puertos.clausura.value="";
document.puertos.parcial.focus();
} 







