function validarForm(formulario) {
	
    if(formulario.estestatus.value==0) {
    formulario.estestatus.focus();
    alert('No has Escrito un Nombre para Estatus!');
    return false;
  }
  
 
  return true;
}

