function validarForm(formulario) {
	
    if(formulario.id.value==0) { 
    formulario.id.focus();
    alert('Introduca su Usuario!'); 
    return false;
  }
  
    if(formulario.contrasena.value==0) { 
    formulario.contrasena.focus();  
    alert('Introduca su Contraseña!'); 
    return false;
  }
  

 
  return true;
}