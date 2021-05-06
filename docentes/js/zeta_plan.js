
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
 
 
 

function guardarCurricula(){
  divResultado = document.getElementById('mensaje');
  s=document.pec.planessemestre.value;
  m=document.pec.planesmateria.value;
  p=document.pec.planes.value;
  
  ajax=objetoAjax();
  ajax.open("POST", "zeta_x0001.php",true);
  ajax.onreadystatechange=function() {
  	if (ajax.readyState==4) {
		divResultado.innerHTML = ajax.responseText
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
if (s=="Seleccione..."){
	alert('Seleccione un Semestre');
	document.pec.planessemestre.focus();
}else if (m=="Seleccione..."){
	alert('Seleccione una Materia');
	document.pec.planesmateria.focus();
}else if (p=="Seleccione..."){
	alert('Seleccione un Plan de Estudios');
	document.pec.planes.focus();
}else{
ajax.send(
  "planessemestre="+s+"&planesmateria="+m+"&planes="+p  );
 alert('El Registro a sido Guardado');
 
}
}
function LimpiarCampos(){
document.pec.planessemestre.value="Seleccione...";
document.pec.planesmateria.value="Seleccione...";
document.pec.planes.value="Seleccione...";
document.pec.planessemestre.focus();
}







/*****************************************************/
//funciones para guardar materias del plan de estudios
function guardarMateria(){
	
  divResultado = document.getElementById('mensaje');
  
  materia=document.materias.matmateria.value;
  matricula=document.materias.matmatricula.value;
  clacificacion=document.materias.matcalsificacion.value;
  horas=document.materias.mathoras.value;
  matlink=document.materias.matlink.value;
  orden=document.materias.matorden.value;
  creditos=document.materias.matcreditos.value;
  semestre=document.materias.matsemestre.value;
  
  ajax=objetoAjax();
  ajax.open("POST", "zeta_x0001.php",true);
  ajax.onreadystatechange=function() {
  	if (ajax.readyState==4) {
		divResultado.innerHTML = ajax.responseText
		LimpiarCamposMaterias();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
if (materia==""){
	alert('Agrege un Nombre ala Nueva Materia');
	document.materias.matmateria.focus();
}else
if (matricula==""){
	alert('Agrege una Matricula ala Nueva Materia');
	document.materias.matmatricula.focus();
}else
if (clacificacion=="Seleccione..."){
	alert('Agrege un Clacificacion ala Nueva Materia');
	document.materias.matcalsificacion.focus();
}else
if (horas==""){
	alert('Agrege las Horas que Abarca la Nueva Materia');
	document.materias.mathoras.focus();
}else
if (matlink==""){
	alert('Agrege un Link/Enlace Web ala Nueva Materia');
	document.materias.matlink.focus();
}else
if (orden==""){
	alert('Agrege un Orden ala Nueva Materia');
	document.materias.matorden.focus();
}else
if (creditos==""){
	alert('Agrege los Creditos ala Nueva Materia');
	document.materias.matcreditos.focus();
}else
if (semestre=="Seleccione..."){
	alert('Agrege un Semestre al Cual Pertenesca la Nueva Materia');
	document.materias.matsemestre.focus();
}else{
ajax.send(

  "matmateria="+materia+"&matmatricula="+matricula+"&matcalsificacion="+clacificacion+
  "&mathoras="+horas+"&matlink="+matlink+"&matorden="+orden+"&matcreditos="+creditos+"&matsemestre="+semestre  );
  alert('El Registro a sido Guardado');
 

}
}
function LimpiarCamposMaterias(){

document.materias.matmateria.value="";
document.materias.matmatricula.value="";
document.materias.matcalsificacion.value="Seleccion...";
document.materias.mathoras.value="";
document.materias.matlink.value="";
document.materias.matorden.value="";
document.materias.matcreditos.value="";
document.materias.matsemestre.value="Seleccione...";

document.materias.matmateria.focus();
}



/*******************************************************/
//funciuon para guardar semestres

function guardarSemestres(){
 
divResultado = document.getElementById('mensaje');

  plan=document.semestres.semestreplan.value;
  numero=document.semestres.semestrenumero.value;
  letra=document.semestres.semestreletra.value;
  materia=document.semestres.semestremat.value;
  
  ajax=objetoAjax();
  ajax.open("POST", "zeta_x0001.php",true);
  ajax.onreadystatechange=function() {
  	if (ajax.readyState==4) {
		divResultado.innerHTML = ajax.responseText
		LimpiarCamposSemestre();
	}
 }

ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
if (plan==""){alert('Seleccione un Plan de Estudios')}else
if (numero==""){alert('Inserte un Grado en Numero al Nuevo Semestre')}else
if (letra==""){alert('Inserte un Grado en Letra al Nuevo Semestre')}else
if (materia==""){
	alert('Inserte el Numero de Materias para el Nuevo Semestre');
}else{
ajax.send(


  "semestreplan="+plan+"&semestrenumero="+numero+"&semestreletra="+letra+"&semestremat="+materia  );
  alert('El Registro a sido Guardado');
 
}
}
function LimpiarCamposSemestre(){
document.semestres.semestreplan.value="";
document.semestres.semestrenumero.value="";
document.semestres.semestreletra.value="";
document.semestres.semestremat.value="";

document.semestres.semestreplan.focus();
}




