function validarForm(formulario) {
	
    if(formulario.documento.value==0) { 
    formulario.documento.focus();
    alert('No ha Escrito el Nuevo Nombre para este Documento!'); 
    return false;
  }
 
  return true;
}