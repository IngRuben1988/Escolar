function validarFormSemestre(formulario) {
	
    if(formulario.semestrefin.value==0) { //¿Tiene 0 caracteres?
    formulario.semestrefin.focus();    // Damos el foco al control
    alert('No has Colocado una Fecha de Creacion del Semestre!'); //Mostramos el mensaje
    return false; //devolvemos el foco
  }
    if(formulario.semestrenumero.value==0) { //¿Tiene 0 caracteres?
    formulario.semestrenumero.focus();    // Damos el foco al control
    alert('No ha Escrito el Grado Numerico del Semestre!'); //Mostramos el mensaje
    return false; //devolvemos el foco
  }
    if(formulario.semestreltra.value==0) { //¿Tiene 0 caracteres?
    formulario.semestreltra.focus();    // Damos el foco al control
    alert('No ha Escrito el Grado en Letra del Semestre!'); //Mostramos el mensaje
    return false; //devolvemos el foco
  }
  
 
  return true; //Si ha llegado hasta aquí, es que todo es correcto
}