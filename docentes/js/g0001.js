function validarFormGrupos(formulario) {
	
    if(formulario.gruponombre.value==0) {
    formulario.gruponombre.focus();
    alert('No ha Escrito un Nombre O un Identeficador para el Grupo!'); 
    return false;
  }

    if(formulario.periodogrupo.value.length==13) {
    formulario.periodogrupo.focus();
    alert('No ha Seleccionado un Periodo Para el Grupo!');
    return false;
  }
  
 
  return true;
}