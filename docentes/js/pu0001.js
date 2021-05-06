function validarForm(formulario) {
	
    if(formulario.nompuesto.value.length<6) {
    formulario.nompuesto.focus(); 
    alert('No has Escrito el Nombre del Puesto!'); 
    return false; 
  }

    if(formulario.abpuesto.value.length==0) {
    formulario.abpuesto.focus();
    alert('No has Escrito una Abreviatura para el Puesto!');
    return false;
  }
  

  return true; 
}