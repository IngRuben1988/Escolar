function validarFormPlan(formulario) {
	
    if(formulario.anio.value.length<4) {
    formulario.anio.focus();
    alert('No has Escrito un año valido!');
    return false;
  }

    if(formulario.semestre.value.length==0) { 
    formulario.semestre.focus();
    alert('Coloque la cantidad de Semestres que Tendra su Plan de Estusdios!');
    return false;
  }
  
    if(formulario.carrera.value.length==0) {
    formulario.carrera.focus();
    alert('No ha Escrito el Nombre de la Carrera!');
    return false;
  }

  return true;
}