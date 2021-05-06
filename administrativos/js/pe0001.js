function validarFormPeriodos(formulario) {
	
    if(formulario.periodoini.value==0) { 
    formulario.periodoini.focus(); 
    alert('No ha Colocado una Fecha de Inicio del Periodo Escolar!'); 
    return false;
  }

   if(formulario.periodofin.value==0) {
    formulario.periodofin.focus(); 
    alert('No ha Colocado una Fecha de Fin del Periodo Escolar!');
    return false; 
  }
 
 
  return true;
}