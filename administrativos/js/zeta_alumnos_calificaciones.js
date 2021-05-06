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

function EnviarCalificacion(){
divResultado = document.getElementById('mensaje');

dato=document.Calificaciones.califdato.value;
curp=document.Calificaciones.califcurp.value;
mat=document.Calificaciones.califmat.value;
u1=document.Calificaciones.unidad1.value;
u2=document.Calificaciones.unidad2.value;
u3=document.Calificaciones.unidad3.value;
u4=document.Calificaciones.unidad4.value;
u5=document.Calificaciones.unidad5.value;
u6=document.Calificaciones.unidad6.value;

asist1=document.Calificaciones.aistencia1.value;
asist2=document.Calificaciones.aistencia2.value;
asist3=document.Calificaciones.aistencia3.value;
asist3=document.Calificaciones.aistencia3.value;
asist4=document.Calificaciones.aistencia4.value;
asist5=document.Calificaciones.aistencia5.value;
asist6=document.Calificaciones.aistencia6.value;
  
  ajax=objetoAjax();
  ajax.open("POST", "zeta_x0002.php",true);
  ajax.onreadystatechange=function() {
  	if (ajax.readyState==4) {
		divResultado.innerHTML = ajax.responseText

	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send(
"unidad1="+u1+"&unidad2="+u2+"&unidad3="+u3+"&unidad4="+u4+"&unidad5="+u5+"&unidad6="+u6+"&aistencia1="+asist1+"&aistencia2="+asist2+"&aistencia3="+asist3+"&aistencia4="+asist4+"&aistencia5="+asist5+"&aistencia6="+asist6+"&califdato="+dato+"&califcurp="+curp+"&califmat="+mat

);
 alert('El Registro a sido Guardado');
 
}
// JavaScript Document