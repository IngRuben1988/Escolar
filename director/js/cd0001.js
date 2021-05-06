function validarForm(formulario) {
	
    if(formulario.busquedaalum.value.length<13) {
    formulario.busquedaalum.focus();
    alert('No has Escrito una Matricula Valida!');
    return false;
  }

    if(formulario.plan.value.length==13) {
    formulario.plan.focus();
    alert('Seleccione un Plan de Estudios!'); 
    return false;
  }
  
    if(formulario.semestre.value.length==13) {
    formulario.semestre.focus();
    alert('Seleccione un Semestre!'); 
    return false; 
  }
   if(formulario.grupo.value.length==13) { 
    formulario.grupo.focus(); 
    alert('Seleccione el Grupo!');
    return false;
  }

  return true;
}