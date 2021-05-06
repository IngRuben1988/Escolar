function validarFormPEC(formulario) {
	
    if(formulario.planessemestre.value.length==13) { 
    formulario.planessemestre.focus(); 
    alert('No ha Seleccionado un Semestre!'); 
    return false;
  }

   if(formulario.planesmateria.value.length==13) { 
    formulario.planesmateria.focus();
    alert('No ha Seleccionado una Materia!'); 
    return false; 
  }
   if(formulario.planes.value.length==13) { 
    formulario.planes.focus(); 
    alert('No ha Seleccionado un Plan de Estudios!');
    return false; 
  } 
 
  return true;
}// JavaScript Document